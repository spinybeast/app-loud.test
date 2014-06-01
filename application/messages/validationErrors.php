<?php defined('SYSPATH') or die('No direct script access.');
return array(
    'senderName' => array(
        'not_empty' => 'Enter your name'
    ),
    'senderEmail' => array(
        'not_empty' => 'Enter your E-mail address',
        'email' => 'E-mail address is not correct'
    ),
    'mailSubject' => array(
        'not_empty' => 'Select your message subject'
    ),
    'mailText' => array(
        'not_empty' => 'Enter your message text'
    ),
    'captcha' => array(
        'not_empty' => 'Enter captcha',
        'Captcha::valid' => 'Captcha is not valid'
    )
);