<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Untitled Document</title>
</head>

<body>
	<?php
	$idmember = $_POST['idmember'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	// include 'koneksi.php';
	include 'koneksi.php';
	$query = mysql_query("update  member set nama='$nama' , alamat='$alamat' where idmember = '$idmember' ");
	?>
	data sudah di update
	<a href="lihatdata.php">Lihat data</a>

</body>
</html>
