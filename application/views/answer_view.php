<?php include './assets/template/header_admin.php'; ?>


<div class="container">
		<div class="row">
				
			<div id="content" class="span12">



<h2>
	List of answers
</h2>

<div class="well">
<?php echo $msg;?>
<table style="width:1200px">
	<tr>
	 	<th>Question ID</th>
	 	<th>Answer Order</th>
	 	<th>Answer</th>
	 	<th></th>
			
	</tr>
	<?php 
	foreach ($query as $answer)
	{
	?>
	<tr>
		<td><?php echo $answer->questionid; ?></td>
		<td><?php echo $answer->answerorder; ?></td>
		<td><?php echo $answer->answer; ?></td>
		<td><a href="<?php echo base_url(); ?>answer/delete?answerid=<?php echo $answer->answerid; ?>&questionid=<?php echo $answer->questionid; ?>">Delete</a></td>
	<tr>
	<?php
	}
	?>
</table>



<h1>Add a new answer</h1>

<table>
<form method="POST" action="<?php echo base_url();?>answer/insert?questionid=<?php echo $questionid;?>">
<tr><td>
Answer Order: </td><td><input type="text" name="answerorder" size="25">
</td></tr>
<tr><td>
Answer: </td><td><input type="text" name="answer" size="25">
</td></tr>
<tr><td>
<input type="submit" value="submit">
</tr></td>
</table>
</form>


<a href="<?php echo base_url(); ?>quiz?quizid=<?php echo $quizid; ?>">Go to question page</a>
	
</div>	
			</div>
		
		</div>
	</div>

<?php include './assets/template/footer_1.php'; ?>