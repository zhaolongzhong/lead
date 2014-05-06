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
You can either choose from a list(right) or fill out the box(left) to finish adding a new answer.<br/>
<table>
<form method="POST" action="<?php echo base_url();?>answer/insert?questionid=<?php echo $questionid;?>">
<tr><td>
Answer Order: </td><td><input type="text" name="answerorder" size="25">
<select name="answerorderdropdown" id="answerorderdropdown">
    <option value="" disabled="disabled" selected="selected">Please select below</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="a">a</option>
    <option value="b">b</option>
    <option value="c">c</option>
    <option value="d">d</option>
    <option value="e">e</option>
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
    <option value="D">D</option>
    <option value="E">E</option>
</select>
</td></tr>
<tr><td>
Answer: </td><td><input type="text" name="answer" size="25">
<select name="answerdropdown" id="answerdropdown">
    <option value="" disabled="disabled" selected="selected">Please select an answer</option>
    <option value="True">True</option>
    <option value="False">False</option> 
</select>
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