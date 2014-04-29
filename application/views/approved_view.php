<?php include './assets/template/header_admin.php'; ?>


<div class="container">
		<div class="row">
				
			<div id="content" class="span12">



<h2>
Time Sheet Request List</h2>

<div class="well">
<div>
	<table style="width:1000px">
		<tr>
		 	<th>Time Sheet ID</th>
		 	<th>User ID</th>
			<th>Start Time</th>		
			<th>End Time</th>
			<th>Hours Worked</th>
			<th>Approved By</th>
			<th>Comments</th>
			<th>Action</th>
		</tr>
		<?php 
		foreach ($query as $request)
		{
		?>
		<tr>
			<td><?php echo $request->timesheetid; ?></td>
			<td><?php echo $request->uid; ?></td>
			<td><?php echo $request->starttime; ?></td>
			<td><?php echo $request->endtime; ?></td>
			<td><?php echo $request->hoursworked; ?></td>
			<td><?php echo $request->approvedbyadmin; ?></td>
			<td><?php echo $request->comments; ?></td>
			<td>
			<a href="<?php echo base_url(); ?>approved_update?timesheetid=<?php echo $request->timesheetid; ?>">Edit</a>
			<a href="<?php echo base_url(); ?>approved/approve?timesheetid=<?php echo $request->timesheetid; ?>">Approve</a>
			
			</td>
		<tr>
		<?php
		}
		?>
	</table><?php echo $msg; ?>
</div>

</div>


			</div>
		
		</div>
	</div>

<?php include './assets/template/footer_1.php'; ?>