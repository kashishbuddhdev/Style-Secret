<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .admin-first-chart{
    width: 100%;
    margin-top: 150px;
}

    </style>
</head>
<body>
      
      <div class="admin-first-chart">
       <?php
 $jan=10;
 $feb=20;
 $mar=30;
 $april=40;
 $may=50;
 $june=60;
 $july=70;
 $july=80;
 $aug=90;
 $sept=100;
 $oct=110;
 $nov=120;
 $dec=130;
$dataPoints = array( 
	array("y" => $jan,"label" => "Jan" ),
	array("y" => $feb,"label" => "Feb" ),
	array("y" => $mar,"label" => "Mar" ),
    array("y" => $april,"label" => "Apr" ),
    array("y" => $may,"label" => "May" ),
	array("y" => $june,"label" => "Jun" ),
	array("y" => $july,"label" => "Jul" ),
    array("y" => $aug,"label" => "Aug" ),
	array("y" => $sept,"label" => "Sept" ),
	array("y" => $oct,"label" => "Oct" ),
	array("y" => $nov,"label" => "Nov" ),
	array("y" => $dec,"label" => "Dec" )
    
);
 
?>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Revenue Chart of Style Secret"
	},
	axisY: {
		title: "Revenue of Current year",
		includeZero: true,
		prefix: "",
		suffix:  "k"
	},
	data: [{
		type: "line", 
		// yValueFormatString: "##,##0K",
		// indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bolder",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
<div id="chartContainer"></div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>

        </div>

</body>
</html>