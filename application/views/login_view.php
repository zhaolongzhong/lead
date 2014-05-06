<?php include './assets/template/header_1.php'; ?>


<div class="container">
		<div class="row">
				
			<div id="content" class="span12">



<h2>Login</h2>

<div class="well">
<table>
<form method="POST" action="<?php echo base_url();?>login/process">
<tr><td>
Email: </td><td><input type="text" name="username" size=25">
</tr></td>
<tr><td>
Password: </td><td><input type="password" name="password" size=25">
</tr></td>
<tr><td>
<input type="submit" value="Login">
</tr></td>
</table>
</form>
<a id="register" href="register">Register</a>

<h3>Test accounts:</h3>

<?php echo $msg;?>

<ul>
	uid | username | password | role
	<?php 
		foreach ($query as $user)
		{
	?>
		<li>
			<?php echo $user->uid; ?> | <?php echo $user->username; ?> | <?php echo $user->password;  ?> | <?php echo $user->role;?>
		</li>
	<?php
		}
	?>
</ul>
</div>


			</div>
		
		</div>
	</div>

<?php include './assets/template/footer_1.php'; ?>