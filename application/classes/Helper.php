<?php defined('SYSPATH') or die('No direct access allowed.');

class Helper
{
    public static function trim_text($input, $length, $ellipses = true, $strip_html = true)
    {
        if ($strip_html) {
            $input = strip_tags($input);
        }

        if (strlen($input) <= $length) {
            return $input;
        }

        $last_space = strrpos(substr($input, 0, $length), ' ');
        $trimmed_text = substr($input, 0, $last_space);

        if ($ellipses) {
            $trimmed_text .= '...';
        }

        return $trimmed_text;
    }

    public static function getToken($categoryName)
    {
        if (strpos($categoryName, "-")) {
            return strtok($categoryName, "-");
        }
        return $categoryName;
    }

    public static function isNotFake($file)
    {
        return $file != '.' && $file != '..';
    }
}