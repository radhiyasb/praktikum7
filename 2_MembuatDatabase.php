<?php
$servername = "localhost";
$username = "root";
$password = "";

//Create connection
$conn = mysqli_connect($servername, $username, $password);
//Check connection
if (!$conn) {
	die("Connection Failed : ".mysqli_connect_error());
}

//create database
$sql = "CREATE DATABASE  my_db";
if (mysqli_query($conn, $sql)) {
	echo "Database created successfully";
} else {
	echo "Error creating database : ".mysqli_error($conn);
}

mysqli_close($conn);
?>