<div class="row" id="home">
    <div class="small-12 large-9 columns">
      <h2 class="show-for-small-only text-center">Off Broadway Children's Theatre</h2><hr>
    	<div class="image" id="hero">
    		<img src="<?php echo IMGDIR; ?>groupshot2.jpg" alt="group shot">
        <img src="<?php echo IMGDIR; ?>little-mermaid-play.jpg" alt="OBCT Mermaid Group">
        <img src="<?php echo IMGDIR; ?>green-logo.png" alt="Off Broadway Logo">
        <img src="<?php echo IMGDIR; ?>island-show.jpg" alt="OBCT Island Show">
    	</div>
    	<div class="panel">
			<h2 class="text-center">Our Mission</h2>
			<p>We aim to connect children with their passions. We provide a safe place for children to explore their creative side in acting, singing and dancing.</p>
			<p>Through the various classes and productions, children will have the ability to try anything they want here at Off Broadway Children's Theatre.</p>
		</div>
		<div class="panel" id="whatsnew">
			<h2 class="text-center">What's New!</h2>
			<?php foreach($data['new'] as $new){
				echo "<h5><b>".$new->title."</b></h5>";
				echo "<p>".$new->content."</p>";
				if(isset($new->button)){
					echo "<button class='button whatsnew'><a href='".$new->button."'>Find Out More</a></button>";
				}
				echo "<hr>";
			} ?>
		</div>
    </div>
    <div class="small-12 large-3 columns hide-for-small-only hide-for-medium-only" id="current">
    	<div class="logo" style="margin-bottom: 4%">
    		<img src="<?php echo IMGDIR; ?>green-logo.png" alt="Off Broadway Logo">
    	</div>
    	<div class="panel">
	    	<h3>Current Production</h3>
        <?php
          foreach($data['show'] as $show){
            echo "<h4>".$show->show_title."</h4>";
            echo "<img src=data:image/jpg;base64,$show->image>";
			if(isset($show->tickets)){
				echo "<button class='button register expand'><a href=".$show->box_office_link.">Buy Tickets</a></button>";
			} else {
				echo "<p>Tickets available soon!</p>";
			}
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
		<div class="fb-page" data-href="https://www.facebook.com/offbroadwaydancetheater/?fref=ts" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/offbroadwaydancetheater/?fref=ts"><a href="https://www.facebook.com/offbroadwaydancetheater/?fref=ts">Off Broadway Children&#039;s Theatre</a></blockquote></div></div>
    </div>
</div>

<div class="row show-for-small-only">
	<div class="small-12 columns">
    	<div class="panel">
        <h3>Current Production</h3>
        <?php
          foreach($data['show'] as $show){
            echo "<h4>".$show->show_title."</h4>";
            echo "<img src=data:image/jpg;base64,$show->image><br>";
            echo "<button style='margin-top: 2%' class='button register expand'><a href=".$show->box_office_link.">Buy Tickets</a></button>";
          }
        ?>
	    </div>
	</div>
</div>
<div class="row show-for-small-only">
	<div class="small-12 columns">
    <div class="panel">
      <h3>Classes</h3>
      <hr>
      <button class="button success expand"><a href="classes">Information Here</a></button>
    </div>

    </div>
</div>
<div class="row show-for-small-only">
	<div class="small-12 columns">
	    <div class="panel">
	    	<h3>Contact</h3>
	    	<hr>
	    	<button class="button message expand">Contact Us</button>
	    </div>
    </div>
</div>
