<?php 
if($role == 'user'){
	include './assets/template/header_user.php'; 
}elseif ($role == 'admin') {
	include './assets/template/header_admin.php';
}

?>

<div class="container">
		<div class="row">
				
			<div id="content" class="span12">
<h2>
List of Quizes
</h2>
<div class="well">






<div>
	<table style="width:1200px">
		<tr>
		 	<th>Quiz Number</th>
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




</div>


			</div>
		
		</div>
	</div>

<?php include './assets/template/footer_1.php'; ?>

