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

              <form action="../updatepetugas.php" method="post">

              <div class="card-body">
                 
              <?php 
            include "../koneksi.php";
            $id_petugas = $_GET['id_petugas'];
            $query_mysql = mysqli_query($koneksi,"SELECT * FROM petugas WHERE id_petugas='$id_petugas'")or die(mysql_error());
            $nomor = 1;
            while($data = mysqli_fetch_array($query_mysql)) {

            
        ?>
        <div class="card-body">
          <form method="POST" action="../updatepetugas.php">
            <div class="form-group">
              <label for="id_petugas">ID Petugas</label>
              <input id_petugas="id_petugas" type="text" class="form-control" name="id_petugas" value="<?php echo $data['id_petugas']; ?>" readonly>
              <div class="invalid-feedback">
              </div>
            </div>

            <div class="form-group">
              <label for="username">Username</label>
              <input id_petugas="username" type="text" class="form-control" name="username" value="<?php echo $data['username']; ?>" >
              <div class="invalid-feedback">
              </div>
            </div>

            <div class="form-group">
                    <label for="nama_kelas">Password</label>
                    <input id="nama_kelas" type="password" class="form-control" name="password" value="<?php echo $data['password']; ?>">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="nama_kelas">Nama Petugas</label>
                    <input id="nama_kelas" type="text" class="form-control" name="nama_petugas" value="<?php echo $data['nama_petugas']; ?>">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                    <label>LEVEL</label>
                    <select class="form-control selectric" name="level">
                      <option value="<?php echo $data['level']?>"><?php echo $data['level']?></option>
                       <option value="admin">Admin</option>
                       <option value="petugas">Petugas</option>
                    </select>
                  </div>


                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      UBAH DATA Petugas
                    </button>

                  </div>
                  <?php } ?>
            </form>
            <a href="CRUD-Petugas.php?" class="btn btn-secondary btn-lg btn-block">KEMBALI</a>
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