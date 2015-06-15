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
    <link href='http://fonts.googleapis.com/css?family=Dosis:400,200,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <?php
    Assets::css(array(
        '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
        '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css',
        '//cdn.rawgit.com/noelboss/featherlight/1.0.3/release/featherlight.min.css',
        Url::templatePath() . 'css/style.css',
    ));

    //hook for plugging in css
    $hooks->run('css');


    Assets::js(array(
        Url::templatePath() . 'js/jquery.js',
        '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js',
        '//cdn.rawgit.com/noelboss/featherlight/1.0.3/release/featherlight.min.js',
        '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js',
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


        <div class="row row-offcanvas row-offcanvas-left">

            <!-- sidebar -->
            <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
                <ul class="nav">
                    <li class="active"><a href="home">Home</a></li>
                    <li><a href="happenings">What's New</a></li>
                    <li><a href="schools">Schools</a></li>
                    <li><a href="#" data-toggle="dropdown" class="dropdown-toggle">About Us<b class="caret"></b></a>
                        <ul class="dropdown-menu menuDrop">
                            <li><a href="aboutus">The Studio</a></li>
                            <li><a href="teachers">Teachers</a></li>
                            <li class="hidden"><a href="#">Gallery</a></li>
                        </ul>
                    </li>
                    <li><a href="troupe">OBD Troupe</a></li>
                    <li><a href="#" data-toggle="dropdown" class="dropdown-toggle">Classes<b class="caret"></b></a>
                        <ul class="dropdown-menu menuDrop">
                          <li><a href="classses">Classes</a></li>
                          <li><a href="faq">Questions</a></li>
                        </ul>
                    </li>
                    <li><a href="#" data-toggle="dropdown" class="dropdown-toggle">Shows<b class="caret"></b></a>
                        <ul class="dropdown-menu menuDrop">
                          <li><a href="currentprod">Current Show</a></li>
                          <li><a href="upcoming">Upcoming</a></li>
                          <li><a href="auditions">Auditions</a></li>
                        </ul>
                    </li>
                    <li><a href="register">Register</a></li>
                    <li><a href="boxoffice">Box Office</a></li>
                    <li class="hidden"><a href="contact">Contact</a></li>
                </ul>
            </div>
            <!-- main area -->
            <div class="row">
                <div class="col-xs-6 col-sm-9">
                    <img src="<?php echo IMGDIR; ?>green-logo.png" id="logo" class="img-responsive center-block">
                </div><!-- /.col-xs-12 main -->
            </div>
        </div><!--/.row-->
