<?php include './assets/template/header.php'; ?>


<h1>System Log Viewer</h1>
<?php echo $msg;?>
<a href="home">Home</a>

<div>
	<table style="width:400px">
		<tr>
		 	<th>Admin ID</th>
		 	<th>Can Edit Users</th>
			<th>Can Delete Users</th>		
		</tr>
		<?php 
		foreach ($query as $Admin)
		{
		?>
		<tr>
			<td><?php echo $Admin->uid; ?></td>
			<td><?php echo $Admin->caneditusers; ?></td>
			<td><?php echo $Admin->candeleteusers; ?></td>
		<tr>
		<?php
		}
		?>
	</table>
</div>

<hr>

<h1>List of Quiz</h1>

<div>
	<table style="width:400px">
		<tr>
		 	<th>Quiz Table ID</th>
		 	<th>Title</th>
			<th>Test Number</th>
			<th>Action</th>	
		</tr>
		<?php 
		foreach ($quizlist as $quiz)
		{
		?>
		<tr>
			<td><a href="<?php echo base_url(); ?>question?id=<?php echo $quiz->id; ?>"><?php echo $quiz->id; ?></a></td>
			<td><?php echo $quiz->title; ?></td>
			<td><?php echo $quiz->test_number; ?></td>
			<td><a href="<?php echo base_url(); ?>quiz_update?id=<?php echo $quiz->id; ?>">Edit</a>
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



<?php include './assets/template/footer.php'; ?>