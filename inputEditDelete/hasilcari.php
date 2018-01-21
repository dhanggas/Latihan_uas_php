<html>
<body>
  <?php 
  $vcari=$_POST['txtcari'];
  include 'koneksi.php';

  $strSQL="select * from tbinput where nama like '%$vcari%' ";
  $qry=mysql_query($strSQL) or die ("query salah");
  ?>
  <table  border="1">
    <tr>
      <td>nim</td>
      <td>nama</td>
      <td>jumlah</td>
    </tr>
    <?php 
    while($row=mysql_fetch_array ($qry))
    { 
      echo "<tr>";
      echo "<td>".$row["nim"]."</td>";
      echo "<td>".$row["nama"]."</td>";
      echo "<td>".$row["jumlah"]."</td>";
      echo "</tr>";
    }
    ?>
  </table>
</body>
</html>
