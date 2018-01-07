<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
//cek apakah user sudah login
If (!isset( $_SESSION['userid'])){
Die ( "anda belum login" ); //jika belum login jangan lanjut..
}//cek level user
If ($_SESSION ['level']!= "user" && $_SESSION ['level']!= "mhs"){
Die ( "anda bukan user" ); //jika bukan user maka jangan lanjut..
}
?>
<?php echo "<h3> welcome ".$_SESSION['userid']."</h3>"; ?>
<h4> ini halaman 3 </h4>

</body>
</html>
