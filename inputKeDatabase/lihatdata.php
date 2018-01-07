<html>
<body>

  <?php 
  include 'koneksi.php';
  $strSQL = "select * from tbinput";
  $qry=mysql_query($strSQL) or die ("query salah");
  ?>                                               
  <table  border="1">
    <tr>
      <td>nim</td>
      <td>nama</td>
      <td>jumlah</td>
      <td>edit</td>
      <td>delete</td>
    </tr>
    
    <?php 
    while($row=mysql_fetch_array ($qry))
    { 
      echo "<tr>";
      echo "<td>".$row["nim"]."</td>";
      echo "<td>".$row["nama"]."</td>";
      echo "<td>".$row["jumlah"]."</td>";
      echo "<td><a href=edit.php?nim=".$row["nim"].">Edit</a></td>";
      echo "<td><a href=hapus.php?nim=".$row["nim"].">Hapus</a></td>";
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
</body>
</html>
