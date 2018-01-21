<?php
session_start();
//cek apakah user sudah login
If (!isset( $_SESSION['userid'])){
Die ( "anda belum login" ); //jika belum login jangan lanjut..
}//cek level user
If ($_SESSION ['level']!= "mhs"){
Die ( "anda bukan mhs" ); //jika bukan user maka jangan lanjut..
}
?>
<html> <body>
<?php echo "<h3> welcome ".$_SESSION['userid']."</h3>"; ?>
menu :

<a href= "halaman3.php"> Halaman 3</a> ||
<a href= "login.php?op=out"> Log out </a>

</body>
</html>