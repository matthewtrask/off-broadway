<div class="container">
	<div clas="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h2>Please feel free to message us with any questions you have!</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php echo $data['form_start'];?>
			<div class="form-group">
				<label for="name">Name</label>
				<?php echo $data['form_name'];?>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<?php echo $data['form_email']; ?>
			</div>
			<div class="form-group">
				<label for="message">Message</label>
				<?php echo $data['form_message']; ?>
			</div>
			<div class="form-group">
				<?php echo $data['form_submit']; ?>
			</div>
		</div>
	</div>
</div>