<?php 
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='dbuas';
mysql_connect($dbhost,$dbuser,$dbpass)or die ("koneksi gagal") ;;
mysql_select_db($dbname);

?>