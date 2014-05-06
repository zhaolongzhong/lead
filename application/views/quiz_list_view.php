<?php include './assets/template/header_admin.php'; ?>
<div class="container">
		<div class="row">
				
			<div id="content" class="span12">
<h2>
List of Quiz
</h2>

				<div class="well">
				<?php echo $msg;?>

					<div>
						<table style="width:1000px">
							<tr>
							 	<th>Quiz ID</th>
							 	<th>Title</th>	
							 	<th></th>
							</tr>
							<?php 
							foreach ($query as $quiz)
							{
							?>
							<tr>
								<td><?php echo $quiz->quizid; ?></a></td>
								<td><?php echo $quiz->quiztitle; ?></td>
								<td><a href="<?php echo base_url(); ?>quiz?quizid=<?php echo $quiz->quizid; ?>">Edit</a></td>
								</td>
							<tr>
							<?php
							}
							?>
						</table>
					</div>
					

				</div>

<div>
	<form action="<?php echo base_url();?>quiz_new"><input type="submit" value="Added a new quiz"></form>
<br/>
	<form action="<?php echo base_url();?>test_list"><input type="submit" value="Check out all quiz"></form>
</div>



			</div>
		
		</div>
	</div>
<?php include './assets/template/footer_1.php'; ?>

