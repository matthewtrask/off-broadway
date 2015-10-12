<?php use \helpers\form;?>
<div class="row">
	<div class="small-12 columns">
		<h1>Admin</h1>
		<h4><?php $date = date('m/d/Y h:i:s a', time());;
			echo $date;
			?></h4>
		<input type="button" class="button" value="Reload Page" onClick="window.location.reload()"><hr>
	</div>
</div>
<div class="row" id="messages">
	<div class="small-6 columns" id="recentMessage">
		<h4>Latest Messages</h4>
		<?php
		foreach($data['contact'] as $message){
			echo '<b>Name</b>: ' . $message->name . '<br>';
			echo '<b>Phone</b>: ' . $message->phone . '<br>';
			echo '<b>Email</b>: ' . '<a href="#" id="email">'.$message->email.'</a>' . '<br>';
			echo '<b>Message</b>: ' . $message->message . '<hr>';
		}
		?>
	</div>
	<div class="small-6 columns">
		<h4>Reply</h4>
		<fieldset>
			<form method="post" action="">
				<label>Email
					<input type="text" placeholder="Email" for="adminEmail">
				</label>
				<label>Name
					<input type="text" placeholder="Name" for="adminName">
				</label>
				<label>Name
					<textarea type="text" placeholder="Message" for="adminTextMsg"></textarea>
				</label>
				<button class="button" id="submit" type="submit">Submit</button>
			</form>
		</fieldset>
	</div>
</div>

