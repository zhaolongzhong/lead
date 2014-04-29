<?php include './assets/template/header_user.php'; ?>
<div class="container">
		<div class="row">
				
			<div id="content" class="span12">
<h2>
Update a volunteer
</h2>
<div class="well">

<?php echo $msg;?>
<form method="POST" action="<?php echo base_url();?>volunteer_update/update
	">
<table>
		<?php 
		foreach ($query as $volunteer)
		{
			foreach ($users as $user) {
		?>
<tr><td>
Email: 
</td><td><input type="text" value="<?php echo $volunteer->username;?>" name="username" size="25" >
</td></tr>
<tr><td>
Password: 
</td><td><input type="text" value="<?php echo $user->password;?>" name="password" size="25" >
</td></tr>
<tr><td>
Age: 
</td><td><input type="text" value="<?php echo $volunteer->age; ?>" name="age" size="25">
</td></tr>
<tr><td>
Fname: 
</td><td><input type="text" value="<?php echo $volunteer->fname; ?>" name="fname" size="25">
</td></tr>
<tr><td>
Lname: 
</td><td><input type="text" value="<?php echo $volunteer->lname; ?>" name="lname" size="25">
</td></tr>
<tr><td>
ActiveVolunteer: 
</td><td><input type="text" value="<?php echo $volunteer->activevolunteer; ?>" name="activevolunteer" size="25">
</td></tr>
<tr><td>
Approved: 
</td><td><input type="text" value="<?php echo $volunteer->approved; ?>" name="approved" size="25">
</td></tr>
<tr><td>
StreetAddress: 
</td><td><input type="text" value="<?php echo $volunteer->streetaddress; ?>" name="streetaddress" size="25">
</td></tr>
<tr><td>
City: 
</td><td><input type="text" value="<?php echo $volunteer->city; ?>" name="city" size="25">
</td></tr>
<tr><td>
StateCode: 
</td><td><input type="text" value="<?php echo $volunteer->statecode; ?>" name="statecode" size="25">
</td></tr>
<tr><td>
PrimaryPhone: 
</td><td><input type="text" value="<?php echo $volunteer->primaryphone; ?>" name="primaryphone" size="25">
</td></tr>
<tr><td>
AltPhone: 
</td><td><input type="text" value="<?php echo $volunteer->altphone; ?>" name="altphone" size="25">
</td></tr>
		<?php }
		}
		?>
<tr><td>
<input type="submit" value="Update">
</td></tr>

</table>
</form>



</div>


			</div>
		
		</div>
	</div>

<?php include './assets/template/footer_1.php'; ?>
