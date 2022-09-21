<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
<h2>List Barang</h2>
<hr>
<div class="table-wrapper">
<table class="table">
    <tr><th>ID</th><th>NAMA</th><th>HARGA</th><th>STOK</th></tr>
    <?php
    include 'koneksi.php';
    $barang = mysqli_query($koneksi, "SELECT * from barang");
    $no=1;
    foreach ($barang as $b){
        echo "<tr>
            <td>".$b['id_barang']."</td>
            <td>".$b['nama_barang']."</td>
            <td>".$b['harga_barang']."</td>
            <td>".$b['stok_barang']."</td>
            </tr>";
        $no++;
    }
    ?>
</table>
</div>
<hr>
<a href="menu.php">Kembali Ke Menu</a>
    </div>
<style>
.container {
          
          float: center;
          padding: 50px;
          background-color: white;
          height: 500px;
          width: 35%;
          margin-top: 100px;
          margin-left: 450px;
          border: solid black;
          
        }
        body{
            background-image: url("gambar1.jpg");
            background-size: cover;
        }
        .table{
            box-shadow: 0 1px 3px rgba(0,0,0,0.2);
             display: block;
             
        }
        th{
            padding: 16px 42px;
            display: table-cell;

            
        }
        td{
            padding: 16px 42px;
        }
    h2{
        margin-top: -5px;
        
    }
    
    
</style>

</body>
</html>
