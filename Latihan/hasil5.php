<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$vid=$_POST['txtnama'];
$vjenis=$_POST['rdojenisk'];
$vkelas=$_POST['rdokelas'];
$valamat=$_POST['txtalamat'];
$conn=mysql_connect("localhost","root","") or die ("Koneksi gagal");
mysql_select_db("dbdaftar",$conn);
$strSQL= "insert into tbmhs (nama,jenis_k,kelas,alamat_t) values ('$vid','$vjenis','$vkelas','$valamat')";
$qry=mysql_query($strSQL,$conn) or die ("Query salah");
?>
Data Tersimpan
</body>
</html>
