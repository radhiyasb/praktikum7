<!DOCTYPE html>
<html>
<head>
	<title>Database Buku Tamu</title>
</head>
<body>
	<h4>TUGAS 1</h4>
	<?php
		//memanggil file tugas1koneksi.php
		include "tugas1koneksi.php";
		//memanggil file tugas1tabel.php
		include "tugas1tabel.php";
		//memanggil file tugas1input.php
		include "tugas1input.php";
		//menutup koneksi
		mysqli_close($conn);
	?>
</body>
</html>