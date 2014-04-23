
<h1>Quiz</h1>
<?php echo $msg;?>



<form method="POST">
<table>
	<th>Question ID</th>
	<th>Question Order</th>
	<th>Question</th>
	<th>Answer</th>
	<th>Correct Answer</th>
<?php 
foreach ($questions as $question)
{
?>
<tr>
	<td><?php echo $question->questionid; ?> </td>
	<td><?php echo $question->questionorder; ?></td>
	<td><?php echo $question->question; ?></td>
	<td>
		<?php 
		foreach ($answers as $answer)
		{
			if($question->questionid == $answer->questionid){
		?>
		<?php echo $answer->answerorder; ?>. <?php echo $answer->answer; ?> <br/>
		<?php
			}
		}
		?>
		
	</td>
	<td><?php echo $question->correctanswer; ?></td>
	<td><a href="<?php echo base_url(); ?>answer?questionid=<?php echo $question->questionid; ?>&quizid=<?php echo $question->quizid; ?>">Add a answer</a></td>
	<td><a href="<?php echo base_url(); ?>quiz/delete?questionid=<?php echo $question->questionid; ?>&quizid=<?php echo $question->quizid; ?>">Delete</a></td>
</tr>
<?php
	}
?>
</table>
</form>

<h2>Add a question</h2>


<form method="POST" action="<?php echo base_url();?>quiz/insert?quizid=<?php echo $quizid;?>">
<table>
<tr><td>
Question Order: </td><td><input type="text" name="questionorder" size="25">
</td></tr>
<tr><td>
Question Type: </td><td><input type="text" name="questiontype" size="25">
</td></tr>
<tr><td>
Question: </td><td><input type="text" name="question" size="25">
</td></tr>
<tr><td>
Correct Answer: </td><td><input type="text" name="correctanswer" size="25">
</td></tr>
<tr><td>
<input type="submit" value="submit">
</tr></td>
</table>
</form>


