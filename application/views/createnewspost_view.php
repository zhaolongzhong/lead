<?php include './assets/template/header_admin.php'; ?>





<div class="container">
		<div class="row">
				
			<div id="content" class="span12">
<h1>Create a new News Post</h1>

<div class="well">

<table>
<form method="POST" action="<?php echo base_url();?>createnews_post_controller/insert">
<tr><td>
Post being created by </td><td> User ID:<?php echo $this->session->userdata('uid');?>
</tr></td>
<tr><td>
Title: </td><td><input type="text" name="title"/>
</tr></td>
<tr><td>
</td><td><textarea name="message" rows="8" cols="50"></textarea>
</tr></td>

<tr><td>
Post to main web page:
<input type="radio" name="isprivate" value="true"><br />
Post to volunteers:
<input type="radio" name="isprivate" value="true">
</tr></td>

<tr><td>
<input type="submit" value="submit" >
</tr></td>
</table>
</form>

</div>


			</div>
		
		</div>
	</div>

<?php include './assets/template/footer_1.php'; ?>