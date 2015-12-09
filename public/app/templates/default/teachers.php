<?php
/**
 * Created by PhpStorm.
 * User: matthewtrask
 * Date: 11/8/15
 * Time: 7:59 PM
 */

?>

<div class="row">
    <div class="small-12 medium-8 columns">
        <h2>Teachers</h2>
        <?php foreach($data['teachers'] as $teachers){
            echo "<div class='panel' id='teachers'>";
                        echo "<h4>".$teachers->name."</h4>";
                        echo "<p>".$teachers->about."</p>";
                        echo "<img src=data:image/jpg;base64,$teachers->image>";
            echo "</div>";
        }?>
    </div>
    <div class="small-12 medium-4 columns">
      <div class="logo" style="margin-bottom: 4%">
        <img src="<?php echo IMGDIR; ?>green-logo.png" alt="Off Broadway Logo">
      </div>
      <div class="panel">
        <h3>Current Production</h3>
        <?php
          foreach($data['show'] as $show){
            echo "<h4>".$show->show_title."</h4>";
            echo "<img src=data:image/jpg;base64,$show->image>";
            echo "<button class='button register expand'><a href=".$show->box_office_link.">Buy Tickets</a></button>";
          }
        ?>


      </div>
      <div class="panel">
        <h3>Classes</h3>
        <hr>
        <button class="button success expand"><a href="classes">Information Here</a></button>
      </div>
      <div class="panel">
        <h3>Contact</h3>
        <hr>
        <button class="button message expand"><a href="contact">Contact Us</a></button>
      </div>
    </div>
</div>
