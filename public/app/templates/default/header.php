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
    <meta property=”og:title” content="Off Broadway Children's Theatre"/>

    <!-- CSS -->
    <link href='//fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Raleway:400,200,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="/bower_components/foundation/css/foundation.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>
    <link href="/app/templates/default/css/style.css" type="text/css" rel="stylesheet">
    <link href="/app/templates/default/css/mobile.css" type="text/css" rel="stylesheet">

    <script src="/bower_components/jquery/dist/jquery.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
    <script src="/bower_components/jquery-ui/jquery-ui.js" type="text/javascript"></script>

</head>
<body>
<!-- Facebook JS -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1158671784161005";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<!-- End Facebook JS -->

<div class="fixed" style="margin-bottom: 40px;">
    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name" style="margin-left: 2%">
          <a href="/"><h1>OBCT</h1></a>
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
              <li><a href="teachers">Teachers</a></li>
            </ul>
          </li>
          <li><a href="summer">Summer</a></li>
          <li class="has-dropdown">
            <a href="#">Shows</a>
            <ul class="dropdown">
              <li><a href="schools">Schools</a></li>
              <li><a href="currentshow">Current Show</a></li>
              <li><a href="auditions">Auditions</a></li>
              <li><a href="questions">Questions</a></li>
            </ul>
          </li>
          <li class="has-dropdown">
            <a href='#'>Troupe</a>
            <ul class="dropdown">
              <li><a href="troupe">Senior Troupe</a></li>
            </ul>
          </li>
          <li><a href='contact'>Contact</a></li>
        </ul>
      </section>
    </nav>
</div>
<?php
foreach($data['alert'] as $alert){
    if(isset($alert)){
        echo "<div id='alertBox' data-alert class='alert-box success'>";
            echo "<h3 class='text-center'>".$alert->alert."</h3>";
            echo "<h3 id='urlLink' class='text-center'>Click <a class='alert' href='".$alert->link."'>here</a> to help us win!</h3>";
            echo "<a href='#' class='close'>&times;</a>";
        echo "</div>";
    }
}
?>