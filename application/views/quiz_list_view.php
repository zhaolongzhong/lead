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
							</tr>
							<?php 
							foreach ($query as $quiz)
							{
							?>
							<tr>
								<td><a href="<?php echo base_url(); ?>quiz?quizid=<?php echo $quiz->quizid; ?>"><?php echo $quiz->quizid; ?></a></td>
								<td><?php echo $quiz->quiztitle; ?></td>
								<td>
								</td>
							<tr>
							<?php
							}
							?>
						</table>
					</div>
					<div>
						<form action="<?php echo base_url();?>quiz_new"><input type="submit" value="Added a new quiz"></form>
					</div>

					<div>
						<form action="<?php echo base_url();?>test_list"><input type="submit" value="List of quiz"></form>
					</div>

				</div>

			</div>
		
		</div>
	</div>
<?php include './assets/template/footer_1.php'; ?>

