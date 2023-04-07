<?php
//untuk koneksi ke database
session_start();
include ("koneksi.php");

//proses edit
$id_alter   = $_POST['id_alternatif'];
$alternatif = $_POST['nama_alternatif'];


$query = "UPDATE tab_alternatif SET nama_alternatif ='$alternatif' WHERE id_alternatif = '$id_alter' ";
$result = mysqli_query($koneksi, $query);
if ($result) {
  
  echo "<script>alert('Ubah Data Dengan ID = ".$id_alter." Berhasil') </script>";
  echo "<script>window.location.href = \"alternatif.php\" </script>";
}else {
  
  echo "<script>alert Gagal </script>";
}


?>
