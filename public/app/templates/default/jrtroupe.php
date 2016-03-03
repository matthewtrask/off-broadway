<?php

?>


<div class="row" style="margin-top: 4%">
    <div class="small-8 columns">
        <h2>OBCT Jr. Troupe</h2><hr>
        <?php foreach($data['jrTroupe'] as $jrtroupe){
          echo "<p>".$jrtroupe->content."</p>";
        } ?>
        <!--<a href='#' data-reveal-id='troupe'><button class="button contact">See the Junior Troupe</button></a>-->
        <button class="button"><a href="troupe">Senior Troupe Information</a></button>
    </div>
    <div class="small-4 columns">
    </div>

    <div class="small-12 medium-3 columns">
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
<div id="troupe" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <h2 id="modalTitle">Junior Troupe</h2><hr>
  <?php foreach($data['jrTroupeImg'] as $jrTroupeImg){
    echo "<div class='small-3 columns' id='jrTroupeImg' style='margin-bottom: 1%'>";
      echo "<img src=data:image/jpg;base64,$jrTroupeImg->image>";
    echo "</div>";
  }?>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
