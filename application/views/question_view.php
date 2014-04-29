<!DOCTYPE html>
<html>

<head>
<style>
table,th,td
{
border:1px solid black;
border-collapse:collapse;
}
th,td
{
padding:5px;
}
th
{
text-align:left;
}
</style>
</head>

<body>
<h1>Questions</h1>
<?php echo $msg;?>
	<table style="width:1200px">
		<tr>
		 	<th>Test ID</th>
		 	<th>True or False</th>
		 	<th>Test Order</th>
		 	<th>Test row</th>
		 	<th>row ID</th>
		 	<th>Anser</th>
		 	<th>Answer Text</th>
				
				
		</tr>
		<?php 
		foreach ($query as $row)
		{
		?>
		<tr>
			<td><?php echo $row->testid; ?></td>
			
			<td><input type="text" name="istruefalse" size="10"></td>
			<td><?php echo $row->testorder; ?></td>
			<td><?php echo $row->question; ?></td>
			<td><?php echo $row->questionid; ?></td>
			<td><?php echo $row->answer; ?></td>
			<td><?php echo $row->answer_text; ?></td>
		<tr>
		<?php
		}
		?>
<div>
	<?php 
	foreach ($question as $row2)
	{
		echo $row2->questionid;?>. <?php
		echo $row2->question; ?><br /> <?php
		foreach ($query as $row)
		{
			if($row2->questionid == $row->questionid)
			{
				echo $row->answer;?>. <?php
				echo $row->answer_text;
				?><br /><?php
			}	
		}	
	}
	?>
</div>
</body>
</html>