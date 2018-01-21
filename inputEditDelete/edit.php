<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Untitled Document</title>
</head>

<body>
	<?php
	include 'koneksi.php';
	$strSQL = "select * from member where idmember = '$_GET[idmember]'" ;
	$qry = mysql_query ($strSQL) or die ("query salah") ;
	$row = mysql_fetch_array ($qry)
	?>
</pre>
<form action= "editproses.php" method= "post" >
	<pre>
		ID MEMBER: <input type= "text" name= "idmember" value="<?php echo $row['idmember'];?>">
		NAMA: <input type= "text" name= "nama" value="<?php echo $row['nama'];?>">
		ALAMAT: <input type= "text" name= "alamat" value="<?php echo $row['alamat'];?>">
		<input type= "submit" value= "simpan"/>
	</pre>
</form>

</body>
</html>
