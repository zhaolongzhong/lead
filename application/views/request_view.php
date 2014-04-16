<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
        $(function() {
            $( ".datepicker" ).datepicker();
        });
</script>

<h1>Time Sheet Request</h1>
Time Input Format:<br/>
2014-04-26 16:26:26<br/>
<table>
<form method="POST" action="<?php echo base_url();?>request/insert">
<tr><td>
Requested by </td><td> User ID:<?php echo $this->session->userdata('uid');?>
</tr></td>
<tr><td>
Start Time: </td><td><input type="text" name="starttime" value="" class="datepicker" />
</tr></td>
<tr><td>
End Time: </td><td><input type="text" name="endtime" value="" class="datepicker" />
</tr></td>
<tr><td>
Comments: </td><td><input type="text" name="comments" size=50">
</tr></td>
<tr><td>
<input type="submit" value="submit">
</tr></td>
</table>
</form>

<?php echo $msg; ?>