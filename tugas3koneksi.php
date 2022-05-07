<?php
	$conn = mysqli_connect("localhost","root","","mysql");
	if (mysqli_connect_error()) {
		echo "Failed to connect to MySQL ".mysqli_connect_error();
		exit();
	} else {
		echo "Connection successfully to MySQL"."<br>";
	}

	//koneksi database pegawai
		$servername ="localhost";
		$username = "root";
		$password = "";
		$dbname = "pegawai";
		$conn = mysqli_connect($servername,$username,$password,$dbname);
		if (!$conn) {
			die("Connection failed: ".mysqli_connect_error());
		}else{
			echo "Connection successfully to database ".$dbname."<br>";
		}
?>