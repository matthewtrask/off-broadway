<div class="row" style="margin-top: 5%">
  <div class="small-12 medium-8 columns">
    <h2>Auditions | FAQ's</h2>
    <?php foreach($data['faq'] as $faq)
    {
      echo "<div class='panel'>";
      echo "<h3>".$faq->question."</h3>";
      echo "<button class='button register' id='".$faq->id."'><a href='#' data-reveal-id='faq".$faq->id."'>Click Here</a></button>";
      echo "</div>";
    }
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
<?php foreach($data['faq'] as $faq){
  echo "<div id='faq".$faq->id."' class='reveal-modal' data-reveal aria-labelledby='modalTitle' aria-hidden='true' role='dialog'>";
  echo "<h2 id='modalTitle'>".$faq->question."</h2>";
  echo "<p>".$faq->answer."</p>";
  echo "<a class='close-reveal-modal' aria-label='Close'>&#215;</a>";
  echo "</div>";
}
?>
