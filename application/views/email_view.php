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
<tr><td>Message: </td><td><textarea name="message" rows="4" cols="50"></textarea></td></tr>
<tr><td>Send to: </td><td>
    <input type='hidden' value='' name='recipients1'>
    <input type='hidden' value='' name='recipients2'>
    <input type='hidden' value='' name='recipients3'>
    <input type='hidden' value='' name='recipients4'>
							<input type="checkbox" name="recipients1" value="1"> all unpaid volunteers<br>
							<input type="checkbox" name="recipients2" value="1"> all paid volunteers<br>
							<input type="checkbox" name="recipients3" value="1"> all pager volunteers<br>
							<input type="checkbox" name="recipients4" value="1"> all office staff (admins)<br>
                            
				</td></tr>
</table>

Over here a list of individual volunteers.


<br>
<input type="submit" value="Submit">
</form>



			</div>
		
		</div>
	</div>

<?php include './assets/template/footer_1.php'; ?>