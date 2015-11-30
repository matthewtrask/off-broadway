<?php
foreach($data['classes'] as $classes){
  echo "<div id='class_".$classes->id."' class='reveal-modal' data-reveal aria-labelledby='modalTitle' aria-hidden='true' role='dialog'>";
    echo "<h2 id='modalTitle'>".$classes->class_title."</h2>";
    echo "<p class='lead'>".$classes->teaser."</p>";
    echo "<p>".$classes->description."</p>";
    echo "<p><b>Cost</b>: ".$classes->price."</p>";
    echo "<a href=".$classes->link."><button class='button register large'>Register</button>";
    echo "<a class='close-reveal-modal' aria-label='Close'>&#215;</a>";
  echo "</div>";
}
?>

