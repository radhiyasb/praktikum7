<?php
	$sql = "CREATE TABLE buku_tamu (
	ID_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	NAMA VARCHAR(200) NOT NULL,
	EMAIL VARCHAR(50) NOT NULL,
	ISI TEXT NOT NULL)";

	if (mysqli_query($conn, $sql)) {
		echo "TABEL BERHASIL DIBUAT";
	} else {
		echo "GAGAL MEMBUAT TABEL, ERROR : " . mysqli_error($conn);
	}
		
?>