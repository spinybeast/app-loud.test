<?php defined('SYSPATH') or die('No direct script access.');

use Filter_Platforms as Platforms;
use Filter_Category as Category;

class Controller_Common extends Controller_Template
{
    public function before()
    {
        parent::before();

        $this->platform = Platforms::getActive();
        $this->category = Category::getActive();

        if (!$this->platform) {
            $this->redirectToPlatformSelection();
        }

        View::set_global('activePlatform', $this->platform);
        View::set_global('category', $this->category);
    }

    private function redirectToPlatformSelection()
    {
        HTTP::redirect(Route::get('default')->uri());
        die;
    }


} 