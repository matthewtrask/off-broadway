<?php
/**
 * Created by PhpStorm.
 * User: matthewtrask
 * Date: 11/9/15
 * Time: 7:25 PM
 */
?>

<<<<<<< HEAD


<!-- <div class="container">
  <div class="row">
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
      <img class="headshots img-responsive center-block"  data-featherlight="<?php echo IMGDIR; ?>headshot1.jpg" src="<?php echo IMGDIR; ?>headshot1.jpg" alt="">
    </div>
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
      <img class="headshots img-responsive center-block" data-featherlight="<?php echo IMGDIR; ?>headshot2.jpg" src="<?php echo IMGDIR; ?>headshot2.jpg" alt="">
    </div>
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
      <img class="headshots img-responsive center-block" data-featherlight="<?php echo IMGDIR; ?>headshot3.jpg" src="<?php echo IMGDIR; ?>headshot3.jpg" alt="">
    </div>
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
      <img class="headshots img-responsive center-block" data-featherlight="<?php echo IMGDIR; ?>headshot4.jpg" src="<?php echo IMGDIR; ?>headshot4.jpg" alt="">
    </div>
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
      <img class="headshots img-responsive center-block" data-featherlight="<?php echo IMGDIR; ?>headshot5.jpg" src="<?php echo IMGDIR; ?>headshot5.jpg" alt="">
    </div>
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
      <img class="headshots img-responsive center-block" data-featherlight="<?php echo IMGDIR; ?>headshot6.jpg" src="<?php echo IMGDIR; ?>headshot6.jpg" alt="">
    </div>
  </div>
</div>

<div class="container">
  <div class="row">

    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
      <img class="headshots img-responsive center-block" data-featherlight="<?php echo IMGDIR; ?>headshot7.jpg" src="<?php echo IMGDIR; ?>headshot7.jpg" alt="">
    </div>
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
      <img class="headshots img-responsive center-block" data-featherlight="<?php echo IMGDIR; ?>headshot8.jpg" src="<?php echo IMGDIR; ?>headshot8.jpg" alt="">
    </div>
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
      <img class="headshots img-responsive center-block" data-featherlight="<?php echo IMGDIR; ?>headshot9.jpg" src="<?php echo IMGDIR; ?>headshot9.jpg" alt="">
    </div>
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
      <img class="headshots img-responsive center-block" data-featherlight="<?php echo IMGDIR; ?>headshot10.jpg" src="<?php echo IMGDIR; ?>headshot10.jpg" alt="">
    </div>
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
      <img class="headshots img-responsive center-block" data-featherlight="<?php echo IMGDIR; ?>headshot11.jpg" src="<?php echo IMGDIR; ?>headshot11.jpg" alt="">
    </div>
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
      <img class="headshots img-responsive center-block" data-featherlight="<?php echo IMGDIR; ?>headshot12.jpg" src="<?php echo IMGDIR; ?>headshot12.jpg" alt="">
    </div>
  </div>
</div>
=======
>>>>>>> siteUpdates

<div class="row">
    <div class="small-8 columns">
        <h2>OBCT Troupe</h2>
        <?php foreach($data['troupeInfo'] as $troupeInfo){
            echo "<p>".$troupeInfo->content."</p>";
        }?>
        <button class='button contact'><a href="#" data-reveal-id="troupe">Click here to see our Troupe Members</a></button>
    </div>
    <div class="small-4 columns">
        <img src="<?php echo IMGDIR ?>green-logo.png">
        <div class="panel" style="margin-top: 5%">
            <h4>More Info on the OBCT Troupe</h4>
            <a href="#" data-reveal-id="addtInfo"><button class="button expand">Here</button></a>
        </div>
        <div class="panel" style="margin-top: 5%">
            <h4>Questions?</h4>
            <a href="contact" ><button class="button expand success">Contact</button></a>
        </div>
    </div>
</div>

<div id='addtInfo' class='reveal-modal' data-reveal aria-labelledby='modalTitle' aria-hidden='true' role='dialog'>
    <h2 class="modalTitle">Troupe Info</h2>
    <p class="lead">A little more info about our Troupe</p>
    <?php
    foreach($data['troupeAddtInfo'] as $addtInfo){
        echo "<p><b>".$addtInfo->title."</b>: ".$addtInfo->point."</p>";
    }
    ?>
</div>
