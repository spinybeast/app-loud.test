<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Static extends Controller_Common
{
    public function action_about()
    {
        $this->page("about");
    }

    public function action_contact()
    {
        $this->addJS('media/js/jquery.selectbox.js');
        $this->addJS('media/js/contactpage.js');
        $this->addCSS('media/css/selectbox.css');
        $this->page("contact");
    }

    public function action_browsers()
    {
        $this->selectBrowserPage();
    }
}