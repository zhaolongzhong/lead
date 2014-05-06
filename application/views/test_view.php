
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


<form method='post' id='userform' action='<?php echo base_url();?>test/insert_useranswer?quizid=<?php echo $quizid;?>'> 
<?php 
$i = 1;
foreach ($questions as $question)
{
?>
<?php echo $question->questionorder; ?>. <?php echo $question->question; ?><br />
	<?php
	foreach ($answers as $answer)
	{
		
		if($question->questionid == $answer->questionid){
			if(strtolower($answer->answer) == "true"){
				?>
				<?php echo "<input type='checkbox' name='checkbox[".$question->questionid."][]' value='true'>";?><?php echo $answer->answer; ?> <br/>
				<?php
			}elseif(strtolower($answer->answer) == "false"){
				?>
				<?php echo "<input type='checkbox' name='checkbox[".$question->questionid."][]' value='false'>";?><?php echo $answer->answer; ?> <br/>
				<?php			
			}elseif(strtolower($answer->answerorder) == "a"){
				?>
				<?php echo "<input type='checkbox' name='checkbox[".$question->questionid."][]' value='a'>";?> <?php echo $answer->answerorder; ?>. <?php echo $answer->answer; ?> <br/>
				<?php			
			}elseif(strtolower($answer->answerorder) == "b"){
				?>
				<?php echo "<input type='checkbox' name='checkbox[".$question->questionid."][]' value='b'>";?> <?php echo $answer->answerorder; ?>. <?php echo $answer->answer; ?> <br/>
				<?php			
			}elseif(strtolower($answer->answerorder) == "c"){
				?>
				<?php echo "<input type='checkbox' name='checkbox[".$question->questionid."][]' value='c'>";?> <?php echo $answer->answerorder; ?>. <?php echo $answer->answer; ?> <br/>
				<?php			
			}elseif(strtolower($answer->answerorder) == "d"){
				?>
				<?php echo "<input type='checkbox' name='checkbox[".$question->questionid."][]' value='d'>";?> <?php echo $answer->answerorder; ?>. <?php echo $answer->answer; ?> <br/>
				<?php			
			}elseif(strtolower($answer->answerorder) == "e"){
				?>
				<?php echo "<input type='checkbox' name='checkbox[".$question->questionid."][]' value='e'>";?> <?php echo $answer->answerorder; ?>. <?php echo $answer->answer; ?> <br/>
				<?php			
			}elseif(strtolower($answer->answerorder) == "f"){
				?>
				<?php echo "<input type='checkbox' name='checkbox[".$question->questionid."][]' value='e'>";?> <?php echo $answer->answerorder; ?>. <?php echo $answer->answer; ?> <br/>
				<?php			
			}
		}
	}
	?>		
<br />
<?php
 
}
?>
<input type='submit' class='buttons'> 
</form>
<?php echo $msg;?><br />
<?php if(!empty($correct_rate)){
	echo "Your correct answer percentage is <br/ >" . $correct_rate."%<br />";
}
?>

<br>

<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

<script type="text/javascript">

$(function () {
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Scores on your test'
        },
        tooltip: {
    	    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        credits: {
      		enabled: false
  		},
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Problems solved',
            data: [
                ['Correct',   <?php if(!empty($correct_rate)){ echo $correct_rate; } ?>],
                ['Incorrect',       <?php if(!empty($incorrect_rate)){ echo $incorrect_rate; } ?>]

            ]
        }]
    });
});

</script>

</div>


			</div>
		
		</div>
	</div>

<?php include './assets/template/footer_1.php'; ?>


