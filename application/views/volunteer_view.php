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
		 	<th>VID</th>
		 	<th>Age</th>
			<th>Fname</th>		
			<th>Lname</th>
			<th>Active</th>
			<th>Email</th>
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
			<td><?php echo $volunteer->VID; ?></td>
			<td><?php echo $volunteer->Age; ?></td>
			<td><?php echo $volunteer->Fname; ?></td>
			<td><?php echo $volunteer->Lname; ?></td>
			<td><?php echo $volunteer->ActiveVolunteer; ?></td>
			<td><?php echo $volunteer->Email; ?></td>
			<td><?php echo $volunteer->StreetAddress; ?></td>
			<td><?php echo $volunteer->City; ?></td>
			<td><?php echo $volunteer->StateCode; ?></td>
			<td><?php echo $volunteer->PrimaryPhone; ?></td>
			<td><?php echo $volunteer->AltPhone; ?></td>
			<a href="<?php echo base_url(); ?>volunteer_update/<?php echo $volunteer->VID; ?>">Edit</a>
			<a href="<?php echo base_url(); ?>volunteer/delete/<?php echo $volunteer->VID; ?>">Delete</a>
			</td></td>
		<tr>
		<?php
		}
		?>
	</table>
</div>
</body>
</html>