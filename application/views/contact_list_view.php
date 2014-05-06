<?php include './assets/template/header_admin.php'; ?>


<div class="container">
		<div class="row">
				
			<div id="content" class="span12">


<h2>Contact Submission Form Viewer</h2>
<?php echo $msg;?>

<div class="well">
	<table style="width:1200px">
		<tr>
		 	<th>Contact Index</th>
		 	<th>Email</th>
			<th>Subject</th>		
			<th>Message</th>
		</tr>
		<?php 
		foreach ($query as $SystemLog)
		{
		?>
		<tr>
			<td><?php echo $SystemLog->contactindex; ?></td>
			<td><?php echo $SystemLog->email; ?></td>
			<td><?php echo $SystemLog->subject; ?></td>
			<td><?php echo $SystemLog->message; ?></td>
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



