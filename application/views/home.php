<?php include './assets/template/header_1.php'; ?>


<div class="container">
		<div class="row">
				
			<div id="content" class="span12">



<h2>
	Notes
</h2>

<div class="well">
Teen Institute Sponsors:
Hy-Vee Rockbridge
Pi Beta Phi Sorority, Missouri Alpha 
Papa Murphy's Pizza
Central Dairy
Representative Timothy Jones
Independent Physicians

</div>
<div class="well">

The L.E.A.D. Institute
 (573)445-5005(V/TTY)
(573)303-5604(VP)

Home

Our Mission

Victim Services

Services

Sign Language Class

Teen Institute

Community Collaboration

Contact Us

Website Designed by The L.E.A.D. Institute © 2014 at Homestead™ Create a Website and List Your Business

Contact Us

The L.E.A.D. Institute ® 2502 W. Ash, Columbia, MO 65203
Would you like more information?
 

DOMESTIC VIOLENCE, 
SEXUAL VIOLENCE
AND 
CHILD ABUSE 
PROGRAMS

VICTIM ASSISTANCE

VICTIM ADVOCACY

24-HOUR CRISIS LINE
AND 
TEXTLINE

COMMUNITY COLLABORATION

TEEN INSTITUTE 
SUMMER CAMP
</div>

<div class="well">
news 1

</div>
<div class="well">
news 2

</div>

<h1>News</h1>

<div class="newsPost">

<?php 
		foreach ($query as $newspost)
		{
	?>
		
			<h2><?php echo $newspost->title; ?></h2>
                        <p><?php echo $newspost->message; ?></p>
                        <p>Created by <?php echo $newspost->uid; ?> on <?php echo $newspost->date; ?></p>
                        <br /> 
	<?php
		}
	?>



			</div>
		
		</div>
	</div>

<?php include './assets/template/footer_1.php'; ?>