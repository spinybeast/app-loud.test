<?php defined('SYSPATH') OR die('No direct script access.');

class Controller_Ajax extends Controller
{
    const RESPONSE_CODE_SUCCESS = "success";
    const RESPONSE_CODE_ERROR = "error";
    const FORWARDED_MESSAGE_TEXT = "Thank you for your message!";
    const SEND_EMAIL_ERROR_TEXT = "Sorry, we can't send your email. Try again";

    /**
     * Response body array
     *
     * @var array
     */
    private $response_body;

    /**
     * Статус ответа. По умолчанию - успешный ответ.
     *
     * @var int
     */
    protected $status = self::RESPONSE_CODE_SUCCESS;

    /**
     * Контейнер для ошибок
     *
     * @var mixed
     */
    protected $errors = NULL;

    /**
     * Контейнер для сообщений
     *
     * @var mixed
     */
    protected $message = NULL;

    /**
     * Контейнер для данных
     *
     * @var mixed
     */
    protected $data = NULL;

    /**
     * Before actions
     */
    public function before()
    {
        parent::before();

        $this->status = self::RESPONSE_CODE_SUCCESS;
    }

    /**
     * After actions
     */
    public function after()
    {
        // Передаём ошибки при наличии в массив ответа
        if ($this->errors) {
            $this->response_body['errors'] = $this->errors;

            // Если в результате обработки появились ошибки, то статус ответа должен быть "ошибка"
            if ($this->status != self::RESPONSE_CODE_ERROR)
                $this->status = self::RESPONSE_CODE_ERROR;
        }

        // Передаём сообщения в массив ответа
        if ($this->message)
            $this->response_body['message'] = $this->message;

        // Передаём данные в массив ответа
        if ($this->data)
            $this->response_body['data'] = $this->data;

        // Передаём статус ответа в массив ответа
        $this->response_body['status'] = $this->status;

        if (PHP_MAJOR_VERSION == 5 AND PHP_MINOR_VERSION < 4) {
            $this->response->body(str_replace('\/', '/', json_encode($this->response_body)));
        } else {
            $this->response->body(json_encode($this->response_body, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
        }


        $this->response->headers('Content-Type', 'application/json');

        $this->response->headers('ETag', $this->response->generate_etag());
        $this->response->send_headers();

        parent::after();
    }


    public function action_contact()
    {
        if (Request::current()->is_ajax()) {
            $mailInfo = $this->request->post();
            $validator = Validation::factory($mailInfo);
            $validator->rule("senderName", "not_empty")
                ->rule("mailText", "not_empty")
                ->rule("mailSubject", "not_empty")
                ->rules("captcha", array(array("not_empty"), array("Captcha::valid")))
                ->rules("senderEmail", array(array("not_empty"), array("email")));
            if ($validator->check()) {
                try {
                    if ($this->sendFeedback($mailInfo)) {
                        if ($mailInfo['mailSubject'] == 'Review') {
                            $this->data = array(
                                "sendReview" => $this->sendReviewAddLink($mailInfo) ?
                                        self::RESPONSE_CODE_SUCCESS : self::RESPONSE_CODE_ERROR
                            );
                        }
                        $this->message = self::FORWARDED_MESSAGE_TEXT;
                    } else {
                        $this->errors = array("mail" => self::SEND_EMAIL_ERROR_TEXT);
                    }
                } catch (Exception $exception) {
                    $this->errors = array("mail" => self::SEND_EMAIL_ERROR_TEXT);
                    $this->setExceptionMessage($exception);
                }
            } else {
                $this->errors = $validator->errors("validationErrors");
            }
        }

    }

    private function sendFeedback($data)
    {
        mail('spiny_beast@mail.ru', 'test', 'test');
        $data['receiverMail'] = Kohana::$config->load('site.admin_mail');
        $data['receiverName'] = 'App-Loud';
        $data['message'] = View::factory('templates/default/contact_email', $data)->render();

        return Helper::sendEmail($data);
    }

    private function sendReviewAddLink($data)
    {
        $data['receiverMail'] = $data['senderEmail'];
        $data['receiverName'] = $data['senderName'];
        $data['senderName'] = 'App-Loud';
        $data['senderEmail'] = Kohana::$config->load('site.admin_mail');
        $data['mailSubject'] = 'RE: ' . $data['mailSubject'];
        $data['message'] =  View::factory('templates/default/review_add_link', array(
            'hash' => $this->makeHash($data["senderEmail"]))
        )->render();

        return Helper::sendEmail($data);
    }

    private function makeHash($email)
    {
        return md5($email . rand(0, 100));
    }

    private function setExceptionMessage($exception)
    {
        $this->message = array(
            "type" => get_class($exception),
            "code" => $exception->getCode(),
            "text" => $exception->getMessage(),
            "file" => $exception->getFile(),
            "line" => $exception->getLine()
        );
    }

}