<div class="row">
	<div class="small-12 columns">
		<ul class="breadcrumbs">
			<li><a href='<?php echo DIR;?>admin'>Admin</a> <span class="divider">></span></li>
			<li><a href='<?php echo DIR;?>admin/users'>Users</a> <span class="divider">></span></li>
			<li>Add User</li>
		</ul>
	</div>
</div>
<div class="row">
	<div class="small-12 columns">
		<?php echo \core\error::display($error); ?>
		<h2>Add User</h2>
		<form action='' method='post'>

		<p>Username<br><input type="text" name="username" value="<?php if(isset($error)){ echo $_POST['username']; }?>"></p>
		<p>Password<br><input type="password" name="password" value=""></p>
		<p>Email<br><input type="text" name="email" value="<?php if(isset($error)){ echo $_POST['email']; }?>"></p>
		<p><input type="submit" name="submit" class="button" value="Add User"></p>

		</form>
	</div>
</div>
