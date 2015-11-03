<?php
use \helpers\form;
use \helpers\session;
?>
<div class="row" style="padding-top: 6%">
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
			<form method="post" action="" id="adminMessage">
				<label>Email
					<input type="text" placeholder="Email" for="adminEmail">
				</label>
				<label>Name
					<input type="text" placeholder="Name" for="adminName">
				</label>
				<label>Name
					<textarea type="text" placeholder="Message" rows="6" for="adminTextMsg"></textarea>
				</label>
				<button class="button" id="submit" type="submit">Submit</button>
			</form>
		</fieldset>
	</div><hr>
</div>

<div class='row'>
	<div class="small-12 columns">
		<h4>Message Queue</h4>
		<p>This will be a way for you to see what pages get worked on. If I change something Ill update it here so you know. Eventually I will work it out so when you change something it will be updated here as well.</p>
		<table id="mqTable">
			<thead>
				<tr>
					<th>Page Title</th>
					<th>Description</th>
					<th>Time Changed</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach($data['messages'] as $message){
						echo "<tr>";
						echo "<td>".$message->page_change."</td>";
						echo "<td>".$message->description."</td>";
						echo "<td>".date('Y-m-d', strtotime($message->time))."</td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
	</div>
</div>

