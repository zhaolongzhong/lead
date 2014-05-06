<?php include './assets/template/header_user.php'; ?>
<div class="container">
		<div class="row">
				
			<div id="content" class="span12">
<h2>
Schedule
</h2>
<div class="well">

Current schedule for the user.



<div>
    <table style="width:1000px">
        <tr>
            <th>Date</th>
            <th>Start Time</th>      
            <th>End Time</th>
            <th></th>


        </tr>
        <?php 
        foreach ($query as $schedule)
        {
        ?>
        <tr>
            <td><?php echo $schedule->username; ?></td>
            <td><?php
                if($schedule->date == '0'){ echo "Sunday";}
                if($schedule->date == '1'){ echo "Monday";}
                if($schedule->date == '2'){ echo "Tuesday";}
                if($schedule->date == '3'){ echo "Wednesday";}
                if($schedule->date == '4'){ echo "Thursday";}
                if($schedule->date == '5'){ echo "Friday";}
                if($schedule->date == '6'){ echo "Saturday";}

                
                 ?></td>
            <td><?php echo $schedule->starttime; ?></td>
            <td><?php echo $schedule->endtime; ?></td>
            <td>
            <a href="<?php echo base_url(); ?>schedule_user/delete?sid=<?php echo $schedule->sid; ?>">Delete</a>
            </td>
        <tr>
        <?php
        }
        ?>
    </table>
</div>

<br />
<form method="POST" action="<?php echo base_url();?>schedule_user/insert">
<table>
<tr><td>
Start Time: </td><td><input type="text" name="starttime" size="25" required>
</tr></td>
<tr><td>
End Time: </td><td><input type="text" name="endtime" size="25" required>
</tr></td>
<tr><td>
Date: </td><td>
<select name="date" id="date">
    <option value="" disabled="disabled" selected="selected">Please select a date</option>
    <option value="Monday">Monday</option>
    <option value="Tuesday">Tuesday</option> 
    <option value="Wednesday">Wednesday</option> 
    <option value="Thursday">Thursday</option> 
    <option value="Friday">Friday</option> 
    <option value="Saturday">Saturday</option> 
    <option value="Sunday">Sunday</option>
</select>
</tr></td>


</tr></td>
<tr><td>
<input type="submit" value="Add">
</tr></td>
</table>
</form>




</div>


			</div>
		
		</div>
	</div>

<?php include './assets/template/footer_1.php'; ?>

