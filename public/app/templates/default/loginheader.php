<?php
use Helpers\Assets;
use Helpers\Url;
use Helpers\Hooks;
?>

<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>">
<head>

	<!-- Site meta -->
	<meta charset="utf-8">
	<title><?php echo $data['title'].' - '.SITETITLE; //SITETITLE defined in app/core/config.php ?></title>

	<link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,600' rel='stylesheet' type='text/css'>
	<script src="bower_components/jquery/dist/jquery.js"></script>
	<!--<link href='https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/foundation.min.css'>-->
	<link href="/bower_components/foundation/css/foundation.css" rel="stylesheet">
	<?php
	Assets::css(array(
		'//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
		helpers\Url::templatePath() . 'css/mobile.css',
		helpers\Url::templatePath() . 'css/style.css'
	));

//	//hook for plugging in css
//	$hooks->run('css');
//
	Assets::js(array(
		Url::templatePath() . 'js/jquery.js',
		'//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js',
	));
	?>

</head>
<body>

<div class="fixed" style="padding-bottom: 20px;">
	<nav class="top-bar" data-topbar role="navigation">
		<ul class="title-area" style="margin-left: 2%;">
			<li class="name">
				<a href="#"><h1>OBCT</h1></a>
			</li>
			<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
			<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
		</ul>

		<section class="top-bar-section">
			<!-- Right Nav Section -->
			<ul class="right">
				<li ><a href="#">About Us</a></li>
				<li class="has-dropdown">
					<a href="#">Studio</a>
					<ul class="dropdown">
						<li><a href="#">Studio</a></li>
						<li><a href='#'>Classes</a></li>
						<li ><a href="#">Teachers</a></li>
					</ul>
				</li>
				<li class="has-dropdown">
					<a href="#">Shows</a>
					<ul class="dropdown">
						<li><a href="#">Current Show</a></li>
						<li ><a href="#">Upcoming</a></li>
						<li><a href="">Auditions</a></li>
					</ul>
				</li>
				<li><a href='#'>Troupe</a></li>
				<li><a href='#'>Contact</a></li>
			</ul>
		</section>
	</nav>
</div>