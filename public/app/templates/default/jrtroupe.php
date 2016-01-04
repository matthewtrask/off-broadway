<?php

?>


<div class="row" style="margin-top: 4%">
    <div class="small-8 columns">
        <h2>OBCT Jr. Troupe</h2><hr>
        <?php foreach($data['jrTroupe'] as $jrtroupe){
          echo "<p>".$jrtroupe->content."</p>";
        } ?>
        <a href='#' data-reveal-id='troupe'><button class="button contact">See the Junior Troupe</button></a>
    </div>
    <div class="small-4 columns">
    </div>
</div>
<div class="row">
  <div class="small-8 columns">

  </div>
</div>
<div id="troupe" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <h2 id="modalTitle">Junior Troupe</h2>
  <?php foreach($data['jrTroupeImg'] as $jrTroupeImg){
    echo "<div class='small-3 columns'>";
      echo "<div class='image'>";
        echo "<a class='th' role='button' aria-label='Thumbnail' href='src=data:image/jpg;base64,$jrTroupeImg->image'><img aria-hidden='true' class='OBCTJrTroupe' alt=".$jrTroupeImg->troupe_member." src=data:image/jpg;base64,$jrTroupeImg->image></a>";
      echo "</div>";
    echo "</div>";
  }?>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
