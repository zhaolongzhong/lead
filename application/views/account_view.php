<?php echo $msg;?>

<ul>
	uid | username | password
	<?php 
		foreach ($query as $user)
		{
	?>
		<li>
			<?php echo $user->uid; ?> | <?php echo $user->username; ?> | <?php echo $user->password; ?>
			| <a href="<?php echo base_url(); ?>account/delete?uid=<?php echo $user->uid; ?>">Delete</a>
		</li>
	<?php
		}
	?>
</ul>
