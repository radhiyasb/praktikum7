<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data</title>
</head>
<body>
	<?php
		include "tugas3koneksi.php";
	?>
	<h3>Ubah Data Pegawai</h3><br>
	<table border="2">
		<tr>
			<td>ID Pegawai</td>
			<td>Nama Pegawai</td>
			<td>Alamat Pegawai</td>
			<td>Divisi</td>
		</tr>
	
	<?php
		//Menampilkan data yang sudah tersimpan
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
	<!--Form update pegawai-->
	</table><br>
	<form method="POST" action="tugas3ubah.php">
		<table>
			<tr>
				<td>ID Pegawai : </td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>Nama Pegawai : </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat Pegawai : </td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Divisi : </td>
				<td><input type="text" name="divisi"></td>
			</tr>
			<tr>
				<td><input type="submit" name="Submit" value="Ubah Data"></td>
				<td><a href="tugas3.php"><input type="button" value="Kembali"></a></td>
			</tr>
		</table>
	</form>

	<?php
		//Fungsi tombol submit untuk update data
		if (isset($_POST['Submit'])) {
			$id=$_POST['id'];
			$nama=$_POST['nama'];
			$alamat=$_POST['alamat'];
			$divisi=$_POST['divisi'];
			$sql="UPDATE pegawai SET ID_PEGAWAI='$id',KODE_DIVISI='$divisi',NAMA_PEGAWAI='$nama',ALAMAT_PEGAWAI='$alamat' 
			WHERE ID_PEGAWAI='$id'";
			if (mysqli_query($conn, $sql)) {
				echo "<script>alert('Data Berhasil Diubah!');history.go(-1);</script>";
			} else {
				echo "Error: ".$sql."<br>".mysqli_error($conn);
			}
		}
		mysqli_close($conn);
	?>
</body>
</html>