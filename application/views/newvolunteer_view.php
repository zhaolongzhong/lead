<h1>Add a new volunteer</h1>

<table>
<form method="POST" action="<?php echo base_url();?>newvolunteer/insert">
<tr><td>
VID: </td><td><input type="text" name="VID" size="25">
</td></tr>
<tr><td>
Age: </td><td><input type="text" name="Age" size="25">
</td></tr>
<tr><td>
Fname: </td><td><input type="text" name="Fname" size="25">
</td></tr>
<tr><td>
Lname: </td><td><input type="text" name="Lname" size="25">
</td></tr>
<tr><td>
ActiveVolunteer: </td><td><input type="text" name="ActiveVolunteer" size="25">
</td></tr>
<tr><td>
Email: </td><td><input type="text" name="Email" size="25">
</td></tr>
<tr><td>
StreetAddress: </td><td><input type="text" name="StreetAddress" size="25">
</td></tr>
<tr><td>
City: </td><td><input type="text" name="City" size="25">
</td></tr>
<tr><td>
StateCode: </td><td><input type="text" name="StateCode" size="25">
</td></tr>
<tr><td>
PrimaryPhone: </td><td><input type="text" name="PrimaryPhone" size="25">
</td></tr>
<tr><td>
AltPhone: </td><td><input type="text" name="AltPhone" size="25">
</td></tr>

<tr><td>
<input type="submit" value="submit">
</tr></td>
</table>
</form>

<?php echo $msg;?>
<form action="<?php echo base_url();?>volunteer"><input type="submit" value="Go to volunteer list page"></form>