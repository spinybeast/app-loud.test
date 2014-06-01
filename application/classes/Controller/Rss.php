<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Rss extends Controller
{
    public function action_index()
    {
        //Устанавливаем заголовок RSS канала
        $info = array(
            'title' => 'AppLoud RSS feed',
            'language' => 'ru',
            'description' => 'AppLoud RSS feed',
            'link' => URL::site((Route::get('rss')->uri())),
            'pubDate' => time());

//Выбираем все категории новостей нашего сайта, с флагом show=1
//        $newscategories = ORM::factory('newscategory')->where('show', '=', 1)
//            ->find_all();

        $items = array(array(
            'title' => '111',
            'link' => '222',
            'guid' => '3333',
            'description' => '44444',
            'pubDate' => time()));

        //Перебираем наши новости и загоняем их в массив
//        foreach ($newscategories as $newscategory)
//        {
//            $newss = $newscategory->news
//                ->where('show', '=', 1)
//                ->find_all();
//            foreach ($newss as $news)
//            {
//                $url = $siteurl.'/news/'.$newscategory->url.'/'.$news->url.'.html';
//                $items[] = array(
//                    'title' => $news->title,
//                    'link' => $url,
//                    'guid' => $url,
//                    'description' => $news->short_description,
//                    'pubDate' => $news->date
//                );
//            }
//        }

        //Перед выводом не забудем установить правильный хедер для xml
        header('Content-Type: text/xml');

        //выводим нашу RSS ленту
        echo Feed::create($info, $items);
    }
} 