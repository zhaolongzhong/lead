<?php include './assets/template/header_admin.php'; ?>


<div class="container">
		<div class="row">
				
			<div id="content" class="span12">


<h2>
	News
</h2>

	<?php 
		foreach ($query as $newspost)
		{
	?>
		
			<h2><?php echo $newspost->title; ?></h2>
            <div class="well">
                        <p><?php echo $newspost->message; ?></p>
                        <p>Created by <?php echo $newspost->uid; ?> on <?php echo $newspost->date; ?></p>
                    </div>
	<?php
		}
	?>


			</div>
		
		</div>
	</div>

<?php include './assets/template/footer_1.php'; ?>