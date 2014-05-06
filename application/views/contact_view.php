<?php include './assets/template/header_1.php'; ?>


<div class="container">
		<div class="row">
				
			<div id="content" class="span12">


<h2>Contact us</h2>
<div class="well">

<form method="POST" action="<?php echo base_url();?>contact/insert">
<table>
<tr><td>Email: </td><td><input type="text" name="email" size="25"></td></tr>
<tr><td>Name: </td><td><input type="text" name="name" size="25"></td></tr>
<tr><td>Subject: </td><td><input type="text" name="subject" size="25"></td></tr>
<tr><td>Message: </td><td><textarea name="message" rows="4" cols="50"></textarea></td></tr>
</table>
<input type="submit" value="Submit">
</form>



			</div>
		
		</div>
	</div>

<?php include './assets/template/footer_1.php'; ?>