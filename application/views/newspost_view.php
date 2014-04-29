<?php include './assets/template/header.php'; ?>
<h1>News</h1>

<div class="newsPost">

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
<?php include './assets/template/footer.php'; ?>