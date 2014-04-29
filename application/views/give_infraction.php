<h1>Infraction Report Tool</h1>

<table>
<form method="POST" action="<?php echo base_url();?>">
<tr><td>
Infraction: </td><td><select>
						<option></option>
						<option>Late</option>
						<option>No Call/No Show</option>
						<option>Shift Cancellation</option>
					</select>
</tr></td>
<tr><td>
Volunteer: </td><td><select>
						<option></option>
						<option>Tim</option>
						<option>Bob</option>
						<option>Kevin</option>
					</select>
</tr></td>
<tr><td>
Date of Infraction: </td><td> %Date Picker Here%
</tr></td>
<tr><td>
Admin Account: </td><td> %Current User%
</tr></td>

<tr><td>
<input type="submit" value="submit">
</tr></td>
</table>
</form>

<?php echo $msg; ?>