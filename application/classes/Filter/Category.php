<?php defined('SYSPATH') or die('No direct script access.');

class Filter_Category
{
    const ALL = -1;

    public static function getActive()
    {
        if (!$category = self::getCategoryByRequest()) {
            $category = self::getCategoryBySession();
        }
        self::setActive($category);
        return $category;
    }

    private static function getCategoryByRequest()
    {
        return self::getId(Request::current()->param('category'));
    }

    private static function getCategoryBySession()
    {
        return (int)Session::instance()->get('category', self::ALL);
    }

    private static function setActive($category)
    {
        Session::instance()->set('category', $category);
    }

    private static function getId($categoryName)
    {
        $category = ORM::factory('category')
            ->where(DB::expr('lower(name)'), 'like', '%' . Helper::getToken($categoryName) . '%')
            ->and_where('platform', '=', Filter_Platforms::getActive())
            ->find();

        if (!$category->loaded()) {
            return self::ALL;
        }
        return (int)$category->id;
    }
}