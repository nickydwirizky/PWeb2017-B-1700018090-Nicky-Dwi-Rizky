<!DOCTYPE html>
<html>
<head>
	<title>Data Pemesan</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
table, td, th {   
    border: 1px solid #ddd;
    text-align: center;

}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 10px;

}
</style>
</head>
<body>
	<br>
		<form id="form1" name="form1" method="post" action="cari.php" align="center">
			Cari berdasarkan nama : <input type="text" name="cari" />
			<button class="button">Cari</button></a>
		</form>
		<br>
	<table>
		<tr>
			<td>Nama Pasien</td>
			<td>Jenis Kelamin</td>
			<td>Jenis Tiket</td>
			<td>Jumlah Tiket</td>
			<td>Harga Tiket</td>
			<td>Total Harga</td>
			<td>NIK</td>
			<td>No. Hp</td>
			<td>E-Mail</td>
			<td>Alamat</td>
		</tr>

		<?php
		include ("koneksi.php");
		$sql = "select * from datapemesan";
		$result = mysql_query($sql);
		while ($row=mysql_fetch_array($result)) {
			# code...
			?>
		<tr>
			<td><?php echo $row['nama'];?></td>
			<td><?php echo $row['jenkel'];?></td>
			<td><?php echo $row['jenis'];?></td>
			<td><?php echo $row['jumlah'];?></td>
			<td><?php echo $row['harga'];?></td>
			<td><?php echo $row['total'];?></td>
			<td><?php echo $row['nik'];?></td>
			<td><?php echo $row['telp'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['alamat'];?></td>
			<td>
				<a href="hapus.php?nama=<?php echo $row['nama']?>"><button class="button">Hapus</button></a>
			</td>
		</tr>
		<br>
		<?php
	}
	?>
	<br>
	<a href="input.php"><button class="button">Tambah Data</button></a> 
	</table>
</body>
</html>