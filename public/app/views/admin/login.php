

<?php echo \core\error::display($error); ?>
	<div class="row" id="login">
		<div class="medium-12 columns">
			<h2 class="text-center">Off Broadway Children's Theatre</h2>
			<h4 class="text-center">Admin Panel</h4>
			<div class='panel login'>
				<form action='' method='post'>

					<p>Username<br><input type="text" class='form-control' name="username" value=""></p>
					<p>Password<br><input type="password" class='form-control' name="password" value=""></p>
					<p class="text-center"><input type="submit" name="submit" class='button expanded' value="Login"></p>

				</form>
			</div>
		</div>
	</div>
	<div class="row" style="margin-top: 20px;">
		<div class="medium-12 columns">
			<div class="panel login">
				<p class="text-center"><b>If you didnt mean to land on this page</b></p>
				<p class="text-center"><button class="button warning text-center">Please Click Here</button></p>
			</div>
		</div>
	</div>
