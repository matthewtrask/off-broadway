<?php
/**
 * Created by PhpStorm.
 * User: matthewtrask
 * Date: 6/14/15
 * Time: 11:16 AM
 */

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
    <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'> 
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,600' rel='stylesheet' type='text/css'>    
    <script src="bower_components/jquery/dist/jquery.js"></script>
    <?php
    Assets::css(array(
        '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
        '/bower_components/bootstrap/dist/css/bootstrap.css',
        //'https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/foundation.min.css',
        Url::templatePath() . 'css/style.css'
    ));

    //hook for plugging in css
    $hooks->run('css');

    Assets::js(array(
        Url::templatePath() . 'js/jquery.js',
        '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js',
    ));
    ?>

</head>
<body>


<?php
//hook for running code after body tag
$hooks->run('afterBody');
?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
   <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" 
         data-target="#example-navbar-collapse">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><i class="fa fa-home"></i> Off Broadway Children's Theatre</a>
   </div>
   <div class="collapse navbar-collapse" id="example-navbar-collapse">
      <ul class="nav navbar-nav pull-right">
         <li class="active"><a href="#">About</a></li>
         <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Studio <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="classes"><i class="fa fa-calendar"></i> Classes</a></li>
                <li><a href="teachers">Teachers</a></li>
                <li class="divider"></li>
                <li><a href="gallery"><i class="fa fa-camera"></i> Gallery</a></li>
                <li class="divider"></li>
                <li><a href="faq">Questions</a></li>
            </ul>
         </li>
         <li><a href="troupe">OBCT Troupe</a></li>
         <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Production <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="currentprod"><i class="fa fa-star-o"></i> Current Show</a></li>
                <li class="divider"></li>
                <li><a href="upcoming">Upcoming</a></li>
                <li class="divider"></li>
                <li><a href="auditions"><i class="fa fa-music"></i> Auditions</a></li>
            </ul>
         </li>
         <li><a href="contact"><i class="fa fa-envelope-o"></i> Contact</a></li>
      </ul>
   </div>
</nav>
<main class="page-container">


