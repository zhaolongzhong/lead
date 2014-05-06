<?php include './assets/template/header_admin.php'; ?>


<div class="container">
		<div class="row">
				
			<div id="content" class="span12">


<div class="well">

<?php foreach($week as $key=>$value){
    echo $key; ?><br/><?php

    foreach ($value as $key2 => $value2) { 
        ?><br/>userid: <?php 
        echo $value2[0];?>&nbsp;username: <?php 
        echo $value2[1];?>&nbsp;hours: <?php 
        echo $value2[2];
    }
    ?><br/><?php
}?>

</div>


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
		foreach ($thisweek as $request)
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
<!-- <div class="well">
        <div>
            <table style="width:1000px">
                <tr>
                     <th>User ID</th>
                     <th>User Name</th>

                </tr>
                <?php 
                foreach ($userinfo as $user)
                {
                ?>
                <tr>
                    <td><?php echo $user->uid; ?></td>
                    <td><?php echo $user->username; ?></td>

                    <td>

                    </td>
                <tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div> -->
    
    <div class="well">
    
        
        
<!-- <?php print_r($stack); ?> -->

<div id="container" style="height: 400px"></div>

<script type="text/javascript">


$(function () {
    $('#container').highcharts({
        chart: {
            type: 'pie',
            options3d: {
				enabled: true,
                alpha: 45
            }
        },
        title: {
            text: 'Hourly portions charts'
        },

        plotOptions: {
            pie: {
                innerSize: 100,
                depth: 45
            }
        },
        series: [{
            name: 'Total hours worked',
            data: [
                
				<?php 
				foreach ($stack as $user)
				{
				echo "['" . $user[1] . "', " . $user[2] . "],";
            }
				?>
                
                
                
            ]
        }]
    });
});


</script>






                <!-- <?php 
                foreach ($stack as $user)
                {
                ?>
                <tr>
                    <td><?php echo $user[1]; ?></td>
                    <td><?php echo $user[2]; ?></td>

                    <td>

                    </td>
                <tr>
                <?php
                }
                ?> -->

			</div>
		
		</div>
	</div>

<?php include './assets/template/footer_1.php'; ?>