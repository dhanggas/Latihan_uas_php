<?php 
include 'koneksi.php';
$today= date("Ymd");
?>
<body>
	<h1>Transaksi Pembayaran</h1>
	<p><a href="bayar.php">Form Bayar</a></p>
	<hr>
	<?php 
	$id = $_POST['id'];
	$jumlah=$_POST['jumlah'];
	$query= "select max(idtransaksi) AS last FROM transaksi WHERE idtransaksi like '$today%' ";
	$hasil =mysql_query($query);
	$data =mysql_fetch_array($hasil);
	$lastnotransaksi=$data['last'];
	$lastnourut=substr($lastnotransaksi,8,4);
	$nextnourut=$lastnourut+1;
	$nextnotransaksi=$today.sprintf('%04s',$nextnourut);
	$query ="insert into transaksi (idtransaksi,idmember,jumlah) values ('$nextnotransaksi','$id','$jumlah')";
	$hasil=mysql_query($query);
	if ($hasil)
	{
		$query2="select * from member where idmember = '$id' ";
		$hasil2=mysql_query($query2);
		$data2=mysql_fetch_array($hasil2);

		?>
		<p>Pembayaran Transaksi Sukses</p>
		ID transaksi : <?php echo $nextnotransaksi ;
		?><br>
		ID :<?php echo $id; ?> <br>
		Nama:<?php  echo $data2['nama']; ?><br>
		Alamat:<?php echo $data2['alamat']; ?><br>
		Jumlah Bayar :Rp. <?php echo $jumlah;?> <br>
		<?php
	}
	else echo "transaksi Gagal";
	?>
</body>
