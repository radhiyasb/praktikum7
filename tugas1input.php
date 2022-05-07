<!DOCTYPE html>
<html>
<head>
	<title>Input Data ke Tabel buku_tamu</title>
</head>
<body>
	<?php
	$sql = "INSERT INTO buku_tamu(ID_BT,NAMA,EMAIL,ISI) 
	VALUES('1','Radhiya Sabila','radhiyasabila19@gmail.com','4 orang')";
	if (mysqli_query($conn, $sql)) {
		echo "Data berhasil di input";
	} else {
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}
	?>

	<table border="3">
		<tr>
			<td>ID_BT</td>
			<td>NAMA</td>
			<td>EMAIL</td>
			<td>ISI</td>
		</tr>

	<?php
	//menampilkan data
	$sql="SELECT * FROM buku_tamu";
	$result=mysqli_query($conn,$sql);
	if (mysqli_num_rows($result)>0) {
		while ($tampil= mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$tampil['ID_BT']."</td>";
			echo "<td>".$tampil['NAMA']."</td>";
			echo "<td>".$tampil['EMAIL']."</td>";
			echo "<td>".$tampil['ISI']."</td>";
			echo "</tr>";
			echo"</table>";
		}
	}
	?>
	</table>
</body>
</html>