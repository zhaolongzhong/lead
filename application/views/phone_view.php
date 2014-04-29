<?php include './assets/template/header_admin.php'; ?>
<div class="container">
		<div class="row">
				
			<div id="content" class="span12">
<h1>Phone</h1>

<div class="well">
	<table style="width:800px">
		<tr>
		 	<th>Email</th>
			<th>First Name</th>		
			<th>Last Name</th>
			<th>Primary Phone</th>
			<th>Alternative Phone</th>
		</tr>
		<?php 
		foreach ($query as $volunteer)
		{
		?>
		<tr>
			<td><?php echo $volunteer->username; ?></td>
			<td><?php echo $volunteer->fname; ?></td>
			<td><?php echo $volunteer->lname; ?></td>
			<td><?php echo $volunteer->primaryphone; ?></td>
			<td><?php echo $volunteer->altphone; ?></td>
		<tr>
		<?php
		}
		?>
	</table>
</div>

			</div>
		
		</div>
	</div>

<?php include './assets/template/footer_1.php'; ?>