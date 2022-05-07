<!DOCTYPE html>
<html>
<head>
	<title>Hapus Data Pegawai</title>
</head>
<body>
	<?php
		include "tugas3koneksi.php";
	?>

	<table border="2">
		<tr>
			<td>ID Pegawai</td>
			<td>Nama Pegawai</td>
			<td>Alamat Pegawai</td>
			<td>Divisi</td>
		</tr>
	
	<?php

		$sql="SELECT * FROM pegawai";
		$result=mysqli_query($conn,$sql);
		if (mysqli_num_rows($result)>0) {
			while ($tampil= mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>".$tampil['ID_PEGAWAI']."</td>";
				echo "<td>".$tampil['NAMA_PEGAWAI']."</td>";
				echo "<td>".$tampil['ALAMAT_PEGAWAI']."</td>";
				echo "<td>".$tampil['KODE_DIVISI']."</td>";
				echo "</tr>";
			}
		} else {
			echo "<tr>";
			echo "<td>"."</td>";
			echo "<td>"."</td>";
			echo "<td>"."</td>";
			echo "<td>"."</td>";
			echo "</tr>";
	}
	?>

	</table><br>
	<form method="POST" action="tugas3hapus.php">
		<table>
			<tr>
				<td>Nama Pegawai : </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td><input type="submit" name="Submit" value="Hapus Data"></td>
				<td><a href="tugas3.php"><input type="button" value="Kembali"></a></td>
			</tr>
		</table>
	</form>

	<?php
		if (isset($_POST['Submit'])) {
			$nama=$_POST['nama'];
			$sql="DELETE FROM pegawai WHERE nama_PEGAWAI = '$nama'";
			if (mysqli_query($conn, $sql)) {
				echo "<script>alert('Data Berhasil Dihapus!');history.go(-1);</script>";
			} else {
				echo "Error: ".$sql."<br>".mysqli_error($conn);
			}
		}
		mysqli_close($conn);
	?>
</body>
</html>