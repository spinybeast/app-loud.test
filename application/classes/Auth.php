<?php defined('SYSPATH') or die('No direct access allowed.');

class Auth
{
    protected static $_instance;
    protected $_session;

    const USER_TYPE_USER = 'user';
    const USER_TYPE_ADMIN = 'admin';

    public static function instance()
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new Auth();
        }
        return self::$_instance;
    }

    public function __construct()
    {
        $this->_session = Session::instance();
    }

    public function get_user()
    {
        return $this->_session->get('USER_ID', 0);
    }

    public function get_admin()
    {
        return $this->_session->get('ADMIN_ID', 0);
    }

    public function user_type()
    {
        return $this->_session->get('USER_TYPE');
    }

    public function logged_in()
    {
        if ($this->user_type() == self::USER_TYPE_USER) {
            return (bool) $this->get_user();
        } elseif ($this->user_type() == self::USER_TYPE_ADMIN) {
            return (bool) $this->get_admin();
        }

        return false;
    }

    public function login($login, $password)
    {
        if (empty($login) || empty($password)) {
            return false;
        }

        return $this->login_admin($login, $password);

        // @TODO: maybe sometime...
        /*return $this->login_user($login, $password);*/
    }

    private function login_admin($login, $password)
    {
        if ($this->check_admin($login, $password)) {
            $this->_session->set('ADMIN_ID', time());
            $this->_session->set('USER_TYPE', self::USER_TYPE_ADMIN);

            return true;
        }

        return false;
    }

    private function check_admin($login, $password)
    {
        $correct_login = Kohana::$config->load('site.admin.login');
        $correct_password = Kohana::$config->load('site.admin.password');

        return ($login == $correct_login && md5($password) == $correct_password);
    }

    public function logout()
    {
        $this->_session->destroy();

        return !$this->logged_in();
    }

    private function login_user($login, $password)
    {
        $m = ORM::factory('Member')->where('login', '=', $login)->find();

        if ($m->id > 0 && $m->pass == md5($password)) {
            $this->_session->set('USER_ID', $m->id);
            $this->_session->set('USER_TYPE', self::USER_TYPE_USER);

            return true;
        }

        return false;
    }

}