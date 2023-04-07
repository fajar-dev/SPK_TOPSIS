<?php
//koneksi
error_reporting(0);
session_start();
include ("koneksi.php");

//pemberian kode id secara otomatis
$carikode = $koneksi->query("SELECT id_kriteria FROM tab_kriteria") or die(mysqli_error());
$datakode = $carikode->fetch_array();
$jumlah_data = mysqli_num_rows($carikode);

if ($datakode) {
  $nilaikode = substr($jumlah_data[0], 1);
  $kode = (int) $nilaikode;
  $kode = $jumlah_data + 1;
  $kode_otomatis = str_pad($kode, 0, STR_PAD_LEFT);
} else {
  $kode_otomatis = "1";
}

 ?>
        <?php include 'include/header.php'  ?>

    <div class="container">

      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    Tambah Kriteria
                </div>

                <div class="panel-body">
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <!--form kriteria-->
                      <form class="form" action="tambahkriteria.php" method="post">
                        <div class="form-group">
                          <input class="form-control" type="text" name="id_krit" value="<?php echo $kode_otomatis; ?>" readonly>
                        </div>
                        <div class="form-group">
                          <input class="form-control" type="text" name="nm_krit" placeholder="Nama Kriteria">
                        </div>
                        <div class="form-group">
                          <input class="form-control" type="text" name="bobot" placeholder="Bobot">
                        </div>
                        <div class="form-group">
                          <select class="form-control" name="status" id="exampleFormControlSelect1">
                            <option value="Cost">Cost</option>
                            <option value="Benefit">Benefit</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <input class="btn btn-success" type="submit" name="simpan" value="Tambah">
                        </div>
                      </form>
                      <!--form kriteria-->
                    </div>
                </div>
            </div>
        </div>
      </div>

    </div>

 

   
    <script src="tampilan/js/bootstrap.min.js">
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

  </body>
</html>
