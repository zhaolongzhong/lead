

<script type="text/javascript" src="http://static.zephyrcharts.com/bs_caro/jquery-1.9.1.min.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>



<div id="container" style="height: 400px"></div>
<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Browser market shares at a specific website, 2014'
        },
        tooltip: {
    	    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Browser share',
            data: [
				
                ['Incorrect1',       2],
                ['Incorrect2',       3],
                ['Incorrect3',       4],  
                ]
            }]
        });
    });
    

</script>


				<?php 
				foreach ($stack as $user)
                {
                echo "['" . $user[1] . "', " . $user[2] . "],";
                }
                 ?>