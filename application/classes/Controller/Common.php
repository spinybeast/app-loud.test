<?php defined('SYSPATH') or die('No direct script access.');

use Filter_Platforms as Platforms;
use Filter_Category as Category;

class Controller_Common extends Controller_Template
{
    public function before()
    {
        if (Helper::isOldInternetExplorer()) {
            $this->redirectToBrowserSelection();
        }

        $this->platform = Platforms::getActive();
        $this->category = Category::getActive();

        if (!$this->platform) {
            $this->redirectToPlatformSelection();
        }

        View::set_global('activePlatform', $this->platform);
        View::set_global('category', $this->category);

        parent::before();
    }

    private function redirectToPlatformSelection()
    {
        if (Request::current()->action() != 'platforms') {
            HTTP::redirect(URL::site(Route::url('default'), true));
            die;
        }
    }

    private function redirectToBrowserSelection()
    {
        if (Request::current()->action() != 'browsers') {
            HTTP::redirect(URL::site(Route::url('static', array('action' => 'browsers')), true));
            die;
        }
    }

} 