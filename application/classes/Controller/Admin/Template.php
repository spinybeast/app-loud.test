<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Template extends Kohana_Controller_Template
{
    public $folder = "templates";
    public $layout = "admin";
    public $file = "main";

    public function before()
    {
        $this->template = "{$this->folder}/{$this->layout}/{$this->file}";

        parent::before(); // auto_render ?-> $this->template = View::factory($this->template);
        $this->showeditor = false;

        $this->template->title = 'App-loud';
        $this->template->meta_keywords = '';
        $this->template->meta_description = '';
        $this->template->content_only = false;
        $this->template->profiler = false;

        $this->template->css = array();
        $this->template->js = array();

        if ($this->auto_render) {
            // Initialize empty values
            $this->template->content = ''; //__('empty page');
            $this->template->css = array();
            $this->template->js = array();
        }
    }

    public function after()
    {
        if ($this->auto_render) {
            $css = array(
            );

            $js = array(
            );

            if ($this->showeditor) {
                $js[] = 'editors/tinymce/jscripts/tiny_mce/tiny_mce.js';
                $js[] = 'media/js/editor.js';
            }

            if (Request::current()->is_ajax() === TRUE || $this->template->content_only) {
                $this->response->body($this->template->content);
            } else {
                $this->template->css = array_merge($css, $this->template->css);
                $this->template->js = array_merge($js, $this->template->js);

                parent::after();
            }
        }
    }

    protected function redirectToAuth()
    {
        return HTTP::redirect(Route::get('admin_auth')->uri());
    }

    protected function redirectToMain()
    {
        return HTTP::redirect(Route::get('admin')->uri());
    }
}
