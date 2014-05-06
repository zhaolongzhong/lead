<?php 
	if($role=='user'){
		include './assets/template/header_user.php';
	}elseif ($role=='admin') {
		include './assets/template/header_admin.php';
	} ?>
<div class="container">
		<div class="row">
				
			<div id="content" class="span12">
<h2>
Test <?php echo $quizid;?>
</h2>
<div class="well">

<?php echo $msg;?>






<form method='post' id='userform' action=''> 

1. A crisis is usually resolved within 6 weeks.<br/>
<input type='checkbox' name='checkbox[1][]' value='true'> True <br/>
<input type='checkbox' name='checkbox[1][]' value='false'> False <br/>
2. During crisis, people are unable to resolve their own problems.<br/>
<input type='checkbox' name='checkbox[2][]' value='true'> True<br/>
<input type='checkbox' name='checkbox[2][]' value='false'> False<br/>
3. People in crisis often exprience a high level of energy.<br/>
<input type='checkbox' name='checkbox[3][]' value='true'> True<br/>
<input type='checkbox' name='checkbox[3][]' value='false'> False<br/>
4. Crisis workers utilize the x-model when helping callers.<br/>
<input type='checkbox' name='checkbox[4][]' value='true'> True<br/>
<input type='checkbox' name='checkbox[4][]' value='false'> False<br/>
5. The model used in crisis intervention begins with summarizing caller's problems.<br/>
<input type='checkbox' name='checkbox[5][]' value='true'> True<br/>
<input type='checkbox' name='checkbox[5][]' value='false'> False<br/>
6. After you have established rapport with the caller, crisis workers should next form a plan of action.<br/>
<input type='checkbox' name='checkbox[6][]' value='true'> True<br/>
<input type='checkbox' name='checkbox[6][]' value='false'> False<br/>
7. Crisis workers should focus on as many of the callers' problems as possible.<br/>
<input type='checkbox' name='checkbox[7][]' value='true'> True<br/>
<input type='checkbox' name='checkbox[7][]' value='false'> False<br/>

<input type='submit' class='buttons'> 
</form>


<?php 
if (isset($_POST['checkbox'])) 
{
    echo "Your answer is";?><br/><?php
    print_r($_POST['checkbox']); 
    // $answer = $_POST['checkbox'];

}
?>




</div>


			</div>
		
		</div>
	</div>

<?php include './assets/template/footer_1.php'; ?>


