<?php

use Helpers\Assets;
use Helpers\Url;
use Helpers\Hooks;

//initialise hooks
$hooks = Hooks::get();
?>
<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>">
<head>

	<!-- Site meta -->
	<meta charset="utf-8">
	<?php
	//hook for plugging in meta tags
	$hooks->run('meta');
	?>
	<title><?php echo $data['title'].' - '.SITETITLE; //SITETITLE defined in app/Core/Config.php ?></title>

	<!-- CSS -->
	<link href='http://fonts.googleapis.com/css?family=Dosis:400,200,600' rel='stylesheet' type='text/css'>
	<?php
	Assets::css(array(
		'//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
		'//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css',
		Url::templatePath() . 'css/style.css',
	));

	//hook for plugging in css
	$hooks->run('css');

	Assets::js(array(
		Url::templatePath() . 'js/jquery.js',
		'//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js',
		Url::templatePath() . 'js/main.js'
	));
	?>

</head>
<body>
<?php
//hook for running code after body tag
$hooks->run('afterBody');
?>

<div class="page-container">

	<!-- top navbar -->
    <div class="navbar navbar-default" role="navigation">
       <div class="container">
    	<div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".sidebar-nav">
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
    	</div>
       </div>
    </div>

    <div class="container">
      <div class="row row-offcanvas row-offcanvas-left">

        <!-- sidebar -->
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">What's New</a></li>
              <li><a href="#">Schools</a></li>
				<li><a href="#" data-toggle="dropdown" class="dropdown-toggle">About Us<b class="caret"></b></a>
					<ul class="dropdown-menu menuDrop">
						<li><a href="#">The Studio</a></li>
						<li><a href="#">Teachers</a></li>
					</ul>
				</li>
				<li><a href="#">OBD Troupe</a></li>
				<li><a href="#" data-toggle="dropdown" class="dropdown-toggle">Classes<b class="caret"></b></a>
					<ul class="dropdown-menu menuDrop"></ul>
				</li>
				<li><a href="#" data-toggle="dropdown" class="dropdown-toggle">Shows<b class="caret"></b></a>
					<ul class="dropdown-menu menuDrop"></ul>
				</li>
				<li><a href="#">Register</a></li>
				<li><a href="#">Box Office</a></li>
				<li><a href="#">Contact</a></li>
            </ul>
        </div>

        <!-- main area -->
        <div class="col-xs-12 col-sm-9">
			<img src="<?php echo IMGDIR; ?>green-logo.png" id="logo" class="img-responsive center-block">
			<h1 class="text-center" style="margin-bottom: 30px;">Connecting kids with their passion and each other</h1>
		</div><!-- /.col-xs-12 main -->
	  </div><!--/.row-->



