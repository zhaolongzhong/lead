<?php include './assets/template/header_admin.php'; ?>


<div class="container">
		<div class="row">
				
			<div id="content" class="span12">


<h2>
Time Sheet Request List</h2>
<?php echo date('Y-m',strtotime('january this year'));?>

<?php echo date('Y-m',strtotime('january this year'));?>
<?php echo date('Y-m',strtotime('february this year'));?>
<?php echo date('Y-m',strtotime('march this year'));?>
<?php echo date('Y-m',strtotime('april this year'));?>
<?php echo date('Y-m',strtotime('may this year'));?>
<?php echo date('Y-m',strtotime('june this year'));?>
<?php echo date('Y-m',strtotime('july this year'));?>
<?php echo date('Y-m',strtotime('august this year'));?>
<?php echo date('Y-m',strtotime('septemper this year'));?>
<?php echo date('Y-m',strtotime('october this year'));?>
<?php echo date('Y-m',strtotime('november this year'));?>
<?php echo date('Y-m',strtotime('december this year'));?>

<br/>
<div class="well">
<div>
	<table style="width:1000px">
		<tr>
            <th>User Name</th>
		 	<th>First Name</th>
            <th>Last Name</th>
			<th>Start Time</th>		
			<th>End Time</th>
			<th>Hours Worked</th>
			<th>Approved By</th>
			<th>Comments</th>
			<th>Action</th>
		</tr>
		<?php 
		foreach ($thisweek as $request)
		{
		?>
		<tr>
            <td><?php echo $request->username; ?></td>
			<td><?php echo $request->fname; ?></td>
            <td><?php echo $request->lname; ?></td>
			<td><?php echo $request->starttime; ?></td>
			<td><?php echo $request->endtime; ?></td>
			<td><?php echo $request->hoursworked; ?></td>
			<td><?php echo $request->approvedbyadmin; ?></td>
			<td><?php echo $request->comments; ?></td>
			<td>
			<a href="<?php echo base_url(); ?>approved_update?timesheetid=<?php echo $request->timesheetid; ?>">Edit</a>
			<a href="<?php echo base_url(); ?>approved/approve?timesheetid=<?php echo $request->timesheetid; ?>">Approve</a>
			</td>
		<tr>
		<?php
		}
		?>
	</table><?php echo $msg; ?>
</div>




</div>
<!-- <div class="well">
        <div>
            <table style="width:1000px">
                <tr>
                     <th>User ID</th>
                     <th>User Name</th>

                </tr>
                <?php 
                foreach ($userinfo as $user)
                {
                ?>
                <tr>
                    <td><?php echo $user->uid; ?></td>
                    <td><?php echo $user->username; ?></td>

                    <td>

                    </td>
                <tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div> -->
    
    <div class="well">
    
        
        
<!-- <?php print_r($stack); ?> -->

<div id="container" style="height: 400px"></div>

<script type="text/javascript">


$(function () {
    $('#container').highcharts({
        chart: {
            type: 'pie',
            options3d: {
				enabled: true,
                alpha: 45
            }
        },
        title: {
            text: 'Hourly portions charts'
        },

        plotOptions: {
            pie: {
                innerSize: 100,
                depth: 45
            }
        },
        series: [{
            name: 'Total hours worked',
            data: [
                
				<?php 
				foreach ($stack as $user)
				{
				echo "['" . $user[1] . "', " . $user[2] . "],";
            }
				?>
                
                
                
            ]
        }]
    });
});


</script>

</div>

<div class="well">



<div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<script type="text/javascript">


$(function () {
        $('#container2').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Hours worked this week'
            },
            xAxis: {
                categories: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Total fruit consumption'
                },
                stackLabels: {
                    enabled: true,
                    style: {
                        fontWeight: 'bold',
                        color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                    }
                }
            },
            legend: {
                align: 'right',
                x: -70,
                verticalAlign: 'top',
                y: 20,
                floating: true,
                backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
                borderColor: '#CCC',
                borderWidth: 1,
                shadow: false
            },
            tooltip: {
                formatter: function() {
                    return '<b>'+ this.x +'</b><br/>'+
                        this.series.name +': '+ this.y +'<br/>'+
                        'Total: '+ this.point.stackTotal;
                }
            },
            plotOptions: {
                column: {
                    stacking: 'normal',
                    dataLabels: {
                        enabled: true,
                        color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
                        style: {
                            textShadow: '0 0 3px black, 0 0 3px black'
                        }
                    }
                }
            },
            series: [
            // {
            //     name: 'John',
            //     data: [5, 3, 4, 7, 2]
            // }, {
            //     name: 'Jane',
            //     data: [2, 2, 3, 2, 1]
            // }, {
            //     name: 'Joe',
            //     data: [3, 4, 4, 2, 5]
            // }
            
            <?php foreach($week as $key=>$value){
                echo "{name: '" . $key . "', data:" . $value . "},"; ?><?php
            }?>
            
            ]
        });
    });
    


</script>

</div>

<div class="well">
    
    <?php print_r($month);?>
    
    
    <div id="container3" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

    <script type="text/javascript">


    $(function () {
            $('#container3').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Hours worked this year'
                },
                xAxis: {
                    categories: ['January', 'Febuary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Total fruit consumption'
                    },
                    stackLabels: {
                        enabled: true,
                        style: {
                            fontWeight: 'bold',
                            color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                        }
                    }
                },
                legend: {
                    align: 'right',
                    x: -70,
                    verticalAlign: 'top',
                    y: 20,
                    floating: true,
                    backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
                    borderColor: '#CCC',
                    borderWidth: 1,
                    shadow: false
                },
                tooltip: {
                    formatter: function() {
                        return '<b>'+ this.x +'</b><br/>'+
                            this.series.name +': '+ this.y +'<br/>'+
                            'Total: '+ this.point.stackTotal;
                    }
                },
                plotOptions: {
                    column: {
                        stacking: 'normal',
                        dataLabels: {
                            enabled: true,
                            color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
                            style: {
                                textShadow: '0 0 3px black, 0 0 3px black'
                            }
                        }
                    }
                },
                series: [
                // {
                //     name: 'John',
                //     data: [5, 3, 4, 7, 2]
                // }, {
                //     name: 'Jane',
                //     data: [2, 2, 3, 2, 1]
                // }, {
                //     name: 'Joe',
                //     data: [3, 4, 4, 2, 5]
                // }
            
                <?php foreach($month as $key=>$value){
                   
                    //print_r($key);
                   
                    echo "{name: '" . $key . "', data:" . $value . "},";
                    ?><?php
                }?>
            
                ]
            });
        });
    


    </script>
    
</div>





			</div>
		
		</div>
	</div>

<?php include './assets/template/footer_1.php'; ?>