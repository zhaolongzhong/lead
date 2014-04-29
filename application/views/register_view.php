<?php include './assets/template/header_1.php'; ?>


<div class="container">
		<div class="row">
				
			<div id="content" class="span12">


<h2>
Register</h2>
<div class="well">


<table>
<form method="POST" action="<?php echo base_url();?>register/process">
<tr><td>
Email: </td><td><input type="text" name="username" size="25">
</tr></td>
<tr><td>
Password: </td><td><input type="password" name="password" size="25">
</tr></td>
<tr><td>
Re-Enter Password: </td><td><input type="password" name="password2" size="25">
</tr></td>
<tr><td>
<input type="submit" value="submit">
</tr></td>
</table>
</form>

<?php echo $msg; ?>




			</div>
		
		</div>
	</div>

<?php include './assets/template/footer_1.php'; ?>