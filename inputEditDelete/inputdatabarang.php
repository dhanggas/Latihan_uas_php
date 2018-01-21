<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Untitled Document</title>

</head>

<body>
	<form id="form1" name="form1" method="post" action="insert2.php">
		<table border="1">
			<tr><td>ID MEMBER</td><td>Nama MEMNER</td><td>ALAMAT</td></tr>
			<?php 
			$n=$_POST['jum'];
			for($i=1;$i<=$n;$i++)
			{
				echo " <tr><td><input type ='text' name ='idmember".$i."'></td>
					<td><input type ='text' name ='nama".$i."'></td>
					<td><input type ='text' name ='alamat".$i."'></td></tr>";
				}

				?>
			</table><br>
			<input type="hidden" name="jum" value ="<?php echo $n; ?>  " >
			<input type="submit" name="submit" value="submit" />

		</form>
		<p class="style1">&nbsp;</p>
		<p>&nbsp; </p>
	</body>
	</html>