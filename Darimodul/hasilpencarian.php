<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
$vcari=$_POST['txtcari'];
$conn=mysql_connect("localhost","root","") or dir ("koneksi gagal");
mysql_select_db("dbdaftar",$conn);
$strSQL="select * from tbdaftar where umur >= '$vcari'";
$qry=mysql_query($strSQL,$conn) or die ("query salah");
?>
<table border="1">
<tr>
<td>nama</td><td>kelas</td><td>jenis</td><td>alamat</td><td>foto</td><td>umur</td>
</tr>
<?php 
while($row=mysql_fetch_array($qry))
{
echo "<tr>";
echo "<td>".$row["nama"]."</td>";
echo "<td>".$row["kelas"]."</td>";
echo "<td>".$row["jenis"]."</td>";
echo "<td>".$row["alamat"]."</td>";
echo "<td><img width=50 height=50 src=".$row["foto"]."></td>";
echo "<td>".$row["umur"]."</td>";
echo "</tr>";
}
?>
</table>
</body>
</html>
