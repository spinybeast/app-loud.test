<!DOCTYPE html>
<html lang="<?php echo I18n::$lang ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="user-scalable=no, width=device-width" />

    <?  if (class_exists('Asset')) {
        echo Asset::stylesheets($css);
        echo Asset::javascripts($js);
    } else {
        foreach ($css as $file => $display) {
            if (strpos($file, '.css') === FALSE) {
                echo HTML::style("/media/css/" . $file . ".css") . PHP_EOL;
            } else {
                echo HTML::style($file) . PHP_EOL;
            }
        }
        foreach ($js as $file) {
            if (strpos($file, '.js') === FALSE) {
                echo HTML::script("/media/js/" . $file . ".js") . PHP_EOL;
            } else {
                echo HTML::script($file) . PHP_EOL;
            }
        }
    }
    ?>
    <title><?= $title ?></title>
</head>
<body>
<?= $header ?>
<div class="wrapper">
    <? if (isset($rightBlock)): ?>
        <?= $rightBlock ?>
    <? endif; ?>
    <?= $content ?>
</div>
<?= $footer ?>
<!-- profiler -->
<? if (Request::current()->is_ajax() !== TRUE && $profiler == true) : ?>
    <?= View::factory('profiler/stats') ?>
<? endif; ?>
<? if (Request::current()->controller() == "Review" && Request::current()->action() == "index"): ?>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51af29c7191320c2"></script>
<? endif; ?>
</body>
</html>