
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

