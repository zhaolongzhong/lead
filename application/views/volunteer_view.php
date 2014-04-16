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
<h1>Volunteers</h1>
<?php echo $msg;?>

<form action="<?php echo base_url();?>newvolunteer"><input type="submit" value="Added a new volunteer"></form>

<div>
	<table style="width:1200px">
		<tr>
		 	<th>Email</th>
		 	<th>Age</th>
			<th>Fname</th>		
			<th>Lname</th>
			<th>Active</th>
			<th>Approved</th>
			<th>Address</th>
			<th>City</th>
			<th>State</th>
			<th>Primary Phone</th>
			<th>Alternative Phone</th>
			<th>Action</th>
		</tr>
		<?php 
		foreach ($query as $volunteer)
		{
		?>
		<tr>
			<td><?php echo $volunteer->username; ?></td>
			<td><?php echo $volunteer->age; ?></td>
			<td><?php echo $volunteer->fname; ?></td>
			<td><?php echo $volunteer->lname; ?></td>
			<td><?php echo $volunteer->activevolunteer; ?></td>
			<td><?php echo $volunteer->approved; ?></td>
			<td><?php echo $volunteer->streetaddress; ?></td>
			<td><?php echo $volunteer->city; ?></td>
			<td><?php echo $volunteer->statecode; ?></td>
			<td><?php echo $volunteer->primaryphone; ?></td>
			<td><?php echo $volunteer->altphone; ?></td>
			<td>
			<a href="<?php echo base_url(); ?>volunteer_update?username=<?php echo $volunteer->username; ?>">Edit</a>
			</td>
		<tr>
		<?php
		}
		?>
	</table>
</div>
</body>
</html>