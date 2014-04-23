<h1>Add a new quiz</h1>

<table>
<form method="POST" action="<?php echo base_url();?>quiz_new/insert">
<tr><td>
Quiz ID: </td><td><input type="text" name="quizid" size="25">
</td></tr>
<tr><td>
Quiz Title: </td><td><input type="text" name="quiztitle" size="25">
</td></tr>
<tr><td>
<input type="submit" value="submit">
</tr></td>
</table>
</form>

<?php echo $msg;?>