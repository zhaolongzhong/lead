<?php include './assets/template/header.php'; ?>
<h1>List of Quiz</h1>
<?php echo $msg;?>


<div>
	<table style="width:1200px">
		<tr>
		 	<th>Quiz Table ID</th>
		 	<th>Title</th>
			<th>Test Number</th>	
		</tr>
		<?php 
		foreach ($query as $quiz)
		{
		?>
		<tr>
			<td><a href="<?php echo base_url(); ?>question?id=<?php echo $quiz->id; ?>"><?php echo $quiz->id; ?></a></td>
			<td><?php echo $quiz->title; ?></td>
			<td><?php echo $quiz->test_number; ?></td>
			<td>
			</td>
		<tr>
		<?php
		}
		?>
	</table>
</div>
<div>
	<form action="<?php echo base_url();?>"><input type="submit" value="Added a new quiz"></form>
</div>
<hr >
<h1>Quiz template</h1>


<h3>True/False</h3>

<h5>Question 1</h5>
<p> A crisis is usually resolved within 6 weeks.</p>
<p>
<label>True
   <input type="radio" name="IsMale" value="true" data-bind="checked:IsMale"/>
</label> 
<label>False
   <input type="radio" name="IsMale" value="false" data-bind="checked:IsMale"/>
</label>
</p>

<h5>Question 2</h5>
<p>During a crisis, people are unable to resolve their own problems.</p>
<p>
<label>True
   <input type="radio" name="IsMale" value="true" data-bind="checked:IsMale"/>
</label> 
<label>False
   <input type="radio" name="IsMale" value="false" data-bind="checked:IsMale"/>
</label>
</p>

<h5>etc...</h5>


<h3>Multiple choice</h3>

<p>
Which of the following questions will help establish rapport with the caller?
  <ul>
    <li> <input type="radio" name="satisfaction" id="vsat" value="vsat" checked="checked"> <label for="A">A: Tell me your name or we can't talk.</label></li>
    <li><input type="radio" name="satisfaction" id="sat" value="sat"> <label for="B">B: Tell me a little more about that.</label> </li>
    <li><input type="radio" name="satisfaction" id="dcare" value="dcare"> <label for="C">C: Are you suicidal?</label> </li>
    <li><input type="radio" name="satisfaction" id="disat" value="disat"> <label for="D">D: It sounds as if you're feeling sad.</label> </li>
    <li><input type="radio" name="satisfaction" id="vdisat" value="vdisat"> <label for="vdisat">E: B and D</label> </li>
  </ul>

</p>

<h5>etc...</h5>


<h3>Freeform</h3>

  <label for="comments">What would you tell a caller who asked you to disclose their race because they felt it would influence the call?</label>
  <br>
      <textarea name="comments" id="comments" cols="80" rows="5"></textarea>


<h5>etc...</h5>

  <button type="submit" class="btn btn-default">Submit</button>


<?php include './assets/template/footer.php'; ?>