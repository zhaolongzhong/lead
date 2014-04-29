This is a test page.
<form method='post' id='userform' action='z'> 
	1. A crisis is usually resolved within 6 weeks.<br/>
	<input type='checkbox' name='checkboxvar[0][]' value='true'>True<br />
	<input type='checkbox' name='checkboxvar[0][]' value='false'>False<br />
	2. Alcoho is what type of drug?<br/>
    <input type='checkbox' name='checkboxvar[1][]' value='a'>a. Stimulant<br/>
    <input type='checkbox' name='checkboxvar[1][]' value='b'>b. Depressant<br/>
    <input type='checkbox' name='checkboxvar[1][]' value='c'>c. Hallucinogen<br/>
    <input type='checkbox' name='checkboxvar[1][]' value='d'>d. Volatile substance<br/> 
	<input type='submit' class='buttons'> </form>
<hr>
Your answer is,<br />
<?php 
if (isset($_POST['checkboxvar'])) 
{
    // print_r($_POST['checkboxvar']); 
    $answer = $_POST['checkboxvar'];
    echo $answer[0][0];

    ?><br/><?php

    echo $answer[1][0];
}
?>


<br />
This approach use an array to store the checkbox value, which doesn't not apply to a question that have multiple solutions.<br />
We might use two dimension array if we want to apply to questions that have multiple solutions.