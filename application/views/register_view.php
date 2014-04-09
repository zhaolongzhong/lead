<h1>Register</h1>

<table>
<form method="POST" action="<?php echo base_url();?>register/process">
<tr><td>
Username: </td><td><input type="text" name="username" size=40">
</tr></td>
<tr><td>
Password: </td><td><input type="password" name="password" size=40">
</tr></td>
<tr><td>
Re-Enter Password: </td><td><input type="password" name="password2" size=40">
</tr></td>
<tr><td>
<input type="submit" value="submit">
</tr></td>
</table>
</form>

<?php echo $msg; ?>