<?php include './assets/template/header_admin.php'; ?>


<div class="container">
		<div class="row">
				
			<div id="content" class="span12">



<h2>
	Quiz Edit
</h2>
<?php echo $msg;?>

<div class="well">

<form method="POST">
<table>
	<th>Question Order</th>
	<th>Question</th>
	<th>Answer</th>
	<th>Correct Answer</th>
<?php 
foreach ($questions as $question)
{
?>
<tr>
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
Instruction:<br />
1. Question Order: for example, 1,2,3...<br />
2. Question Type: 0 for true or false, 1 for multiple choice, 2 for question(user need to fill the text box)<br />
3. Question: put the question here<br />
4. Correct Answer: add correct answer here, for example, true or false for type 0, a,b,c,d.. for type 1<br />
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

<a href="<?php echo base_url(); ?>quiz_list">Go to quiz list page</a>


			</div>
		
		</div>
	</div>

<?php include './assets/template/footer_1.php'; ?>