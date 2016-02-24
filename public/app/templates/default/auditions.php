<?php

?>

<div class="row" style="margin-top: 4%">
  <div class="small-12 medium-9 columns">
    <h2>Auditions</h2><hr>
    <?php foreach($data['auditions'] as $audition){
      echo "<h2>".$audition->show_title."</h2>";
      echo "<p><b>".$audition->show_teaser."</b></p>";
      echo "<p>".$audition->show_info_one."</p>";
      echo "<p>".$audition->show_info_two."</p>";
      echo "<p>Show Dates: ".$audition->show_dates."</p>";
      echo "<p>Audition Date: ".$audition->show_audition_dates."</p>";
      echo "<p>Audition Time: ".$audition->show_audition_times."</p>";
      echo "<img width='200px' src=data:image/jpg;base64,$audition->show_image>";
      echo "<p style='margin-top: 2%'>For more information, or to sign up, please email us at <a href='mailto:offbroadway@msn.net'>offbroadway@msn.net</a>";
      echo "<hr>";
    }?>
  </div>
  <div class="small-12 medium-3 columns">
    <img src="<?php echo IMGDIR ?>green-logo.png"><br><br>
    <div class="panel">
      <h4>Jr. Troupe Auditions</h4>
      <a href="#" data-reveal-id='troupeInfo'><button class="button expand popup">Info Here</button></a>
    </div>
    <div class="panel">
      <h4 class="text-center">F.A.Q's</h4>
      <a href="questions"><button class="button expand success">Audition FAQs</button></a>
    </div>
    <div class="panel">
      <h4 class="text-center">Questions?</h4>
      <a href="contact"><button class="button message expand">Contact Us</button></a>
    </div>
  </div>
</div>

<div id='troupeInfo' class='reveal-modal' data-reveal aria-labelledby='modalTitle' aria-hidden='true' role='dialog'>
<h2>Jr. Troupe Audition Info</h2><hr>
<?php
      foreach($data['jrtroupe'] as $troupeInfo) {
        echo "<h3>".$troupeInfo->title."</h3><p>".$troupeInfo->point."</p>";
      }
?>
<a href="contact"><button class="button">Contact Us</button></a>
<a class='close-reveal-modal' aria-label='Close'>&#215;</a>
</div>