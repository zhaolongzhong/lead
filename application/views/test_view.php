
<h1>Test <?php echo $quizid;?></h1>
<?php echo $msg;?>




<?php 
foreach ($questions as $question)
{
?>
<?php echo $question->questionorder; ?>. <?php echo $question->question; ?><br />
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
<br />
<?php
	}
?>



