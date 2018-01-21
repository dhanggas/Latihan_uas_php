<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$conn = mysql_connect ("localhost","root","") or die ("koneksi gagal") ;
mysql_select_db ("karyawan_wp" ,$conn);
$nip= $_GET['nip'];
$query = mysql_query( "delete from karyawan where nip='$nip'" ) or die (mysql_error());?>

data sudah di hapus
<a href = "awal.php"> lihat data </a>

</body>
</html>
