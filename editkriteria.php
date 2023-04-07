<?php
//koneksi
session_start();
include ("koneksi.php");

//perintah untuk menampilkan hasil edit
$id_krit  = $_GET['id_kriteria'];
$kriteria = $koneksi->query("SELECT * FROM tab_kriteria WHERE id_kriteria = '$id_krit' ");

while ($row = $kriteria->fetch_row())
  {
    $nama_kriteria  = $row[1];
    $bobot = $row[2];
    $status = $row[3];
  }

 ?>

        <?php include 'include/header.php'  ?>

    <div class="container">

      <div class="row">
        <!--form kriteria-->
        <div class="col-lg-6 col-lg-offset-3">
          <div class="panel panel-default">
            <div class="panel-heading text-center">
              Edit Kriteria
            </div>

            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <form class="form" action="editk.php" method="post">
                    <div class="form-group">
                      <input class="form-control" type="text" name="id_kriteria" value= <?php echo $_GET['id_kriteria']; ?> readonly>
                    </div>
                    <div class="form-group">
                      <input class="form-control" type="text" name="nama_kriteria" value= <?php echo $nama_kriteria; ?> >
                    </div>
                    <div class="form-group">
                      <input class="form-control" type="text" name="bobot" value= <?php echo $bobot; ?> >
                    </div>
                    <div class="form-group">
                      <input class="form-control" type="text" name="status" value= <?php echo $status; ?> >
                    </div>
                    <div class="form-group">
                      <a href="kriteria.php"><button type="button" class="btn btn-danger">Batal</button></a>
                      <button type="submit" class="btn btn-success">Ubah</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--form kriteria-->

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
