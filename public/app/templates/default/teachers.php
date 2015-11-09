<?php
/**
 * Created by PhpStorm.
 * User: matthewtrask
 * Date: 11/8/15
 * Time: 7:59 PM
 */

?>

<div class="row">
    <div class="small-8 columns">
        <h2>Teachers</h2>
        <?php foreach($data['teachers'] as $teachers){
            echo "<div class='panel' id='teachers'>";
                        echo "<h4>".$teachers->name."</h4>";
                        echo "<p>".$teachers->about."</p>";
                        echo "<img src=data:image/jpg;base64,$teachers->image>";
            echo "</div>";
        }?>
    </div>
    <div class="small-4 columns">
        <img src="<?php echo IMGDIR ?>green-logo.png"><br><br>
        <div class="panel">
            <h4 class="text-center">Questions?</h4>
            <a href="contact"><button class="button message expand">Contact Us</button></a>
        </div>
    </div>
</div>