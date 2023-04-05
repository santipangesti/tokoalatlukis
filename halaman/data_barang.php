<?php

require "koneksi.php";

$sql = "SELECT * FROM tb_barang"; 
$result = mysqli_query ($conn, $sql); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Barang</title>
</head>
<body>
<center>
  <div class="judul">
    <h1>Data Barang</h1>
  </div>
   <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>Id Barang</th>
      <th>Gambar</th>
      <th>Nama Barang</th>
      <th>Merk Barang</th>
      <th>Harga</th>
    </tr>
    <?php while ($row=mysqli_fetch_assoc($result)) : ?>
    <tr>
       
      <td><?= $row['id_barang'] ?></td>  
      <td><img src="halaman/image/<?= $row["gambar"]; ?>" width="150px">
      <td><?= $row['nama_barang'] ?></td>
      <td><?= $row['merk_barang'] ?></td>
      <td><?= $row['harga'] ?></td>
      
    </tr>
    <?php endwhile; ?>
 </table>
</center>
</body>
</html>

