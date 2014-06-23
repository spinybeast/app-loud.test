<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Template extends Kohana_Controller_Template
{
    public $folder = "templates"; // ����� �� views, ��� ����� ��������� � �����
    public $layout = "default"; // ������ (����), ������� ����������
    public $file = "main"; // ������� ����, ������� �������� ��� ����� (�����, ����� � �.�.)
    public $template;

    protected $platform;
    protected $category;

    protected $showRightBlock;

    public function before()
    {
        $this->template = "{$this->folder}/{$this->layout}/{$this->file}";
        parent::before();

        if ($this->isInformationPage()) {
            $this->setShowRightBlock(false);
        } else {
            $this->setShowRightBlock(true);
        }
        // �������������� ����������
        $this->template->title = 'App-loud';
        $this->template->meta_keywords = '';
        $this->template->meta_description = '';
        $this->template->profiler = false;
        // css � javascript
        $this->template->css = array();
        $this->template->js = array();

        if ($this->auto_render) {
            // Initialize empty values
            $this->template->content = '';
            $this->template->css = array();
            $this->template->js = array();
        }
    }

    public function after()
    {
        if ($this->auto_render) {
            $css = array(
                "media/css/styles.css" => 'screen',
            );

            $js = array(
                'media/js/jquery.js',
                'media/js/scripts.js'
            );
            if (Request::current()->is_ajax() === TRUE) {
//                $this->response->body($this->template->content);
            } else { // ������� ���������� ������������
                $this->template->css = array_merge($css, $this->template->css);
                $this->template->js = array_merge($js, $this->template->js);

                parent::after();
            }
        }
    }

    protected function notFoundPage()
    {
        $content = View::factory("{$this->folder}/{$this->layout}/404");
        $this->specialPage($content);
    }

    protected function selectPlatformPage()
    {
        $content = View::factory("{$this->folder}/{$this->layout}/special/select_platform")
            ->set('platforms', Filter_Platforms::getAll());
        $this->specialPage($content);
    }

    protected function selectBrowserPage()
    {
        $content = View::factory("{$this->folder}/{$this->layout}/special/select_browser");
        $this->specialPage($content);
    }

    public function specialPage($content)
    {
        $this->template->header = View::factory("{$this->folder}/{$this->layout}/special/header");
        $this->template->footer = View::factory("{$this->folder}/{$this->layout}/special/footer");
        $this->template->content = $content;
    }

    public function page($template, $headerVariables = array(), $rightBlockVariables = array(), $centerVariables = array())
    {
        $this->getHeader($headerVariables);

        if ($this->getShowRightBlock()) {
            $this->getRightBlock($rightBlockVariables);
        }

        $this->getContent($template, $centerVariables);

        $this->getFooter();
    }

    public function reviewPage(Model_Review $review)
    {
        $this->addCSS('media/css/jcarousel.css');
        $this->addCSS('media/css/fancybox.css');
        $this->addJS('media/js/jquery.jcarousel.js');
        $this->addJS('media/js/jquery.fancybox.js');
        $this->addJS('media/js/reviewpage.js');

        $headerVariables = array();
        $rightBlockVariables = array('category_cloud' => ORM::factory("Category")->getCloudForPlatform($this->platform));
        $centerVariables = array('review' => $review);

        $this->page("review", $headerVariables, $rightBlockVariables, $centerVariables);
    }

    protected function addCSS($cssFile)
    {
        $this->template->css[$cssFile] = 'screen';
    }

    protected function addJS($jsFile)
    {
        $this->template->js[] = $jsFile;
    }

    protected function getHeader($variables = array())
    {
        $this->getBlock('header', $variables);
    }

    protected function getFooter($variables = array())
    {
        $this->getBlock('footer', $variables);
    }

    protected function getRightBlock($variables = array())
    {
        $this->getBlock('rightBlock', $variables);
    }

    protected function getBlock($blockName, $variables = array())
    {
        $this->template->$blockName = View::factory("{$this->folder}/{$this->layout}/{$blockName}");
        if (count($variables) > 0) {
            foreach ($variables as $key => $value) {
                $this->template->$blockName->set($key, $value);
            }
        }
    }

    protected function getContent($template, $variables = array())
    {
        $this->template->content = View::factory("{$this->folder}/{$this->layout}/{$template}", $variables);
    }

    private function isInformationPage()
    {
        return ($this->request->action() == 'about' || $this->request->action() == 'contact');
    }

    protected function setShowRightBlock($show)
    {
        $this->showRightBlock = $show;
    }

    protected function getShowRightBlock()
    {
        return $this->showRightBlock;
    }

    public function action_platform()
    {
        $this->selectPlatformPage();
    }
}
