<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form input-barang 
$id_barang=$_POST["id_barang"];
$nama_barang=$_POST["nama_barang"];
$harga_barang=$_POST["harga_barang"];
$stok_barang=$_POST["stok_barang"];

//Query input menginput data kedalam tabel barang
  $sql="insert into barang (id_barang,nama,harga,stok) values
		('$id_barang','$nama_barang','$harga_barang','$stok_barang')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "Berhasil insert data";
    header('Location:tampil.php');
	exit;
  }
else {
	echo "Gagal insert data";
	exit;
}  

?>