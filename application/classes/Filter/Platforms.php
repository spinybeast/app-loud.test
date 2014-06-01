<?php defined('SYSPATH') or die('No direct script access.');

class Filter_Platforms
{
    const iOS = 1;
    const Android = 2;
    const BlackBerry = 4;
    const Windows = 8;

    const PATH_TO_ICONS = '/media/images/platforms/';
    const ICONS_EXTENSION = '.png';

    public static function getAll()
    {
        return array(
            self::iOS => 'iOS',
            self::Android => 'Android',
            self::BlackBerry => 'BlackBerry',
            self::Windows => 'Windows'
        );
    }

    public static function getActive()
    {
        $platform = self::getPlatformByRequest();

        if (!$platform) {
            $platform = self::getPlatformBySession();
        }
        if (!$platform) {
            $platform = self::getPlatformByCookie();
        }
        if (!$platform) {
            $platform = self::getPlatformByMobileDetect();
        }
        self::setActive($platform);
        return $platform;
    }

    public static function getIcons($platforms)
    {
        $icons = '';

        foreach (self::getAll() as $key => $platform) {
            if ($platforms & $key) {
                $icons .= HTML::image(self::PATH_TO_ICONS . $platform . self::ICONS_EXTENSION);
            }
        }

        return $icons;
    }

    public static function getAllIcons()
    {
        $icons = array();

        foreach (self::getAll() as $key => $platform) {
            $icons[self::getName($key)] = HTML::image(self::PATH_TO_ICONS . $platform . self::ICONS_EXTENSION);
        }

        return $icons;
    }

    private static function getPlatformByRequest()
    {
        return self::getId(Request::current()->param('platform'));
    }

    private static function getPlatformBySession()
    {
        return (int)Session::instance()->get('platform', false);
    }

    private static function getPlatformByCookie()
    {
        $platform = (int)Cookie::get('platform', 0);
        return $platform;
    }

    private static function getPlatformByMobileDetect()
    {
        $detect = new Filter_Mobile();

        if ($detect->is('iOS')) {
            return self::iOS;
        } elseif ($detect->is('AndroidOS')) {
            return self::Android;
        } elseif ($detect->is('BlackBerryOS')) {
            return self::BlackBerry;
        } elseif ($detect->is('WindowsPhoneOS')) {
            return self::Windows;
        }
    }

    public static function setActive($platform)
    {
        Cookie::set('platform', $platform);
        Session::instance()->set('platform', $platform);
    }

    public static function getName($platformId)
    {
        $allPlatforms = self::getAll();
        return $allPlatforms[$platformId];
    }

    private static function getId($platformName)
    {
        return array_search($platformName, array_map('strtolower', self::getAll()));
    }

}
