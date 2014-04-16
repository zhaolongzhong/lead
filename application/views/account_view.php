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
<?php echo $msg;?>

<ul>
	uid | username | password
	<?php 
		foreach ($query as $user)
		{
	?>
		<li>
			<?php echo $user->uid; ?> | <?php echo $user->username; ?> | <?php echo $user->password; ?>
			| <a href="<?php echo base_url(); ?>account/delete?uid=<?php echo $user->uid; ?>">Delete</a>
		</li>
	<?php
		}
	?>
</ul>

<!DOCTYPE html>
<html>


<h1>Left Join</h1>
<?php echo $msg;?>

<div>
	<table style="width:1200px">
		<tr>
			<th>UID</th>
			<th>Username</th>
		 	<th>Password</th>
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
		foreach ($joinquery as $volunteer)
		{
		?>
		<tr>
			<td><?php echo $volunteer->uid; ?></td>
			<td><?php echo $volunteer->username; ?></td>
			<td><?php echo $volunteer->password; ?></td>
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
			<a href="<?php echo base_url(); ?>account/delete?uid=<?php echo $user->uid; ?>">Delete</a>
			</td>
		<tr>
		<?php
		}
		?>
	</table>
</div>
</body>
</html>