<?php defined('SYSPATH') or die('No direct script access.');

use Filter_Platforms as Platforms;
use Filter_Category as Category;

class Controller_Common extends Controller_Template
{
    public function before()
    {
        parent::before();

        $this->checkInternetExplorer();

        $this->platform = Platforms::getActive();
        $this->category = Category::getActive();

        if (!$this->platform) {
            $this->redirectToPlatformSelection();
        }

        View::set_global('activePlatform', $this->platform);
        View::set_global('category', $this->category);
    }

    private function checkInternetExplorer()
    {
        $browser = Request::user_agent('browser');
        $version = Request::user_agent('version');
        if ($browser == 'Internet Explorer' && ($version == '7.0' || $version == '8.0')) {
            $this->redirectToBrowserSelection();
        }
    }

    private function redirectToPlatformSelection()
    {
        HTTP::redirect(Route::get('default')->uri());
        die;
    }

    private function redirectToBrowserSelection()
    {
        HTTP::redirect(Route::url('static', array('action' => 'browsers')));
        die;
    }


} 