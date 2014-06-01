<!DOCTYPE html>
<html lang="<?php echo I18n::$lang ?>">
  <head>
    <meta charset="utf-8">
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">

   <!-- Le styles -->
   <link href="/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">

      <link href="/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="/assets/css/bootstrap-image-gallery.min.css" rel="stylesheet">


<?  if(class_exists('Asset' )) {
		echo Asset::stylesheets($css);
		echo Asset::javascripts($js);
	}else{
		foreach ($css as $c=>$m)
			if( strpos($c, '.css') === FALSE )
				echo HTML::style("/media/css/".$c.".css").PHP_EOL;
			else
				echo HTML::style($c).PHP_EOL;
		foreach ($js as $j)   
			if( strpos($j, '.js') === FALSE )
				echo HTML::script("/media/js/".$j.".js").PHP_EOL;
			else
				echo HTML::script($j).PHP_EOL;
	}
?>
 

</head>

  
<body>
<?if($content_only):?>
<?=$content?>
<?else :?>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?= Route::get('admin')->uri(); ?>">App-loud admin</a>
            </div>
            <div class="collapse navbar-collapse">
                <p class="navbar-text pull-right">
                    Logged in as <a href="#" class="navbar-link"><?= $adminName ?></a>
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="nav-header">Sidebar Menu</li>
                <li ><a href="/" target="_blank">site</a></li>
                <li <?=Request::current()->controller() == 'Category'?'class="active"':''?> ><a href="/admin/category/">categories</a></li>
                <li <?=Request::current()->controller() == 'Review'?'class="active"':''?> ><a href="/admin/review/">reviews</a></li>
                <li><a href="/admin/aprove/">aprove</a></li>
                <li><a href="/admin/test/">test</a></li>
            </ul>
        </div>
    </div>
<!--      <div class="container-fluid">-->
<!--      <div class="row-fluid">-->
<!--        <div class="span3">-->
<!--          <div class="well sidebar-nav">-->
<!--            <ul class="nav nav-list">-->
<!--              <li class="nav-header">Sidebar Menu</li>-->
<!--              <li ><a href="/" target="_blank">site</a></li>-->
<!--              <li --><?//=Request::current()->controller() == 'Category'?'class="active"':''?><!-- ><a href="/admin/category/">categories</a></li>-->
<!--              <li --><?//=Request::current()->controller() == 'Review'?'class="active"':''?><!-- ><a href="/admin/review/">reviews</a></li>-->
<!--              <li><a href="/admin/aprove/">aprove</a></li>              -->
<!--              <li><a href="/admin/test/">test</a></li>-->
<!--            </ul>-->
<!--          </div><!--/.well -->
<!--        </div><!--/span-->
<!--        <div class="span9">-->
<!--           --><?//=$content?>
<!--        </div><!--/span-->
<!--      </div><!--/row-->
<!---->
<!--      <hr>-->
<!---->
<!--    -->
<!---->
<!--    </div><!--/.fluid-container-->

<footer>
    <p>&copy; App-Loud, <?= date('Y'); ?></p>
</footer>

    
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/bootstrap-transition.js"></script>
    <script src="/assets/js/bootstrap-alert.js"></script>
    <script src="/assets/js/bootstrap-modal.js"></script>
    <script src="/assets/js/bootstrap-dropdown.js"></script>
    <script src="/assets/js/bootstrap-scrollspy.js"></script>
    <script src="/assets/js/bootstrap-tab.js"></script>
    <script src="/assets/js/bootstrap-tooltip.js"></script>
    <script src="/assets/js/bootstrap-popover.js"></script>
    <script src="/assets/js/bootstrap-button.js"></script>
    <script src="/assets/js/bootstrap-collapse.js"></script>
    <script src="/assets/js/bootstrap-carousel.js"></script>
    <script src="/assets/js/bootstrap-typeahead.js"></script>
 
<?endif;?>            

</body>
</html>