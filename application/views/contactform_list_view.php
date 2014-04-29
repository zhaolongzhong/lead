<!DOCTYPE html>
<html>

<head>
<style>
table,th,td
{
border:1px solid black;
border-collapse:collapse;
}
th,td
{
padding:5px;
}
th
{
text-align:left;
}
</style>
</head>

<body>
<h1>Contact Submission Form Viewer</h1>
<?php echo $msg;?>

<div>
	<table style="width:1200px">
		<tr>
		 	<th>Contact Index</th>
		 	<th>Email</th>
			<th>Subject</th>		
			<th>Message</th>
		</tr>
		<?php 
		foreach ($query as $SystemLog)
		{
		?>
		<tr>
			<td><?php echo $SystemLog->contactindex; ?></td>
			<td><?php echo $SystemLog->email; ?></td>
			<td><?php echo $SystemLog->subject; ?></td>
			<td><?php echo $SystemLog->message; ?></td>
		<tr>
		<?php
		}
		?>
	</table>
</div>
</body>
</html>