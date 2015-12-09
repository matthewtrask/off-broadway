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
            echo "<button class='button register'><a href=".$show->box_office_link.">Buy Tickets</a></button>";
          }
        ?>


<<<<<<< HEAD
  <div class="row module">
    <div class="col-md-2 col-lg-2">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
      <h1 class="text-center" style="margin-bottom: 2%; margin-right: 5%">Connecting kids with their passion and each other</h1>
      <h2 class="text-center">Dear Edwina Junior tickets are now on sale!</h2>
      <img src="<?php echo IMGDIR ?>edwina.jpg" class="img-responsive center-block" alt="Edwina Junior OBCT">
      <h4 class="text-center">November 6th - 8th</h4>
      <div class="text-center" id="buynow">
        <button class="btn btn-large text-center"><a href="https://obct.yapsody.com/event/index/20348/dear-edwina-jr">Tickets Here!</a></button>
      </div>
      <div class="container">
      <div class="carousel slide" id="carousel" data-ride="carousel">
      <!-- Indicators for Slides -->
        <ol class="carousel-indicators">
          <li data-target="#carousel" data-slide-to="0" class="active"></li>
          <li data-target="#carousel" data-slide-to="1"></li>
          <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for Carousel -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="<?php echo IMGDIR;?>hsm-obct.jpg" class="img-responsive center-block">
          </div>
          <div class="item">
            <img src="<?php echo IMGDIR;?>opening-night.jpg" class="img-responsive center-block">
          </div>
          <div class="item">
            <img src="<?php echo IMGDIR;?>island-show.jpg" class="img-responsive center-block">
          </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
       </a>
      </div>
=======
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
>>>>>>> siteUpdates
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
<<<<<<< HEAD
  </div>
  </div>
  <!-- <div class="container" style="margin-top: 40px;">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h3>The Off Broadway Children's Theatre is pleased to announce auditions for its Fall production of "Cinderella Kids"! The auditions are open to any child between the ages of 5 and 12 years old and will be held on Saturday, August 1st at 2pm-4pm. Auditionees should prepare 30 seconds of a song of their choice to sing, come dressed to learn a short dance and older children may be asked to read from the script.</h3>
            <h3>For more information, please call 770-664-2410 or email us at <a href="mailto:offbroadway@msn.com">offbroadway@msn.com</a>!</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <h2 class="text-center">We are currently auditioning for Cinderella Kids!</h2>
          <h4 class="text-center">For more information or email us at <a href="mailto:offbroadway@msn.com">offbroadway@msn.com</a> for more details!</h4>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <img src="<?php echo IMGDIR; ?>cinderella.jpg" alt="Cinderella Kids" class="img-responsive center-block">
        </div>
      </div>
    </div> -->
  </div>
=======
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
>>>>>>> siteUpdates
