<div class="row">
	<div class="small-12 columns">
		<h2>Classes</h2>
	</div>
</div>

<div class="row">
	<div class="small-8 columns">
		<?php foreach($data['classes'] as $classes){
			echo "<div class='panel'>";
				echo "<div class='row'>";
					echo "<div class='small-8 columns'>";
						echo "<h4>".$classes->class_title."</h4>";
						echo "<p>".$classes->teaser."</p>";
						if(!empty($classes->link)) {
							echo "<a href='#' data-reveal-id='class" . $classes->id . "'><button class='button register'>Learn More</button></a>";
						}
					echo "</div>";
					echo "<div class='small-4 columns'>";
						echo "<p>Ages: ".$classes->ages."</p>";
						echo "<p>Day: ".$classes->day."</p>";
						echo "<p>Time: ".$classes->time."</p>";
					echo "</div>";
				echo "</div>";
			echo "</div>";
		}?>
	</div>
</div>

<?php
foreach($data['classes'] as $classes){
	
}
?>

<!-- Junior Musical Theatre -->
<div id="jmt" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <h2 id="modalTitle">Junior  Musical Theatre</h2>
  <p class="lead">Come take a journey with Ms. Shannon and her infectious teaching style as she helps your young performer connect with the song to tell the story.</p>
  <p>This is a great way for the young performer to get the basics of all the elements of what Musical Theater is: song- dance and acting. We will attack stage basics, auditions, building a character that conveys a story through song and working as an ensemble to bring those moments to life.  We will cover selections from Annie, Peter Pan, Seussical, Honk and many more to help keep the class fresh and challenging. We will have periodic showcases through the year to showcase their growth and passion.</p>
  <p><b>Cost</b>: $55.00</p>
  <a href="#"><button class="button register large">Register</button></a>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
<!-- /Junior Musical Theatre-->
<!-- Beginning Acting/improv -->
<div id="bia" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <h2 id="modalTitle">Musical Theatre Dance</h2>
  <p class="lead">Mr. Chris will help your young performer connect with their inner passion for storytelling.</p>
   <p>Mr. Chris will help your young performer connect with their inner passion for storytelling. Each class is high energy, non stop fun exploring the basics of acting and Improv. We will create spontaneous scenes with unique characters that are humorous and memorable. We challenge the young performer to use their imagination, think outside the box and help establish the who -what- where- when and why of the scene. We will touch on the terminology of stage, work on scenes from plays and understand text of what the playwright is trying to convey. They will grow in confidence and have a greater understanding of themselves and connect with the other performers in the class.We will have periodic showcases through the year to showcase their growth and passion.</p>
  <p><b>Cost</b>: $55.00</p>
  <a href="#"><button class="button register large">Register</button></a>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
<!-- /Beginning Acting/Improv -->
<!-- Musical Theatre Dance -->
<div id="mtd" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <h2 id="modalTitle">Musical Theatre Dance</h2>
  <p class="lead">Come join Erin Greenway as she inspires you to connect to the basics of Musical Theater Dance.</p>
  <p>Come join Erin Greenway as she inspires you to connect to the basics of Musical Theater Dance. We will build on the core basics of dance combinations, and required technique that will  help to prepare you for auditions and feel comfortable when learning dance routines for shows. We will focus on classic shows like Guys and Dolls, Mary Poppins, as well as today’s shows like Hairspray, Shrek, Newsies and Aladdin and many more.</p>
  <p><b>Cost</b>: $55.00</p>
  <a href="#"><button class="button register large">Register</button></a>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
<!-- /Musical Theatre Dance -->
<!-- Intro to Musical Theatre -->
<div id="imt" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <h2 id="modalTitle">Intro to Musical Theatre</h2>
  <p class="lead">Come take a journey with Ms. Shannon and her infectious teaching style as she helps your young performer connect with the song to tell the story.</p>
  <p>Come take a journey with Ms. Shannon and her infectious teaching style as she helps your young performer connect with the song to tell the story. This is a great way for the young performer to get the basics of all the elements of what Musical Theater is: song- dance and acting. We will attack stage basics, auditions, building a character that conveys a story through song and working as an ensemble to bring those moments to life.  We will cover selections from Annie, Peter Pan, Seussical, Honk and many more to help keep the class fresh and challenging. We will have periodic showcases through the year to showcase their growth and passion.</p>
  <p><b>Cost</b>: $55.00</p>
  <a href="#"><button class="button register large">Register</button></a>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
<!-- /Musical Theatre Dance -->











