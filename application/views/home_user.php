<?php include './assets/template/header_user.php'; ?>


<div class="container">
		<div class="row">
				
			<div id="content" class="span12">



<h2>
	Notes
</h2>
<div class="well">
Logged in user page
</div>
<h2>
	News
</h2>
<div class="well">
	<?php 
		foreach ($query as $newspost)
		{
	?>
		
			<h2><?php echo $newspost->title; ?></h2>
                        <p><?php echo $newspost->message; ?></p>
                        <p>Created by <?php echo $newspost->uid; ?> on <?php echo $newspost->date; ?></p>
                        <br /> 
	<?php
		}
	?>

</div>


			</div>
		
		</div>
	</div>

<?php include './assets/template/footer_1.php'; ?>