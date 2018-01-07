<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
mysql_connect ( "localhost","root","" ) or die ( "tidak bisa terkoneksi" );
mysql_select_db ( "dbdaftar" );
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

</body>
</html>
