<?php
	$conn = mysqli_connect("localhost","root","","mysql");
	if (mysqli_connect_error()) {
		echo "Failed to connect to MySQL ".mysqli_connect_error();
		exit();
	} else {
		echo "Connection successfully to MySQL"."<br>";
	}
?>