<div class="row">
	<div class="small-12 columns">

		<ul class="breadcrumbs">
			<li><a href='<?php echo DIR;?>admin'>Admin</a> <span class="divider"></span></li>
			<li><a href='<?php echo DIR;?>admin/users'>Users</a> <span class="divider"></span></li>
			<li>Edit User</li>
		</ul>
	</div>
</div>
<div class="row">
	<div class="small-12 columns">
		<?php echo \core\error::display($error); ?>
		<h2>Edit User</h2>
		<form action='' method='post'>

		<p>Username<br><input type="text" name="username" value="<?php echo $data['row'][0]->username; ?>"></p>
		<p>Password<br><input type="password" name="password" value=""></p>
		<p>Email<br><input type="text" name="email" value="<?php echo $data['row'][0]->email;?>"></p>
		<p><input type="submit" name="submit" class="button" value="Update"></p>

		</form>
	</div>
</div>
