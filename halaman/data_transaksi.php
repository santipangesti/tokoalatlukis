<?php

require "koneksi.php";

$sql = "SELECT * FROM tb_transaksi"; 
$result = mysqli_query ($conn, $sql); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Transaksi</title>
</head>
<body>
<center>
  <div class="judul">
    <h1>Data transaksi</h1>
  </div>
   <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>Id Transaksi</th>
      <th>Id Pelanggan</th>
      <th>Id Barang</th>
      <th>Harga Sekarang</th>
      <th>Jumlah</th>
      <th>Total Pembayaran</th>
    </tr>
    <?php while ($row=mysqli_fetch_assoc($result)) : $total_pembayaran = $row['jumlah']*$row ['harga_sekarang']
    ?>
    <tr>
       
      <td><?= $row['id_transaksi'] ?></td>  
      <td><?= $row['id_pelanggan'] ?></td>
      <td><?= $row['id_barang'] ?></td>
      <td><?= $row['harga_sekarang'] ?></td>
      <td><?= $row['jumlah'] ?></td>
      <td><?= $total_pembayaran ?></td>
      
    </tr>
    <?php endwhile; ?>
 </table>
</center>
</body>
</html>

