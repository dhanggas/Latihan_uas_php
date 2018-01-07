<?php
session_start();
include 'koneksi.php';
$userid = $_POST[ 'userid' ];
$psw = $_POST[ 'psw' ];
$op = $_GET[ 'op' ];
if ($op == "in" )
{
$cek = mysql_query ( "SELECT * FROM tbuser where userid='$userid' and password='$psw'" );
	if (mysql_num_rows($cek) == 1 )
	{ //jika berhasil akan benilai satu
		$c = mysql_fetch_array($cek);
		$_SESSION[ 'userid' ] = $c[ 'userid' ];
		$_SESSION[ 'level' ] = $c[ 'level' ];
		if ($c[ 'level' ]== "admin" )
		{
			header( "location:homeadmin.php" );
		}
		else if ($c[ 'level' ]== "user" )
		{
			header( "location:homeuser.php" );
		}
		else if ($c[ 'level' ]== "mhs" )
		{
			header( "location:homemhs.php" );
		}
	}
	else
	{
		die( "password salah <a href=\"javascript:history.back()\"> kembali </a>" );
	}	
}
else if($op == "out" ) {
	unset($_SESSION[ 'userid' ]);
	unset($_SESSION[ 'level' ]);
	header( "location:index.php" );
}
?>
