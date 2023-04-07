<?php
//koneksi
error_reporting(0);
session_start();
$id_alter   = $_GET['id_alternatif'];
include ("koneksi.php");
 ?>

        <!-- Navigation-->
        <?php include 'include/header.php'  ?>

    <div class="container">

      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    Tambah Nilai
                </div>

                <div class="panel-body">
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div class="">
                        <!--form alternatif-->
                        <form class="form"action="nilaitambah.php"  method="post">
                        <input type="hidden" name="id_alter" value="<?php echo $id_alter ?>">
                          <?php  $sql = $koneksi->query('SELECT * FROM tab_kriteria');
                            while ($row = $sql->fetch_array()) {
                              // print_r($row);
                            ?>
                              <div class="form-group">
                                <input type="hidden" name="id_kriteria[]" value="<?php echo $row['id_kriteria'] ?>">
                                <input class="form-control" type="text" name="nilai[]" placeholder="Nilai Kriteria <?php echo $row['nama_kriteria'] ?>">
                              </div>
                            <?php } ?>
                          <div class="form-group">
                            <input class="btn btn-success" type="submit" name="simpan" value="Simpan">
                          </div>
                        </form>
                        <!--form alternatif-->
                      </div>
                    </div>
                </div>
                <!--panel body-->
            </div>
          </div>
        </div>

    </div>

    <?php



     ?>


    <!--plugin-->
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
