<?php include './assets/template/header_admin.php'; ?>



<div class="container">
		<div class="row">
				
			<div id="content" class="span12">
<h2>
Schedule
</h2>
<div class="well">

A big list of the current schedule for everybody.<br>

<?php

include 'classes/calendar.php';

$month = isset($_GET['m']) ? $_GET['m'] : NULL;
$year  = isset($_GET['y']) ? $_GET['y'] : NULL;

$calendar = Calendar::factory($month, $year);




$event2 = $calendar->event()->condition('timestamp', strtotime(date('F').' 22, '.date('Y')))->title('9AM')->output('asdf');
$calendar->standard('today')
	->standard('prev-next')
	->standard('holidays');

$sun = strtotime("first Sunday of May 2014");
$offset = strftime("%d", $sun);

    foreach ($query as $schedule)
    {
        $event2 = $calendar->event()->condition('timestamp', strtotime(date('F').' '. ($schedule->date - 7 + $offset) .', '.date('Y')))->title("asdf")->output($schedule->username . "<br>".$schedule->starttime . "->" . $schedule->endtime);
        // $calendar->attach($event2);
        $event2 = $calendar->event()->condition('timestamp', strtotime(date('F').' '. ($schedule->date + $offset) .', '.date('Y')))->title("asdf")->output($schedule->username . "<br>".$schedule->starttime . "->" . $schedule->endtime);
        $calendar->attach($event2);
        $event2 = $calendar->event()->condition('timestamp', strtotime(date('F').' '. ($schedule->date + 7 + $offset) .', '.date('Y')))->title("asdf")->output($schedule->username . "<br>".$schedule->starttime . "->" . $schedule->endtime);
        $calendar->attach($event2);
        $event2 = $calendar->event()->condition('timestamp', strtotime(date('F').' '. ($schedule->date + 14 +  $offset) .', '.date('Y')))->title("asdf")->output($schedule->username . "<br>".$schedule->starttime . "->" . $schedule->endtime);
        $calendar->attach($event2);
        $event2 = $calendar->event()->condition('timestamp', strtotime(date('F').' '. ($schedule->date + 21 + $offset) .', '.date('Y')))->title("asdf")->output($schedule->username . "<br>".$schedule->starttime . "->" . $schedule->endtime);
        $calendar->attach($event2);

    }


?>


        <?php 
        foreach ($query as $schedule)
        {
        ?>
        <tr>
            <td><?php echo $schedule->username; ?></td>
            <td><?php echo $schedule->date; ?></td>
            <td><?php echo $schedule->starttime; ?></td>
            <td><?php echo $schedule->endtime; ?></td>
        <tr>
        <?php
        }
        ?>



            <table class="calendar">
                <thead>
                    <tr class="navigation">
                        <th class="prev-month"><a href="<?php echo htmlspecialchars($calendar->prev_month_url()) ?>"><?php echo $calendar->prev_month() ?></a></th>
                        <th colspan="5" class="current-month"><?php echo $calendar->month() ?> <?php echo $calendar->year ?></th>
                        <th class="next-month"><a href="<?php echo htmlspecialchars($calendar->next_month_url()) ?>"><?php echo $calendar->next_month() ?></a></th>
                    </tr>
                    <tr class="weekdays">
                        <?php foreach ($calendar->days() as $day): ?>
                            <th><?php echo $day ?></th>
                        <?php endforeach ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($calendar->weeks() as $week): ?>
                        <tr>
                            <?php foreach ($week as $day): ?>
                                <?php
                                list($number, $current, $data) = $day;
                     
                                $classes = array();
                                $output  = '';
                     
                                if (is_array($data))
                                {
                                    $classes = $data['classes'];
                                    $title   = $data['title'];
                                    $output  = empty($data['output']) ? '' : '<ul class="output"><li>'.implode('</li><li>', $data['output']).'</li></ul>';
                                }
                                ?>
                                <td class="day <?php echo implode(' ', $classes) ?>">
                                    <span class="date" title="<?php echo implode(' / ', $title) ?>"><?php echo $number ?></span>
                                    <div class="day-content">
                                        <?php echo $output ?>
                                    </div>
                                </td>
                            <?php endforeach ?>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>


<br/>


<div>
    <table style="width:1000px">
        <tr>
            <th>User Name</th>
            <th>Date</th>
            <th>Start Time</th>      
            <th>End Time</th>
            <th></th>


        </tr>
        <?php 
        foreach ($query as $schedule)
        {
        ?>
        <tr>
            <td><?php echo $schedule->username; ?></td>
            <td><?php echo $schedule->date; ?></td>
            <td><?php echo $schedule->starttime; ?></td>
            <td><?php echo $schedule->endtime; ?></td>
            <td>
            <a href="<?php echo base_url(); ?>schedule/delete?sid=<?php echo $schedule->sid; ?>">Delete</a>
            </td>
        <tr>
        <?php
        }
        ?>
    </table>
</div>

<br />
<form method="POST" action="<?php echo base_url();?>schedule/insert">
<table>
<tr><td>
User Name: </td><td><input type="text" name="username" size="25" required>
</tr></td>
<tr><td>
Start Time: </td><td><input type="text" name="starttime" size="25" required>
</tr></td>
<tr><td>
End Time: </td><td><input type="text" name="endtime" size="25" required>
</tr></td>
<tr><td>
Date: </td><td>
<select name="date" id="date">
    <option value="" disabled="disabled" selected="selected">Please select a date</option>
    <option value="1">Monday</option>
    <option value="2">Tuesday</option> 
    <option value="3">Wednesday</option> 
    <option value="4">Thursday</option> 
    <option value="5">Friday</option> 
    <option value="6">Saturday</option> 
    <option value="0">Sunday</option>
</select>
</tr></td>
<tr><td>
<input type="submit" value="Add">
</tr></td>
</table>
</form>








</div>



			</div>
		
		</div>
	</div>

<?php include './assets/template/footer_1.php'; ?>

