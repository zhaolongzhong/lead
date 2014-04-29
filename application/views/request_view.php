<?php include './assets/template/header_1.php'; ?>


<div class="container">
		<div class="row">
				
			<div id="content" class="span12">



<h2>
	Time Sheet Request
</h2>

<div class="well">
    
    
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />


<script>
        $(function() {
            $( ".datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' }).val();
        });
</script>

Time Input Format:<br/>
2014-04-26 16:26:26<br/>
<table>
<form method="POST" action="<?php echo base_url();?>request/insert">
<tr><td>
Requested by </td><td> User ID:<?php echo $this->session->userdata('uid');?>
</tr></td>
<tr><td>
Start Time: </td><td>
        <select name="starttime">
                <option value="7:00">7:00 am</option>
                <option value="8:00">8:00 am</option>
                <option value="9:00">9:00 am</option>
                <option value="10:00">10:00 am</option>
                <option value="11:00">11:00 am</option>
                <option value="12:00">12:00 pm</option>
                <option value="13:00">1:00 pm</option>
                <option value="14:00">2:00 pm</option>
                <option value="15:00">3:00 pm</option>
                <option value="16:00">4:00 pm</option>
                <option value="17:00">5:00 pm</option>
                <option value="18:00">6:00 pm</option>
                <option value="19:00">7:00 pm</option>
                <option value="20:00">8:00 pm</option>
                <option value="21:00">9:00 pm</option>
                <option value="22:00">10:00 pm</option>
                <option value="23:00">11:00 pm</option>     
        </select>
</tr></td>
<tr><td>
End Time: </td><td>
        <select name="endtime">
                <option value="7:00">7:00 am</option>
                <option value="8:00">8:00 am</option>
                <option value="9:00">9:00 am</option>
                <option value="10:00">10:00 am</option>
                <option value="11:00">11:00 am</option>
                <option value="12:00">12:00 pm</option>
                <option value="13:00">1:00 pm</option>
                <option value="14:00">2:00 pm</option>
                <option value="15:00">3:00 pm</option>
                <option value="16:00">4:00 pm</option>
                <option value="17:00">5:00 pm</option>
                <option value="18:00">6:00 pm</option>
                <option value="19:00">7:00 pm</option>
                <option value="20:00">8:00 pm</option>
                <option value="21:00">9:00 pm</option>
                <option value="22:00">10:00 pm</option>
                <option value="23:00">11:00 pm</option>     
        </select>
</tr></td>
<tr><td>
Date: </td><td><input type="text" name="date" value="yyyy-mm-dd" class="datepicker" />
</tr></td>
<tr><td>
Comments: </td><td><textarea name="comments" rows="4" cols="50"></textarea>
</tr></td>
<tr><td>
<input type="submit" value="submit" >
</tr></td>
</table>
</form>

<?php echo $msg; ?>


</div>


			</div>
		
		</div>
	</div>

<?php include './assets/template/footer_1.php'; ?>