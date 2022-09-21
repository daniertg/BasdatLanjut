<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form input-barang 

$id_barang=$_POST["id_barang"];
$harga_barang=$_POST["harga_barang"];
$stok_barang=$_POST["stok_barang"];

$sql="INSERT INTO jual_barang VALUES () where id_barang = '$id_barang'";


$hasil=mysqli_query($koneksi,$sql);


  if ($hasil) {
	echo "Berhasil update data";
  header('Location:tampil.php');
	exit;
  }
else {
	echo "Gagal update data";
	exit;
}  
mysqli_close($connect)
?>