<h1>Add a new volunteer</h1>

<table>
<form method="POST" action="<?php echo base_url();?>newvolunteer/insert">
<tr><td>
Email: </td><td><input type="text" name="email" size="25">
</td></tr>
<tr><td>
Age: </td><td><input type="text" name="age" size="25">
</td></tr>
<tr><td>
Fname: </td><td><input type="text" name="fname" size="25">
</td></tr>
<tr><td>
Lname: </td><td><input type="text" name="lname" size="25">
</td></tr>
<tr><td>
ActiveVolunteer: </td><td><input type="text" name="activevolunteer" size="25">
</td></tr>
<tr><td>
Approved: </td><td><input type="text" name="approved" size="25">
</td></tr>
<tr><td>
StreetAddress: </td><td><input type="text" name="streetaddress" size="25">
</td></tr>
<tr><td>
City: </td><td><input type="text" name="city" size="25">
</td></tr>
<tr><td>
StateCode: </td><td><input type="text" name="statecode" size="25">
</td></tr>
<tr><td>
PrimaryPhone: </td><td><input type="text" name="primaryphone" size="25">
</td></tr>
<tr><td>
AltPhone: </td><td><input type="text" name="altphone" size="25">
</td></tr>

<tr><td>
<input type="submit" value="submit">
</tr></td>
</table>
</form>

<?php echo $msg;?>
<form action="<?php echo base_url();?>volunteer"><input type="submit" value="Go to volunteer list page"></form>