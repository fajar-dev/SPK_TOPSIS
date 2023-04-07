<?php
//untuk koneksi ke database
session_start();
include ("koneksi.php");

//proses delete

$sql1     = "TRUNCATE TABLE tab_kriteria";
$koneksi->query($sql1);
$sql2     = "TRUNCATE TABLE tab_alternatif";
$koneksi->query($sql2);
$sql3     = "TRUNCATE TABLE tab_topsis";
$koneksi->query($sql3);
echo "<script>window.location.href = \"kriteria.php\" </script>";

?>
