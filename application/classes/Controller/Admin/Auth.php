<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Auth extends Controller_Admin_Template
{
    public function action_auth()
    {
        $this->template->content_only = true;
        $this->template->content = View::factory("{$this->folder}/{$this->layout}/auth");
    }

    public function action_login()
    {
        $user = $this->request->post();

        if (Auth::instance()->login($user["login"], $user["password"])) {
            Session::instance()->delete('error');
            return $this->redirectToMain();
        }
        Session::instance()->set('error', 'Auth failed');
        return $this->redirectToAuth();
    }

    public function action_logout()
    {
        if (Auth::instance()->logout()) {
            return $this->redirectToAuth();
        }
    }
} 