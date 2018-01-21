<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$vcari=$_POST['txtcari'];
$conn=mysql_connect("localhost","root","") or die ("Konelsi gagal");
mysql_select_db("toko",$conn);
$strSQL=" select * from satuan where satuannama like '%$vcari%'";
$qry=mysql_query($strSQL,$conn) or die ("Query salah");
?>
<table border="1">
<tr>
<td>id</td>
<td>Satuan</td>
</tr>
<?php
while($row=mysql_fetch_array($qry))
{
echo "<tr>";
echo "<td>".$row["idsatuan"]."</td>";
echo "<td>".$row["satuannama"]."</td>";
echo "</tr>";
}
?>
</table>
</body>
</html>
