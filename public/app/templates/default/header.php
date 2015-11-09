<?php
/**
 * Created by PhpStorm.
 * User: matthewtrask
 * Date: 6/14/15
 * Time: 11:16 AM
 */

use Helpers\Assets;
use Helpers\Url;

?>
<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>">
<head>

    <!-- Site meta -->
    <meta charset="utf-8">
    <title><?php echo $data['title'].' | '.SITETITLE; //SITETITLE defined in app/Core/Config.php ?></title>
    <meta name="" content="">
    <meta name="" content="">
    <meta name="" content="">
    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <!-- CSS -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'> 
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,600' rel='stylesheet' type='text/css'>    
    <script src="/bower_components/jquery/dist/jquery.js"></script>
<!--    <link href='https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/foundation.min.css'>-->
<!--    <link href="/bower_components/foundation/css/foundation.css" rel="stylesheet">-->
    <?php
    Assets::css(array(
        '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
        '/bower_components/foundation/css/foundation.css',
        Url::template_Path() . 'css/mobile.css',
        Url::template_Path() . 'css/style.css'
    ));


    Assets::js(array(
        Url::template_Path() . 'js/jquery.js',
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
          <li ><a href="aboutus">About Us</a></li>
          <li class="has-dropdown">
            <a href="#">Studio</a>
            <ul class="dropdown">
              <li><a href='classes'>Classes</a></li>
              <li ><a href="teachers">Teachers</a></li>
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
          <li><a href='contact'>Contact</a></li>
        </ul>
      </section>
    </nav>
</div>


