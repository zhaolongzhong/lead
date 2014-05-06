<html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php echo $error;?>

<form method="POST" action="<?php echo base_url();?>upload2/do_upload
	">

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>