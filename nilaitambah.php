<?php
include ("koneksi.php");
$id_alter   = $_POST['id_alter'];
$id_kriteria   = $_POST['id_kriteria'];
$nilai = $_POST['nilai'];
$count = count($id_kriteria);

  $query_parts = array();
    for($x=0; $x<count($id_kriteria); $x++){
        $query_parts[] = "('" . $id_alter . "', '" . $id_kriteria[$x] . "', '" . $nilai[$x] . "')";
    }

    $query = implode(',', $query_parts);

    $masuk = "INSERT INTO tab_topsis VALUES $query";
    $buat  = $koneksi->query($masuk);
    // print_r($masuk);die();

  echo "<script>alert('Input Nilai Berhasil') </script>";
  echo "<script>window.location.href = \"alternatif.php\" </script>";

?>