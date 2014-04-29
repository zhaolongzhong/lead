<?php include './assets/template/header_admin.php'; ?>


<div class="container">
		<div class="row">
				
			<div id="content" class="span12">


<h2>
Send Message</h2>
<div class="well">

<form method="POST" action="<?php echo base_url();?>email/send_message">
<table>
<tr><td>Subject: </td><td><input type="text" name="subject" size="25"></td></tr>
<tr><td>Message: </td><td><textarea rows="4" cols="50"></textarea></td></tr>
<tr><td>Send to: </td><td>
							<input type="checkbox" name="volunteers" value="V"> all volunteers<br>
							<input type="checkbox" name="admins" value="A"> all admin<br>
							<input type="checkbox" name="everyone" value="VA"> all users (volunteers and admins)<br>
				</td></tr>
</table>
<br>
<input type="submit" value="Submit">
</form>



			</div>
		
		</div>
	</div>

<?php include './assets/template/footer_1.php'; ?>