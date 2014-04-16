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

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
        $(function() {
            $( ".datepicker" ).datepicker();
        });
</script>
</head>
<h1>Time Sheet Request List</h1>
After click Approve, the adminid will automatically be inserted into the TimeSheetApproved table.<br />
You can click Edit to edit the timesheet, and then approve.<br/>
Please login in with another account before approve.
<div>
	<table style="width:1200px">
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