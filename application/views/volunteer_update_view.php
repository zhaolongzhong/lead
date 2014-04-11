<h1>Update a volunteer</h1>
<form method="POST" action="<?php echo base_url();?>volunteer_update/update
	">
<table>
		<?php 
		foreach ($query as $volunteer)
		{
		?>
<tr><td>
VID: 
</td><td><input type="text" value="<?php echo $volunteer->VID;?>" name="VID" size="25" >
</td></tr>
<tr><td>
Age: 
</td><td><input type="text" value="<?php echo $volunteer->Age; ?>" name="Age" size="25">
</td></tr>
<tr><td>
Fname: 
</td><td><input type="text" value="<?php echo $volunteer->Fname; ?>" name="Fname" size="25">
</td></tr>
<tr><td>
Lname: 
</td><td><input type="text" value="<?php echo $volunteer->Lname; ?>" name="Lname" size="25">
</td></tr>
<tr><td>
ActiveVolunteer: 
</td><td><input type="text" value="<?php echo $volunteer->ActiveVolunteer; ?>" name="ActiveVolunteer" size="25">
</td></tr>
<tr><td>
Email: 
</td><td><input type="text" value="<?php echo $volunteer->Email; ?>" name="Email" size="25">
</td></tr>
<tr><td>
StreetAddress: 
</td><td><input type="text" value="<?php echo $volunteer->StreetAddress; ?>" name="StreetAddress" size="25">
</td></tr>
<tr><td>
City: 
</td><td><input type="text" value="<?php echo $volunteer->City; ?>" name="City" size="25">
</td></tr>
<tr><td>
StateCode: 
</td><td><input type="text" value="<?php echo $volunteer->StateCode; ?>" name="StateCode" size="25">
</td></tr>
<tr><td>
PrimaryPhone: 
</td><td><input type="text" value="<?php echo $volunteer->PrimaryPhone; ?>" name="PrimaryPhone" size="25">
</td></tr>
<tr><td>
AltPhone: 
</td><td><input type="text" value="<?php echo $volunteer->AltPhone; ?>" name="AltPhone" size="25">
</td></tr>

<tr><td>
<input type="submit" value="submit">
</td></tr>
		<?php
		}
		?>
</table>
</form>
<?php echo $msg;?>
<form action="<?php echo base_url();?>volunteer"><input type="submit" value="Go to volunteer list page"></form>