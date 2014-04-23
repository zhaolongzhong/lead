<h1>List of Quiz</h1>
<?php echo $msg;?>

<div>
	<table style="width:1200px">
		<tr>
		 	<th>Quiz ID</th>
		 	<th>Title</th>	
		 	<th></th>
		</tr>
		<?php 
		foreach ($query as $quiz)
		{
		?>
		<tr>
			<td><?php echo $quiz->quizid; ?></a></td>
			<td><?php echo $quiz->quiztitle; ?></td>
			<td><a href="<?php echo base_url(); ?>test?quizid=<?php echo $quiz->quizid; ?>">Take the quiz</a></td>
		<tr>
		<?php
		}
		?>
	</table>
</div>
