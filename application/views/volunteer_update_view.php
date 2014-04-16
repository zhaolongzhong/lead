<h1>Update a volunteer</h1>
<form method="POST" action="<?php echo base_url();?>volunteer_update/update
	">
<table>
		<?php 
		foreach ($query as $volunteer)
		{
		?>
<tr><td>
Email: 
</td><td><input type="text" value="<?php echo $volunteer->username;?>" name="username" size="25" >
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
		<?php
		}
		?>
<tr><td>
<input type="submit" value="submit">
</td></tr>

</table>
</form>
<?php echo $msg;?>
<form action="<?php echo base_url();?>volunteer"><input type="submit" value="Go to volunteer list page"></form>