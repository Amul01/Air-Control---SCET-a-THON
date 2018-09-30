<?php
	$username = "root";  // enter database username, I used "arduino" in step 2.2
    $password = "password";  // enter database password, I used "arduinotest" in step 2.2
    $servername = "localhost"; // IMPORTANT: if you are using XAMPP enter "localhost"
	$db = "presensi";
    // Connect to your database
    $link = mysqli_connect($servername, $username, $password, $db);
	$sql = "SELECT * FROM test.transmitflag";
	$query = mysqli_query($link, $sql);
	while($row = mysqli_fetch_array($query)){
		echo $row['status'].',';
	}
?>