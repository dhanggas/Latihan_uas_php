<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Untitled Document</title>
</head>

<body>
	<?php
	include 'koneksi.php';
	$strSQL = "select * from tbinput where nim = '$_GET[nim]'" ;
	$qry = mysql_query ($strSQL) or die ("query salah") ;
	$row = mysql_fetch_array ($qry)
	?>
</pre>
<form action= "editproses.php" method= "post" >
	<pre>
		Nim: <input type= "text" name= "nim" value="<?php echo $row['nim'];?>">
		Nama: <input type= "text" name= "nama" value="<?php echo $row['nama'];?>">
		Jumlah: <input type= "text" name= "jumlah" value="<?php echo $row['jumlah'];?>">
		<input type= "submit" value= "simpan"/>
	</pre>
</form>

</body>
</html>
