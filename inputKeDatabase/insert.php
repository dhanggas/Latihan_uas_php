<?php 
include 'koneksi.php';
?>

<?php 
$nim=$_POST['txtnim'];
$nama=$_POST['rdonama'];
$jumlah=$_POST['txtjumlah'];
$query = "insert into tbinput (nim,nama,jumlah) values('$nim','$nama','$jumlah')";
$hasil=mysql_query($query);
?>
<p>Data Telah terinput
</p>
<form name="form1" method="post" action="lihatdata.php">
	<label>
		<input type="submit" name="Submit" value="LIHAT DATA">
	</label>
</form>
