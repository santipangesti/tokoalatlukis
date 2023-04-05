<?php

require "koneksi.php";

$sql = "SELECT * FROM tb_pelanggan"; 
$result = mysqli_query ($conn, $sql); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Pelanggan</title>
</head>
<body>
<center>
  <div class="judul">
    <h1>Data Pelanggan</h1>
  </div>
   <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>Id Pelanggan</th>
      <th>Nama Pelanggan</th>
      <th>Alamat</th>
      <th>Email</th>
    </tr>
    <?php while ($row=mysqli_fetch_assoc($result)) : ?>
    <tr>
       
      <td><?= $row['id_pelanggan'] ?></td>  
      <td><?= $row['nama_pelanggan'] ?></td>
      <td><?= $row['alamat'] ?></td>
      <td><?= $row['email'] ?></td>
      
    </tr>
    <?php endwhile; ?>
 </table>
</center>
</body>
</html>

