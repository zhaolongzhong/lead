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
		 	<th>Log Number</th>
		 	<th>Date of Action</th>
			<th>Associated User ID</th>		
			<th>Action</th>
		</tr>
		<?php 
		foreach ($query as $SystemLog)
		{
		?>
		<tr>
			<td><?php echo $SystemLog->logid; ?></td>
			<td><?php echo $SystemLog->logdate; ?></td>
			<td><?php echo $SystemLog->loguserid; ?></td>
			<td><?php echo $SystemLog->logaction; ?></td>
		<tr>
		<?php
		}
		?>
	</table>
</div>
</body>
</html>