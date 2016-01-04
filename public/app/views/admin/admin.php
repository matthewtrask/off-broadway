<?php
use \helpers\form;
use \helpers\session;
use Carbon\Carbon;
?>
<div class="row" style="padding-top: 2%">
	<div class="small-6 columns">
		<div class="small-6 columns">
			<h1>Admin</h1>
			<p><?php printf("%s", Carbon::now('America/New_York')->toDateTimeString());?></p>
			<p>Logged In: <?php echo ucfirst(Session::get('username')); ?></p>
			<p>Site Visitors: <?php echo count(Session::get('counter'));?></p>
			<input type="button" class="button" value="Reload Page" onClick="window.location.reload()">
		</div>
		<div class="small-6 columns">

		</div>
	</div>
	<div class="small-3 columns">
		<img src="<?php echo IMGDIR;?>/green-logo.png">
	</div>
</div><hr>

<div class="row" id="whatsNew">
	<div class="small-6 columns" id="whatsNewAdmin">
		<h4>What's New</h4>
		<?php
		foreach($data['whatsNew'] as $whatsNew){
			echo "<p><b>Title</b>: ".$whatsNew->title."</p>";
			echo "<p><b>Content</b>: ".$whatsNew->content."</p>";
			if(isset($whatsNew->button)){
				echo "<p><b>Link</b>: ".$whatsNew->button."</p>";
			}
			echo "<hr>";
		}?>
	</div>
	<div class="small-6 columns">
		<p><em>If you do not wish to add a button, do not select an option for the link</em></p>
		<fieldset>
			<form method="post" action="" id="adminWhatsNew">
				<label>Title
					<input type="text" placeholder="Headline" name="whatsNewHeadline">
				</label>
				<label>Content
					<textarea type="text" placeholder="Message" rows="6" name="whatsNewContent"></textarea>
				</label>
				<label>Link
					<select id='urlSelect' name='urlSelect' for='urlSelect'>
					<?php foreach($data['url'] as $url){
							echo "<option value=".$url->url.">".$url->url."</option>";
					} ?>
					</select>
				</label>
				<button class="button" id="submitWhatsNew" type="submit">Submit</button>
			</form>
		</fieldset>
	</div><hr>
</div>
<br><br>


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
					<input type="text" placeholder="Email" name="adminemail" for="adminEmail">
				</label>
				<label>Name
					<input type="text" placeholder="Name" name="adminName" for="adminName">
				</label>
				<label>Name
					<textarea type="text" placeholder="Message" name="adminTextMsg" rows="6" for="adminTextMsg"></textarea>
				</label>
				<button class="button" id="submitMessage" for="submit" type="submit">Submit</button>
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
					<th>Updated By</th>
					<th>Time Changed</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach($data['messages'] as $message){
						echo "<tr>";
						echo "<td>".$message->page_change."</td>";
						echo "<td>".$message->description."</td>";
						echo "<td>".$message->updatedBy."</td>";
						echo "<td>".date('Y-m-d', strtotime($message->time))."</td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
	</div>
</div>
