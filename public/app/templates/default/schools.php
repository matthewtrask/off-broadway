<div class="row" style="margin-top: 4%">
  <div class="small-8 columns">
    <h2>Connected Schools</h2><hr>
    <?php
      foreach($data['schoolPoints'] as $schoolPoints){
        echo "<p><b>".$schoolPoints->point."</b>: ".$schoolPoints->answer."</p>";
      }

      foreach($data['schools'] as $schools){
        echo "<button class='button register' style='margin-right: 2%'><a href='#' data-reveal-id='school_".$schools->id."'>".$schools->school."</a></button>";
        echo "<div id='school_".$schools->id."' class='reveal-modal' data-reveal aria-labelledby='modalTitle' aria-hidden='true' role='dialog'>";
          echo "<h2 id='modalTitle'>".$schools->school."</h2>";
          echo "<p class='lead'>".$schools->location."</p>";
          echo "<p>".$schools->details."</p>";
          echo "<a href='contacnt'><button class='button register large'>Contact Us</button>";
          echo "<a class='close-reveal-modal' aria-label='Close'>&#215;</a>";
        echo "</div>";
      }
    ?>
  </div>
  <div class="small-3 columns">
      <img src="<?php echo IMGDIR; ?>green-logo.png">
      <div class="panel" style="margin-top: 4%">
          <p>Want to work behind the scenes?</p>
          <a href="#" data-reveal-id="btsHelp"><button class="button message expand">Click Here</button></a>
      </div>
      <div class="panel">
          <p>Some of the past performances we have done</p>
          <a href="#" data-reveal-id="prevShows"><button class="button register expand" width="100%">Past Shows</button></a>
      </div>
      <div class="panel">
          <p>Questions about the Show?</p>
          <a href="contact"><button class="button expand">Contact Us</button></a>
      </div>
  </div>
</div>
