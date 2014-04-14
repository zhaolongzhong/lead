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
<h1>System Log Viewer</h1>
<?php echo $msg;?>
<a href="home">Home</a>

<div>
	<table style="width:1200px">
		<tr>
		 	<th>Admin ID</th>
		 	<th>Can Edit Users</th>
			<th>Can Delete Users</th>		
		</tr>
		<?php 
		foreach ($query as $Admin)
		{
		?>
		<tr>
			<td><?php echo $Admin->uid; ?></td>
			<td><?php echo $Admin->caneditusers; ?></td>
			<td><?php echo $Admin->candeleteusers; ?></td>
		<tr>
		<?php
		}
		?>
	</table>
</div>
</body>
</html>