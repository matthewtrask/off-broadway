<div class="row">
  <div class="small-9 columns">
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
</div>
<?php foreach($data['faq'] as $faq){
  echo "<div id='faq".$faq->id."' class='reveal-modal' data-reveal aria-labelledby='modalTitle' aria-hidden='true' role='dialog'>";
    echo "hello";
  echo "</div>";
}
?>

<div id="faq1" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <h2 id="modalTitle">Awesome. I have it.</h2>
  <p class="lead">Your couch.  It is mine.</p>
  <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
