<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<p>Input ke database</p>
<form id="form1" name="form1" method="post" action="hasilinputdatabase.php">
  <label>Nama
  <input name="txtnm" type="text" id="txtnm" />
  </label>
  <p>
    <label>Kelas
    <select name="txtkelas" id="txtkelas">
      <option value="Malam">Malam</option>
      <option value="Pagi">Pagi</option>
    </select>
    </label>
  </p>
  <p>Jenis Kelamin : </p>
  <p>
    <label>
    <input type="radio" name="rdojenis" value="Laki-laki" />
Laki-laki</label>
    <br />
    <label>
    <input type="radio" name="rdojenis" value="Perempuan" />
Perempuan</label>
  </p>
  <p>
    <label>Alamat
    <textarea name="txtalamat" id="txtalamat"></textarea>
    </label>
    <br />
  </p>
  <p>
    <label>
    <input type="submit" name="Submit" value="Simpan" />
    </label>
  </p>
</form>
<p>&nbsp;</p>
</body>
</html>
