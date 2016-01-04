<?php
/**
 * Created by PhpStorm.
 * User: matthewtrask
 * Date: 6/14/15
 * Time: 4:45 PM
 */
?>

<div class="row" style="margin-top: 4%">
    <div class="small-12 medium-9 columns">
        <h2>About Off Broadway Children's Theatre</h2>
        <?php
            foreach($data['about'] as $about){
                echo "<p>".$about->content."</p>";
            }
            echo "<img alt='OBCT Logo' class='hide-for-small-only' id='ObctLogo' src=".IMGDIR."green-logo.png>";
        ?>
    </div>
    <div class="small-12 medium-3 columns">
        <img src="<?php echo IMGDIR ?>green-logo.png"><br><br>
        <div class="panel">
            <h4 class="text-center">Questions?</h4>
            <a href="contact"><button class="button message expand">Contact Us</button></a>
        </div>
    </div>
</div>
