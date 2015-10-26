<div class="row" id="home">
    <div class="small-12 large-9 columns">
    	<div class="image" id="hero">
    		<img src="<?php echo IMGDIR; ?>groupshot2.jpg" alt="group shot">
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
			} ?>
		</div>
    </div>
    <div class="small-12 large-3 columns hide-for-small-only hide-for-medium-only" id="current">
    	<div class="logo" style="margin-bottom: 4%">
    		<img src="<?php echo IMGDIR; ?>green-logo.png" alt="Off Broadway Logo">
    	</div>
    	<div class="panel">
	    	<h3>Current Production</h3>
	    	<img src="<?php echo IMGDIR ;?>cinderella.jpg" alt="Cinderella Jr.">
	    	<p>Oct 2nd - 4th</p>

	    </div>
	    <div class="panel">
	    	<h3>Tickets</h3>
	    	<hr>
	    	<button class="button success expand">Buy Here</button>
	    </div>
	    <div class="panel">
	    	<h3>Contact</h3>
	    	<hr>
	    	<button class="button message expand">Contact Us</button>
	    </div>
    </div>
</div>

<div class="row show-for-small-only">
	<div class="small-12 columns">
    	<div class="panel">
	    	<h3>Current Production</h3>
	    	<img src="<?php echo IMGDIR ;?>cinderella.jpg" alt="Cinderella Jr.">
	    	<p>Oct 2nd - 4th</p>
	    </div>
	</div>
</div>
<div class="row show-for-small-only">
	<div class="small-12 columns">
	    <div class="panel">
	    	<h3>Tickets</h3>
	    	<hr>
	    	<button class="button success expand">Buy Here</button>
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

<!-- <div class="row" id="about">
	<div class="small-12 medium-12 large-9 columns">
		<div class="panel">
			<h2 class="text-center">Our Mission</h2>
			<p>We aim to connect children with their passions. We provide a safe place for children to explore their creative side in acting, singing and dancing.</p>
			<p>Through the various classes and productions, children will have the ability to try anything they want here at Off Broadway Children's Theatre.</p>
		</div>
	</div>
</div>

 -->
