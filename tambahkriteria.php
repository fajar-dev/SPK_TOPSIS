   <?php
session_start();
include ("koneksi.php");
    if (isset($_POST['simpan'])) {
      $id_krit  = $_POST['id_krit'];
      $kriteria = $_POST['nm_krit'];
      $bobot    = $_POST['bobot'];
      $status    = $_POST['status'];

        $masuk = "INSERT INTO tab_kriteria VALUES ('".$id_krit."','".$kriteria."','".$bobot."','".$status."')";
        $buat  = $koneksi->query($masuk);

        echo "<script>alert('Input Data Berhasil') </script>";
        echo "<script>window.location.href = \"kriteria.php\" </script>";
    }

     ?>