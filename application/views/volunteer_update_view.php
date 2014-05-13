<?php 
	if($role=='user'){
		include './assets/template/header_user.php';
	}elseif ($role=='admin') {
		include './assets/template/header_admin.php';
	} ?>
<div class="container">
		<div class="row">
				
			<div id="content" class="span6">
<h2>
Update a volunteer
</h2>
<div class="well">

<?php echo form_open_multipart('volunteer_update/update');?>

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
</td><td><input type="password" value="<?php echo $user->password;?>" name="password" size="25" >
</td></tr>
<tr><td>
Age: 
</td><td><input type="text" value="<?php echo $volunteer->age; ?>" name="age" size="25">
</td></tr>
<tr><td>
First Name: 
</td><td><input type="text" value="<?php echo $volunteer->fname; ?>" name="fname" size="25">
</td></tr>
<tr><td>
Last Name: 
</td><td><input type="text" value="<?php echo $volunteer->lname; ?>" name="lname" size="25">
</td></tr>
<tr><td>
Active Volunteer: 
</td><td><input type="text" value="<?php echo $volunteer->activevolunteer; ?>" name="activevolunteer" size="25">
</td></tr>
<tr><td>
Approved: 
</td><td><input type="text" value="<?php echo $volunteer->approved; ?>" name="approved" size="25" disabled>
</td></tr>
<tr><td>
Street Address: 
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
Primary Phone: 
</td><td><input type="text" value="<?php echo $volunteer->primaryphone; ?>" name="primaryphone" size="25">
</td></tr>
<tr><td>
Alternative Phone: 
</td><td><input type="text" value="<?php echo $volunteer->altphone; ?>" name="altphone" size="25">
</td></tr>
		<?php }
		}
		?>
<tr><td>
<?php if (isset($volunteer)) {$directory = 'p/photo/'.$volunteer->username . '/'; 


$images = glob($directory.'*.{jpg,png,gif}',GLOB_BRACE);}
?>
<img src="<?php if(!empty($images)){echo $images[0];}?>" alt="No Photo" height="100" width="100"><br/>
<?php
if(!empty($images)){
	foreach($images as $image)
	{
?>
<img src="<?php echo $image;?>" alt="No Photo" height="42" width="42"><a href="volunteer_update/delete_image?imagepath=<?php echo $image;?>&username=<?php echo $username;?>">Delete</a><br/>
<?php
	}
}
?>

	<input type="file" name="userfile" size="20" />
<input type="submit" value="Update">
</td></tr>

</table>
</form>
<?php echo $msg;?>
</div>

	</div>

</div>






</div>


			</div>
		
		</div>
	</div>

<?php include './assets/template/footer_1.php'; ?>
