<?php
session_start();
//cek apakah user sudah login
If (!isset( $_SESSION['userid'])){
Die ( "anda belum login" ); //jika belum login jangan lanjut..
}//cek level user
If ($_SESSION ['level']!= "admin"){
Die ( "anda bukan admin" ); //jika bukan admin maka jangan lanjut..
}
?>
<html> 
<body>
	<?php echo "<h3> welcome ".$_SESSION['userid']."</h3>"; ?>
	menu :
	<a href= "halaman1.php"> Halaman 1</a> ||
	<a href= "halaman2.php"> Halaman 2</a> ||
	<a href= "login.php?op=out"> Log out </a>
	
</body>
</html>
