<!DOCTYPE html>
<html>
    <head>
        <title>Toko Alat Lukis</title>
        <!--menghubungkan dengan file css-->
        <link rel="stylesheet" type="text/css" href="style2.css">
        <!--menghubungkan dengan file jquery-->
        <script type="text/javascript" scr="jquery.js"></script>
    </head>

    <body>
        <div class="content">
          <header>
            <h1 class="judul">TOKO ALAT LUKIS</h1>
          </header>

        <div class="menu">
            <ul>
               <li><a href="index.php?page=home">Home</a></li>
               <li><a href="index.php?page=data_barang">Data Barang</a></li>
               <li><a href="index.php?page=data_pelanggan">Data Pelanggan</a></li>
               <li><a href="index.php?page=data_transaksi">Data Transaksi</a></li>
            </ul>
        </div>
        
        <div class="badan">


       <?php
       if(isset($_GET['page'])){
        $page = $_GET['page'];
       
        switch ($page) {
            case 'home':
                include "halaman/home.php";
                break;
            case 'data_barang':
                include "halaman/data_barang.php";
                break;
            case 'data_pelanggan':
                include "halaman/data_pelanggan.php";
                break;
            case 'data_transaksi':
                include "halaman/data_transaksi.php";
                break;
                echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                break;            
        }
       }else{
        include "halaman/home.php";
       }
       
       ?>

    </div>
    </div>
   </body>
</html>