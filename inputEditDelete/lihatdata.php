<html>
<body>

  <?php 
  include 'koneksi.php';
  $strSQL = "select * from member";
  $qry=mysql_query($strSQL) or die ("query salah");
  ?>                                               
  <table  border="1">
    <tr>
      <td>ID MEMBER</td>
      <td>NAMA MEMBER</td>
      <td>AlAMAT</td>
      <td>EDIT</td>
      <td>DELETE</td>
    </tr>
    
    <?php 
    while($row=mysql_fetch_array ($qry))
    { 
      echo "<tr>";
      echo "<td>".$row["idmember"]."</td>";
      echo "<td>".$row["nama"]."</td>";
      echo "<td>".$row["alamat"]."</td>";
      echo "<td><a href=edit.php?idmember=".$row["idmember"].">Edit</a></td>";
      echo "<td><a href=hapus.php?idmember=".$row["idmember"].">Hapus</a></td>";
      echo "</tr>";
    }
    ?>
  </table>
  <form action="hasilcari.php" method="post">
    <p>
      <input name="txtcari" type="text"> 
    Cari berdasarkan Nama</p>
    <p>
      <label>
        <input type="submit" name="Submit" value="Cari Data">
      </label>
    </p>
  </form>
  <a href="tambahdata.php">Tambah data</a>
</body>
</html>
