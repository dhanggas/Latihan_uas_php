<?php 
include 'koneksi.php';
?>
<body>
	<h1>Transaksi Pembayaran </h1>
	<p><a href ="bayar.php">Form Bayar</a></p>
	<hr>
	<?php 
	$id=$_POST['id'];
	$query= "select * from member where idmember ='$id'";
	$hasil=mysql_query($query);
	if (mysql_num_rows($hasil)>0)
	{
		$data=mysql_fetch_array($hasil);
		?>

		<form method="post" action="proses2.php">
			ID :<?php echo $id?> <br>
			Nama:<?php  echo $data['nama']; ?><br>
			Alamat:<?php echo $data['alamat']; ?><br>
			Jumlah Bayar:Rp. <input type="text" name="jumlah"><br>
			<input type="hidden" name="id" value="<?php echo $id?>">
			<input type="submit" value="submit">
		</form>
		<?php 
	}
	else echo "Nomor ID tidak di temukan";
	?>
</body>