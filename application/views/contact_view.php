<?php include './assets/template/header_1.php'; ?>


<div class="container">
		<div class="row">
				
			<div id="content" class="span12">


<h2>
Contact The L.E.A.D. Institute
</h2>
<div class="well">
                                                                        <br>
The L.E.A.D. Institute                                                  <br>
2502 West Ash                                                           <br>
Columbia, MO 65203                                                      <br>
                                                                        <br>
Phone: (573)445-5005 (V/TTY)                                            <br>
​Videophone: (573)303-5604                                              <br>
Email: slogan@midamerica.net                                            <br>
                                                                        <br>
                                                                        <br>
In Crisis?                                                              <br>
Call Deafline Missouri/The Missouri Crisis Line                         <br>
24-hour, toll-free, confidential                                        <br>
                                                                        <br>
Columbia: (573)445-5035 (V/TTY)                                         <br>
Toll-Free: (888)761-HELP (4357)                                         <br>
or                                                                      <br>
Text HAND to 839863                                                     <br>
(standard text rates apply based on your cellular service agreement)    <br>


</div>


<h2>Contact</h2>
<div class="well">

<form method="POST" action="<?php echo base_url();?>contact/insert">
<table>
<tr><td>Email: </td><td><input type="text" name="email" size="25"></td></tr>
<tr><td>Name: </td><td><input type="text" name="name" size="25"></td></tr>
<tr><td>Subject: </td><td><input type="text" name="subject" size="25"></td></tr>
<tr><td>Message: </td><td><textarea name="message" rows="4" cols="50"></textarea></td></tr>
</table>
<input type="submit" value="Submit">
</form>



			</div>
		
		</div>
	</div>

<?php include './assets/template/footer_1.php'; ?>