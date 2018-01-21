<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<p>
  <?php 
$vnama=$_POST['txtnm'];
$vkelas=$_POST['txtkelas'];
$vjenis=$_POST['rdojenis'];
$valamat=$_POST['txtalamat'];
$conn=mysql_connect("localhost","root","") or dir ("koneksi gagal");
mysql_select_db("dbdaftar",$conn);
$strSQL="insert into tbdaftar (nama,kelas,jenis,alamat) values ('$vnama','$vkelas','$vjenis','$valamat')";
$qry=mysql_query($strSQL,$conn) or die ("query salah");
?>
Telah terdaftar</p>
<form id="form1" name="form1" method="post" action="lihatdata.php">
  <label>
  <input type="submit" name="Submit" value="Lihat Data" />
  </label>
</form>
<p>&nbsp; </p>
</body>
</html>
