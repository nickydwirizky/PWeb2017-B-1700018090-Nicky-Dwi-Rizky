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
<style>
{  background-color: lightblue;	}

</style>
</head>
<body>
	<style>
body {
    background-image: url("css/back.jpg");
}
</style>
	<?php

$nama = $_POST['txtnama'];
$jenkel = $_POST['txtpilih'];
$jenistiket = $_POST['ijenis'];
$jumlah = $_POST['ijumlah'];
$harga = $_POST['otiket'];
$sub = $_POST['osub'];
$nik = $_POST['txtnik'];
$telp = $_POST['txthp'];
$email = $_POST['txtemail'];
$alamat = $_POST['txtalamat'];


?>
	<table>
		<tr>
			<td>Nama Lengkap</td>
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
			<tr>
			<td><?php echo $nama; ?></td>
			<td><?php echo $jenkel; ?></td>
			<td><?php echo $jenistiket; ?></td>
			<td><?php echo $jumlah; ?></td>
			<td><?php echo $harga; ?></td>
			<td><?php echo $sub; ?></td>
			<td><?php echo $nik; ?></td>
			<td><?php echo $telp; ?></td>
			<td><?php echo $email; ?></td>
			<td><?php echo $alamat; ?></td>
		</tr>
		</tr>
		<br>
			<a href="input.php">Lakukan Pembelian Lagi</a>
</table>
<br>
		<center><h3>Segera Lakukan Pembayaran. Jika, Dalam 5 Jam Kedepan Belum
		Melakukan Pembayaran Maka Pesanan Otomatis Akan Kami Cancel</h3></center>

		<center><h3>silahkan lakukan pembayaran ke ATM BRI<br>(A/N : Tiket Konser 0174-01-048219-50-7)</h3></center>
</body>
</html>
