
<h1>Test <?php echo $quizid;?></h1>
<?php echo $msg;?>



<form method='post' id='userform' action=''> 
<?php 
foreach ($questions as $question)
{
?>
<?php echo $question->questionorder; ?>. <?php echo $question->question; ?><br />
	<?php 
	foreach ($answers as $answer)
	{
		if($question->questionid == $answer->questionid){
			if(strtolower($answer->answer) == "true"){
	?>
	<input type='checkbox' name='checkbox[]' value='true'><?php echo $answer->answerorder; ?>. <?php echo $answer->answer; ?> <br/>
	<?php
			}elseif(strtolower($answer->answer) == "false"){
	?>
	<input type='checkbox' name='checkbox[]' value='false'><?php echo $answer->answerorder; ?>. <?php echo $answer->answer; ?> <br/>
	<?php			
			}elseif(strtolower($answer->answerorder) == "a"){
	?>
	<input type='checkbox' name='checkbox[]' value='a'><?php echo $answer->answerorder; ?>. <?php echo $answer->answer; ?> <br/>
	<?php			
			}elseif(strtolower($answer->answerorder) == "b"){
	?>
	<input type='checkbox' name='checkbox[]' value='b'><?php echo $answer->answerorder; ?>. <?php echo $answer->answer; ?> <br/>
	<?php			
			}elseif(strtolower($answer->answerorder) == "c"){
	?>
	<input type='checkbox' name='checkbox[]' value='c'><?php echo $answer->answerorder; ?>. <?php echo $answer->answer; ?> <br/>
	<?php			
			}elseif(strtolower($answer->answerorder) == "d"){
	?>
	<input type='checkbox' name='checkbox[]' value='d'><?php echo $answer->answerorder; ?>. <?php echo $answer->answer; ?> <br/>
	<?php			
			}elseif(strtolower($answer->answerorder) == "e"){
	?>
	<input type='checkbox' name='checkbox[]' value='e'><?php echo $answer->answerorder; ?>. <?php echo $answer->answer; ?> <br/>
	<?php			
			}elseif(strtolower($answer->answerorder) == "f"){
	?>
	<input type='checkbox' name='checkbox[]' value='f'><?php echo $answer->answerorder; ?>. <?php echo $answer->answer; ?> <br/>
	<?php			
			}
		}
	}
	?>		
<br />
<?php
	}
?>
<input type='submit' class='buttons'> 
</form>

<?php 
if (isset($_POST['checkbox'])) 
{
    echo "Your answer is";?><br/><?php
    print_r($_POST['checkbox']); 
    // $answer = $_POST['checkbox'];
	

}
?>



