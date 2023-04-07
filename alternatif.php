<?php
//koneksi
session_start();
include ("koneksi.php");

 ?>
        <!-- Navigation-->
<?php include 'include/header.php'  ?>

    <div class="container">

      <div class="row">
        <div class="col-lg-12">
          <div class="d-flex justify-content-between align-items-center">
            <h2 class="font-weight-bold mb-5">Alternatif</h2>
            <a href="alternatiftambah.php" class="btn btn-success">+ Tambah Alternatif</a>
          </div>
            <div class="panel panel-default">

                <div class="panel-body">
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div class="">
                        <!--tabel alternatif-->
                        <table class="table table-striped table-bordered table-hover">
                          <thead >
                            <tr>
                              <th>ID Alternatif</th>
                              <th>Nama Alternatif</th>
                              <th colspan="2">Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $sql = $koneksi->query('SELECT * FROM tab_alternatif');
                            while ($row = $sql->fetch_array()) {
                            ?>
                            <tr>
                              <td><?php echo $row[0] ?></td>
                              <td><?php echo $row[1] ?></td>
                              <td align="center"><a href="editalternatif.php?id_alternatif=<?php echo $row['id_alternatif'] ?>"><i class="fa fa-edit fa-fw text-warning"></i> </td>
                              <td align="center"><a href="hapusalternatif.php?id_alternatif=<?php echo $row['id_alternatif'] ?>"><i class="fa fa-trash fa-fw text-danger"></i> </td>
                            </tr>

                            <?php } ?>
                          </tbody>
                        </table>
                        <!--tabel alternatif-->
                      </div>
                    </div>
                </div>
                <!--panel body-->
            </div>
        </div>
      </div>

    </div>

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
