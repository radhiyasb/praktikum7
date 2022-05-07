<?php
	//koneksi ke MySQL
	$conn = mysqli_connect("localhost","root","","mysql");
	//cek koneksi
	if (mysqli_connect_error()) {
		echo "Failed to connect to MySQL ".mysqli_connect_error();
		exit();
	} else {
		echo "Connected successfully"."<br>";
	}
	$servername ="localhost";
	$username = "root";
	$password = "";
	$dbname = "my_db";

	//koneksi ke database bukutamu
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	//cek koneksi
	if (!$conn) {
		die("Connection failed: ".mysqli_connect_error()."<br>");
	}else{
		echo "Connected successfully".$dbname."<br>";
	}
?>