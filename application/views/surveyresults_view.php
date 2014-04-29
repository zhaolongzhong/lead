<?php include './assets/template/header_admin.php'; ?>

<div class="container">
		<div class="row">
				
			<div id="content" class="span12">


<h2>
Survey Results Form Viewer
</h2>

<div class="well">

<div>
	<table style="width:1200px">
		<tr>
		 	<th>Index</th>
		 	<th>Question1</th>
			<th>Question2</th>		
			<th>Reason</th>
                        <th>Question3</th>
			<th>Question4</th>
		</tr>
		<?php 
		foreach ($query as $SystemLog)
		{
		?>
		<tr>
			<td><?php echo $SystemLog->surveyindex; ?></td>
			<td><?php echo $SystemLog->q1; ?></td>
			<td><?php echo $SystemLog->q2; ?></td>
			<td><?php echo $SystemLog->q2_reason; ?></td>
                        <td><?php echo $SystemLog->q3; ?></td>
			<td><?php echo $SystemLog->q4; ?></td>
		<tr>
		<?php
		}
		?>
	</table>
</div>



</div>

<?php include './assets/template/footer_1.php'; ?>