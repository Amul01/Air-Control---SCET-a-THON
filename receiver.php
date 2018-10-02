<!DOCTYPE html
<html>
<head>
<h1>Welcome to air control</h1>
</head>
<body style="background-color:yellow">
</body>
</html>
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
	
	$sql = "select * from abc.gas order by id DESC LIMIT 10";
	$query = mysqli_query($dbconnect, $sql);
	
	/*while($row = mysqli_fetch_array($query)){
		echo "\n";
		echo nl2br("\r\n".$row['co2']."    ".$row['co']."    ".$row['nh4']);
	}*/
	
	echo 
	"<table border=1>
	<tr>
	<th>ID</th>
	<th>co2</th>
	<th>co</th>
	<th>nh4</th>
	</tr>";

	while($row = mysqli_fetch_array($query))
	{
		echo "<tr>";
		echo "<td>" . $row['ID'] . "</td>";
		echo "<td>" . $row['co2'] . "</td>";
		echo "<td>" . $row['co'] . "</td>";
		echo "<td>" . $row['nh4'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
		
	mysqli_close($dbconnect);
?>