<?php include './assets/template/header.php'; ?>

<h1>Analytic View Test</h1>


<?php 
		/*foreach ($query as $newspost)
		{
	
		
		$newspost->title;
                $newspost->message;
                $newspost->uid;
                $newspost->date;
                        
	
		} */

$Red_count = 22;
$Blue_count = 10;
$Green_count = 6;
$Yellow_count = 3;
$Black_count = 4;
$Brown_count = 10;
$White_count = 2;

/*$result = mysql_query("SELECT color FROM Boats");
while($row = mysql_fetch_assoc($result)){
	if($row["color"]=="Red")
		$Red_count++;
	else if($row["color"]=="Blue")
		$Blue_count++;
	else if($row["color"]=="Green")
		$Green_count++;
	else if($row["color"]=="Yellow")
		$Yellow_count++;
	else if($row["color"]=="White")
		$White_count++;
	else if($row["color"]=="Black")
		$Black_count++;
	else
		$Brown_count++;
}*/

$data = array(
	array("Boat Color","Count"),
	array("Red",$Red_count),
	array("Blue",$Blue_count),
	array("Green",$Green_count),
	array("Yellow",$Yellow_count),
	array("Black",$Black_count),
	array("White",$White_count),
	array("Brown",$Brown_count)
);

$data_json = json_encode($data);

?>

<html>
  <head>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable(<?=$data_json?>);

        var options = {
          title: 'Colors by color',
          is3D: true,

        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
<?php include './assets/template/footer.php'; ?>