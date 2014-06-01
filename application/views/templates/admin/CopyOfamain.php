<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="<?php echo I18n::$lang ?>">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?  if(class_exists('Asset' )) {
		echo Asset::stylesheets($css);
		echo Asset::javascripts($js);
	}else{
		foreach ($css as $c=>$m)
			if( strpos($c, '.css') === FALSE )
				echo Html::style("/media/css/".$c.".css").PHP_EOL;
			else
				echo Html::style($c).PHP_EOL;
		foreach ($js as $j)   
			if( strpos($j, '.js') === FALSE )
				echo Html::script("/media/js/".$j.".js").PHP_EOL;
			else
				echo Html::script($j).PHP_EOL;
	}
?>
<title><?=$title?></title>
</head>

  
<body>
<?if($content_only):?>
<?=$content?>
<?else :?>
<table border="0" cellspacing="3" cellpadding="0">
	<tr>
		<td align="left" valign="top">
			<h1>Menu</h1>
			<a href="/">site</a>		<br>
			<a href="/admin/category/">categories</a>	<br>
			<a href="/admin/review/">reviews</a>		<br>
			<a href="/admin/aprove/">aprove</a>		<br>
			
		</td>
		<td align="left" valign="top"><?=$content?></td>
	</tr>
</table>
 
 
<?endif;?>            

</body>
</html>