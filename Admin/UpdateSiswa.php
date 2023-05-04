<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="../assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../assets/modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header"><h4>Tambah Petugas</h4></div>

              <form action="../updatesiswa.php" method="post">

              <div class="card-body">
                 
              <?php 
            include "../koneksi.php";
            $id = $_GET['nisn'];
            $query_mysql = mysqli_query($koneksi,"SELECT * FROM siswa WHERE nisn='$id'")or die(mysql_error());
            $nomor = 1;
            while($data = mysqli_fetch_array($query_mysql)) {

            
        ?>
        <div class="card-body">
          <form method="POST" action="../updatesiswa.php">
          <div class="form-group">
                    <label for="nisn">NISN</label>
                    <input id="id_kelas" type="text" class="form-control" name="nisn" value="<?php echo $data['nisn']; ?>" readonly>
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="nis">NIS</label>
                    <input id="nama_kelas" type="text" class="form-control" name="nis" value="<?php echo $data['nis']; ?>">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="nama">NAMA</label>
                    <input id="nama_kelas" type="text" class="form-control" name="nama" value="<?php echo $data['nama']; ?>">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="id_kelas">ID_KELAS</label>
                    <input id="nama_kelas" type="text" class="form-control" name="id_kelas" value="<?php echo $data['id_kelas']; ?>">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="alamat">ALAMAT</label>
                    <input id="nama_kelas" type="text" class="form-control" name="alamat" value="<?php echo $data['alamat']; ?>">
                    <div class="invalid-feedback">
                    </div>

                  </div>
                  <div class="form-group">
                    <label for="no_tlp">NO_TLP</label>
                    <input id="nama_kelas" type="text" class="form-control" name="no_tlp" value="<?php echo $data['no_tlp']; ?>">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="id_spp">ID_SPP</label>
                    <input id="nama_kelas" type="text" class="form-control" name="id_spp" value="<?php echo $data['id_spp']; ?>">
                    <div class="invalid-feedback">
                    </div>
                  </div>


                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      UBAH DATA SISWA
                    </button>

                  </div>
                  <?php } ?>
            </form>
            <a href="CRUD-Siswa.php?" class="btn btn-secondary btn-lg btn-block">KEMBALI</a>
        </div>
                  </div>
                </div>
              </div>
            </div>
                    
            
            
           

  <!-- General JS Scripts -->
  <script src="../assets/modules/jquery.min.js"></script>
  <script src="../assets/modules/popper.js"></script>
  <script src="../assets/modules/tooltip.js"></script>
  <script src="../assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="../assets/modules/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>