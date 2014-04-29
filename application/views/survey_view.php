<?php include './assets/template/header_1.php'; ?>




<div class="container">
		<div class="row">
				
			<div id="content" class="span12">


<h2>
Collaboration With Community Partners
</h2>

<div class="well">
At The L.E.A.D. Institute, we strive to create opportunities to collaborate in the community with other agencies and organizations who share similar missions.  If you would like to discuss collaborative opportunities with The L.E.A.D. Institute, please contact us. 

<br><br>
​If you have recently collaborated with The L.E.A.D. Institute or have spoken with us about the ways in which we can work together to end violence in our communities, please take this short survey.

</div>


<h2>
Survey
</h2>

<div class="well">


<form method="POST" action="<?php echo base_url();?>survey/insert">

<h5>Question 1</h5>


<p>I understand the types of services offered by The L.E.A.D. Institute.
    
  <ul>
    <li> <input type="radio" name="q1" id="vsat" value="SD"> <label for="SD">Strongly Disagree</label></li>
    <li> <input type="radio" name="q1" id="vsat" value="D"> <label for="D">Disagree</label></li>
    <li> <input type="radio" name="q1" id="vsat" value="N"> <label for="N">Neutral</label></li>
    <li> <input type="radio" name="q1" id="vsat" value="A"> <label for="A">Agree</label></li>
    <li> <input type="radio" name="q1" id="vsat" value="SA"> <label for="SA">Strongly Agree</label></li>
  </ul>

</p>

<h5>Question 2</h5>

<p>
I understand the unique barriers deaf and hard of hearing victims face when seeking services.
  
  <ul>
    <li> <input type="radio" name="q2" id="vsat" value="SD"> <label for="SD">Strongly Disagree</label></li>
    <li> <input type="radio" name="q2" id="vsat" value="D"> <label for="D">Disagree</label></li>
    <li> <input type="radio" name="q2" id="vsat" value="N"> <label for="N">Neutral</label></li>
    <li> <input type="radio" name="q2" id="vsat" value="A"> <label for="A">Agree</label></li>
    <li> <input type="radio" name="q2" id="vsat" value="SA"> <label for="SA">Strongly Agree</label></li>
  </ul>


  <label for="comments">Please list one reason.</label>
  <br>
      <textarea name="q2_reason" id="comments" cols="80" rows="1"></textarea>
</p>

<h5>Question 3</h5>

<p>
Because of The L.E.A.D. Institute, I have a better understanding of the cycle of violence as it pertains to deaf and hard of hearing victims.
  <ul>
    <li> <input type="radio" name="q3" id="vsat" value="SD"> <label for="SD">Strongly Disagree</label></li>
    <li> <input type="radio" name="q3" id="vsat" value="D"> <label for="D">Disagree</label></li>
    <li> <input type="radio" name="q3" id="vsat" value="N"> <label for="N">Neutral</label></li>
    <li> <input type="radio" name="q3" id="vsat" value="A"> <label for="A">Agree</label></li>
    <li> <input type="radio" name="q3" id="vsat" value="SA"> <label for="SA">Strongly Agree</label></li>
  </ul>

</p>

<h5>Question 4</h5>

<p>
I feel that I can call on The L.E.A.D. Institute should I need assistance in serving a deaf or hard of hearing client.
  <ul>
    <li> <input type="radio" name="q4" id="vsat" value="Y"> <label for="Y">Yes</label></li>
    <li><input type="radio" name="q4" id="sat" value="N"> <label for="N">No</label> </li>
 </li>
  </ul>
  
  <label for="comments2">If Yes, please explain how your agency will benefit from collaborating with The L.E.A.D. Institute.</label>
  <br>
      <textarea name="q4_reason" id="comments" cols="80" rows="1"></textarea>
  

</p>

  <button type="submit" class="btn btn-default">Submit</button>

</form>



</div>

<?php include './assets/template/footer_1.php'; ?>