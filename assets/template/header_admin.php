<!DOCTYPE html>
<html lang="en">
<head>

<title>lead institute</title>

<link href="http://static.zephyrcharts.com/bs3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="http://static.zephyrcharts.com/media/bootstrap.mod.css" rel="stylesheet">

</head>

<body onload="init()">
	
	
        
    	<div class="navbar navbar-default navbar-fixed-top">
			<div class="container">
        
        <a class="navbar-brand" href="/~cs4380sp14grp12/lead/home_1/">
            <?php if (isset($firstname)) { echo $firstname;} else { echo "Admin"; };?></a>
          <ul class="nav navbar-nav">
  			<li>
  				<a href="/~cs4380sp14grp12/lead/createnews_post_controller/">News</a>
  			</li>
  			<li>
  				<a href="/~cs4380sp14grp12/lead/volunteer">Volunteers</a>
  			</li>
  			<li>
  				<a href="/~cs4380sp14grp12/lead/schedule/">Schedule</a>
  			</li>
  			<li>
  				<a href="/~cs4380sp14grp12/lead/phone/">Phone</a>
  			</li>
  			<li>
  				<a href="/~cs4380sp14grp12/lead/email/">Email</a>
  			</li>
              <!-- <li>
                  <a href="/~cs4380sp14grp12/lead/user_stats/">User Stats</a>
              </li> -->
        <li>
          <a href="/~cs4380sp14grp12/lead/approved/">Approve</a>
        </li>
        <!-- <li>
          <a href="/~cs4380sp14grp12/lead/message/">Message</a>
        </li> -->
        <li>
          <a href="/~cs4380sp14grp12/lead/quiz_list/">Quizes</a>
        </li>

        <li>
          <a href="/~cs4380sp14grp12/lead/survey/loadsurveyresults">SurveyResults</a>
        </li>
    <!-- <li>
     <a href="/~cs4380sp14grp12/lead/survey/contactform_list_controller">Contact Table</a>
        </li> -->
        
              </ul>
          
          
              <ul class="nav navbar-nav pull-right">

    			<li class="pull-right">
    				<a href="/~cs4380sp14grp12/lead/home_1/">Logout</a>
    			</li>
            
                 </ul>
          
            </div>
    	</div>
  