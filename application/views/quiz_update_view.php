<h2>Test 1</h2>
<div>
		<?php 
		foreach ($question as $row)
		{
			echo $row->testorder;?>. <?php
			echo $row->question; ?><br />

		<p>
		<label>True
		   <input type="radio" name="IsMale" value="true" data-bind="checked:IsMale"/>
		</label> 
		<label>False
		   <input type="radio" name="IsMale" value="false" data-bind="checked:IsMale"/>
		</label>
		</p>


		<?php
		}
		?>
</div>


<h1>Add a new item</h1>
For Test 1, testid = 1.<br />
istruefalse = 1<br/>
leave ismultiplechoice and isinput empty.


<table>
<form method="POST" action="<?php echo base_url();?>quiz_update/insert">
<tr><td>
testid: </td><td><input type="text" name="testid" size="25">
</td></tr>
<tr><td>
testorder: </td><td><input type="text" name="testorder" size="25">
</td></tr>
<tr><td>
istruefalse: </td><td><input type="text" name="istruefalse" size="25">
</td></tr>
<tr><td>
ismultiplechoice: </td><td><input type="text" name="ismultiplechoice" size="25">
</td></tr>
<tr><td>
isinput: </td><td><input type="text" name="isinput" size="25">
</td></tr>
<tr><td>
question: </td><td><input type="text" name="question" size="25">
</td></tr>

<tr><td>
<input type="submit" value="submit">
</tr></td>
</table>
</form>
<hr>
<h2>Edit an item</h2>
Now you can update the description of each question.<br/>

For Test 1, please set the paratmeter as below:<br/>
testid = 1<br/>
isturefalse = 1<br/>
leave ismultiplechoice and isinput empty.

<table>
<form method="POST" action="<?php echo base_url();?>quiz_update/update">
<tr><td>
testid: </td><td><input type="text" name="testid" size="25">
</td></tr>
<tr><td>
testorder: </td><td><input type="text" name="testorder" size="25">
</td></tr>
<tr><td>
istruefalse: </td><td><input type="text" name="istruefalse" size="25">
</td></tr>
<tr><td>
ismultiplechoice: </td><td><input type="text" name="ismultiplechoice" size="25">
</td></tr>
<tr><td>
isinput: </td><td><input type="text" name="isinput" size="25">
</td></tr>
<tr><td>
question: </td><td><input type="text" name="question" size="25">
</td></tr>

<tr><td>
<input type="submit" value="submit">
</tr></td>
</table>
</form>
