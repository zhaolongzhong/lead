<h1>Login</h1>

<table>
<form method="POST" action="<?php echo base_url();?>login/process">
<tr><td>
Username: </td><td><input type="text" name="username" size=25">
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


<?php echo $msg;?>

<ul>
	uid | username | password
	<?php 
		foreach ($query as $user)
		{
	?>
		<li>
			<?php echo $user->uid; ?> | <?php echo $user->username; ?> | <?php echo $user->password; ?>
		</li>
	<?php
		}
	?>
</ul>
