<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<p>LATIHAN</p>
<form id="form1" name="form1" method="post" action="hasil4.php">
  <label>ID satuan
  <input name="txtid" type="text" id="txtid" />
  </label>
  <p>
    <label>Satuan  	
    <select name="txtsatuan" size="1" id="txtsatuan">
      <option>PCS</option>
      <option selected="selected">Buku</option>
      <option>Lusin</option>
      <option>Buah</option>
      <option>Ikat</option>
    </select>
    </label>
  </p>
  <p>
    <label>
    <input type="radio" name="rdokelas" value="malam" />
Malam</label>
    <br />
    <label>
    <input type="radio" name="rdokelas" value="pagi" />
Pagi</label>
    <br />
    <label>
    <input type="radio" name="rdokelas" value="sift" />
Sift</label>
  </p>
  <p>
    <label>Alamat<br />
    <textarea name="txtalamat" cols="30" id="txtalamat"></textarea>
    </label>
    <br />
  </p>
  <p>
    <label>
    <input type="submit" name="Submit" value="INPUT" />
    </label>
    <label>
    <input type="reset" name="Submit2" value="RESET" />
    </label>
  </p>
</form>
<p>&nbsp; </p>
</body>
</html>
