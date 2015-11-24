<div class="row">
	<div class="small-12 columns">
		<h2>Classes</h2>
	</div>
</div>

<div class="row">
	<div class="small-12 medium-8 columns">
		<?php foreach($data['classes'] as $classes){
			echo "<div class='panel'>";
				echo "<div class='row'>";
					echo "<div class='small-12 medium-8 columns'>";
						echo "<h4 class='hide-for-small-only'>".$classes->class_title."</h4>";
						echo "<h4 class='hide-for-medium-up text-center'>".$classes->class_title."</h4>";
						echo "<p class='hide-for-small-only'>".$classes->teaser."</p>";
						echo "<p class='hide-for-medium-up text-center'>".$classes->teaser."</p>";
						if(!empty($classes->link)) {
							echo "<a href='#' class='hide-for-small-only' data-reveal-id='class_" . $classes->id . "'><button class='button register hide-for-small-only'>Learn More</button></a>";
							echo "<a href='#' class='hide-for-medium-up text-center' data-reveal-id='class_" . $classes->id . "'><button class='hide-for-medium-only text-center button register expand'>Learn More</button></a>";
						}
					echo "</div>";
					echo "<div class='small-12 medium-4 columns'>";
						echo "<p class='hide-for-small-only'>Ages: ".$classes->ages."</p>";
						echo "<p class='hide-for-medium-up text-center'>Ages: ".$classes->ages."</p>";
						echo "<p class='hide-for-small-only'>Day: ".$classes->day."</p>";
						echo "<p class='hide-for-medium-up text-center'>Day: ".$classes->day."</p>";
						echo "<p class='hide-for-small-only'>Time: ".$classes->time."</p>";
						echo "<p class='hide-for-medium-up text-center'>Time: ".$classes->time."</p>";
					echo "</div>";
				echo "</div>";
			echo "</div>";

		}?>
	</div>
    <div class="small-12 medium-4 columns">
      <img src="<?php echo IMGDIR ?>green-logo.png"><br><br>
      <div class="panel">
        <h4 class="text-center">Questions?</h4>
        <a href="contact"><button class="button message expand">Contact Us</button></a>
      </div>
    </div>
</div>

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
