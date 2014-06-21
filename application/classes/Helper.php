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

    public static function sendEmail($data)
    {
        $to = $data['receiverMail'];
        $subject = $data['mailSubject'];
        $message = $data['message'];

        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: ' . $data['senderName'] . ' <' . $data['senderEmail'] . '>' . "\r\n";

        return mail($to, $subject, $message, $headers);
    }
}