<!DOCTYPE html>
<html>
<head>
	<title>DATABASE PEGAWAI</title>
</head>
<body>
	<h3>Database Pegawai</h3>
	<?php 
		include "tugas2koneksi.php";
		// buat database
		$sql = "CREATE DATABASE pegawai";
		if (mysqli_query($conn, $sql)) {
			echo "Database 'pegawai' created successfully"."<br>";
		} else {
			echo "Error creating database: ".mysqli_error($conn);
		}
		mysqli_close($conn);

		$servername ="localhost";
		$username = "root";
		$password = "";
		$dbname = "pegawai";
		//koneksi ke database pegawai
		$conn = mysqli_connect($servername,$username,$password,$dbname);
		if (!$conn) {
			die("Connection failed: ".mysqli_connect_error());
		}else{
			echo "Connection successfully to database ".$dbname."<br>";
		}


		//tabel relasi
		$sql="CREATE TABLE DIVISI(
   			KODE_DIVISI varchar(5) not null  comment '',
   			NAMA_DIVISI varchar(50)  comment '',
   			primary key (KODE_DIVISI))";
   		mysqli_query($conn,$sql);
		
		$sql="CREATE TABLE PEGAWAI(
   			ID_PEGAWAI varchar(5) not null  comment '',
   			NAMA_PEGAWAI varchar(50)  comment '',
   			ALAMAT_PEGAWAI varchar(50)  comment '',
			KODE_DIVISI  varchar(5)  comment '',
   			primary key (ID_PEGAWAI))";
   		mysqli_query($conn,$sql);
		
		$sql="ALTER TABLE PEGAWAI ADD constraint FK_PEGAWAI_BEKERJA foreign key (KODE_DIVISI)
      references DIVISI (KODE_DIVISI) on delete restrict on update restrict";
		
		if (mysqli_query($conn, $sql)) {
			echo "Relation table created successfully"."<br>";
		} else {
			echo "Error: ".$sql."<br>".mysqli_error($conn);
		}
	?>

</body>
</html>