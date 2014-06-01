<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Common extends Controller_Admin_Template
{
    public function before()
    {
        parent::before();

        if (!$this->adminIsAuthorized()) {
            return $this->redirectToAuth();
        }

        $this->template->adminName = Auth::USER_TYPE_ADMIN;
    }
    public function action_index()
    {
        $this->template->content = '<h1>Welcome!</h1>';
    }

    private function adminIsAuthorized()
    {
        return Auth::instance()->get_admin();
    }
}
