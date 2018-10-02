<?php
	$dbusername = "root";
	$dbpassword = "";
	$server = "localhost";
	$dbname = "abc";
	
	echo "";
	echo "Starting connection\r\n";
	$dbconnect = mysqli_connect($server, $dbusername, $dbpassword, $dbname);
	echo "\r\n";
	echo "You are connected\r\n";
	
	$sql = "select co2 from abc.gas order by ID DESC limit 1";
	
	$result = mysqli_query($dbconnect,$sql);
	
	$row= mysqli_fetch_array($result);
	echo $row["co2"];
	mysqli_close($dbconnect);
	
?>






<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="refresh" content="<?php echo "10"?>;URL='<?php echo $_SERVER['PHP_SELF']?>'">
<script>
window.onload = function () {

var dps = [];
var chart = new CanvasJS.Chart("chartContainer", {
	exportEnabled: true,
	title :{
		text: ""
	},
	axisY: {
		includeZero: false
	},
	data: [{
		type: "spline",
		markerSize: 0,
		dataPoints: dps 
	}]
});

var xVal = 0;
var yVal = 100;
var updateInterval = 1000;
var dataLength = 50; // number of dataPoints visible at any point

var updateChart = function (count) {
	count = count || 1;
	// count is number of times loop runs to generate random dataPoints.
	for (var j = 0; j < count; j++) {	
		yVal = <?php echo $row["co2"];?>;
		dps.push({
			x: xVal,
			y: yVal
		});
		xVal++;
	}
	
	if (dps.length > dataLength) {
		dps.shift();
	}
	chart.render();
};

updateChart(dataLength); 
setInterval(function(){ updateChart() }, updateInterval); 

}
</script>

</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> 

</body>
</html>