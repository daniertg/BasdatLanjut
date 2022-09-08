<?php
session_start();
include 'koneksi.php';
$username  = $_POST['username'];
$password  = $_POST['password'];
$query = mysqli_query($koneksi, "SELECT * FROM admin_toko where username='$username'and password='$password'");
$cek = mysqli_num_rows($query);
if ($cek = 1){
    echo "berhasil login";
}else{
    echo "data tidak di temukan";
}

?>
