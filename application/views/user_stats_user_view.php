<?php include './assets/template/header_user.php'; ?>
<div class="container">
		<div class="row">
				
			<div id="content" class="span12">
<h2>
User stats
</h2>
<div class="well">

    Current stats for the month for a single user.<br/>
     <!-- <?php print_r($week);?><br/>
    <?php print_r($month);?> -->


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
            
            <?php 
                echo "{name: '" . "username" . "', data:" . $week . "},"; ?>
            
            ]
        });
    });
    


</script>

</div>

<div class="well">
    
    
    
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
            
                <?php 
                    echo "{name: '" . "username" . "', data:" . $month . "},"; ?>
            
                ]
            });
        });
    


    </script>
    
</div>



</div>
			</div>
		
		</div>
	</div>

<?php include './assets/template/footer_1.php'; ?>

