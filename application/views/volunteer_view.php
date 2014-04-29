<?php include './assets/template/header_admin.php'; ?>


<div class="container">
		<div class="row">
				
			<div id="content" class="span12">



<h2>
Volunteers
</h2>

<?php echo $msg;?>

<div class="well">
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

</div>


			</div>
		
		</div>
	</div>

<?php include './assets/template/footer_1.php'; ?>





