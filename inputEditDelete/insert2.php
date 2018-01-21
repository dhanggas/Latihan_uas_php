<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Untitled Document</title>
	<style type="text/css">
	<!--
	.style1 {
		font-size: 24px;
		font-weight: bold;
	}
	-->
</style>
</head>

<body>
	<?php 
	$conn = mysql_connect ("localhost","root","") or die ("koneksi gagal") ;
	mysql_select_db ("dbuas" ,$conn);
	$n=$_POST['jum'];
	for($i=1;$i<=$n;$i++)
	{
		$dataid=$_POST['idmember'.$i];
		$datanama=$_POST['nama'.$i];
		$dataalamat=$_POST['alamat'.$i];
		if((!empty($dataid)) && (!empty($datanama))&& (!empty($dataalamat)))
		{
			$query ="insert into member (idmember,nama,alamat) values ('$dataid','$datanama','$dataalamat')";
			$hasil=mysql_query($query);
			if($hasil){
				echo "input data sukses<br>";
			} else{
			 echo "input data gagal <br>";
			}
		}else{
			echo "input data gagal <br>";
		}
	}

	?>


  
	<p>&nbsp; </p>
	<a href="lihatdata.php">Lihat data</a>
</body>
</html>
