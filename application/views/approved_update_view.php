<?php include './assets/template/header_1.php'; ?>


<div class="container">
		<div class="row">
				
			<div id="content" class="span12">



<h2>
Update a Timesheet
</h2>

<div class="well">

<?php 
		foreach ($query as $timesheet)
		{
		?>
<form method="POST" action="<?php echo base_url(); ?>approved_update/update?timesheetid=<?php echo $timesheet->timesheetid; ?>">
<table>
		
<tr><td>
Start Time: 
</td><td><input type="text" value="<?php echo $timesheet->starttime;?>" name="starttime" size="25" >
</td></tr>
<tr><td>
End Time: 
</td><td><input type="text" value="<?php echo $timesheet->endtime; ?>" name="endtime" size="25">
</td></tr>
<tr><td>
Comments: 
</td><td><textarea name="comments" rows="4" cols="50"><?php echo $timesheet->comments; ?></textarea>
</td></tr>
		<?php
		}
		?>
<tr><td>
<input type="submit" value="submit">
</td></tr>

</table>
</form>
<?php echo $msg;?>
<form action="<?php echo base_url();?>approved"><input type="submit" value="Go to timesheet list page"></form>


</div>


			</div>
		
		</div>
	</div>

<?php include './assets/template/footer_1.php'; ?>