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
              <div class="card-header"><h4>Tambah Transaksi</h4></div>

              <form action="../input-aksiTransaksi.php" method="post">

              <div class="card-body">
              
              <div class="form-group">
                    <label for="id_pembayaran">ID Pembayaran</label>
                    <input id="id_pembayaran" type="text" class="form-control" name="id_pembayaran">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="id_petugas">Nama Petugas</label>
                    <select  class="form-control salectric" name="nama_petugas"  >
                    <option value="">---Nama Petugas---</option>
                      <?php 
                      include "../koneksi.php";
                      $sql = mysqli_query($koneksi, "SELECT * FROM petugas");
                      while($data = mysqli_fetch_array($sql)){ ?>
                      <option value="<?php echo $data['id_petugas'];?>"><?php echo $data['nama_petugas'];?></option>
                      <?php } ?>
                      </select>
                    </div>
                  

                    <div class="form-group">
                    <label for="nisn">Nama</label>
                    <select name="nama" class="form-control salectric"  >
                    <option value="">---Nama---</option>
                      <?php 
                      include "../koneksi.php";
                      $sql = mysqli_query($koneksi, "SELECT * FROM siswa");
                      while($data = mysqli_fetch_array($sql)){ ?>
                      <option value="<?php echo $data['nisn'];?>"><?php echo $data['nama'];?></option>
                      <?php } ?>
                      </select>
                    </div>

                    <div class="form-group">
                    <label for="tgl_bayar">Tanggal Bayar</label>
                    <input id="tgl_bayar" type="text" class="form-control" name="tgl_bayar">
                    <div class="invalid-feedback">
                    </div>
                    </div>

                    <div class="form-group">
                    <label for="bulan_dibayar">Bulan Bayar</label>
                    <input id="bulan_dibayar" type="text" class="form-control" name="bulan_dibayar">
                    <div class="invalid-feedback">
                    </div>
                      </div> 
                      
                      <div class="form-group">
                    <label for="tahun_dibayar">Tahun Dibayar</label>
                    <input id="tahun_dibayar" type="text" class="form-control" name="tahun_dibayar">
                    <div class="invalid-feedback">
                    </div>
                    </div>

                  

                  <div class="form-group">
                  <label for="id_spp">NOMINAL</label> 
                    <select class="form-control selectric" name="nominal">
                      <option value="">---Nominal---</option>
                      <?php 
                      include "../koneksi.php";
                      $sql = mysqli_query($koneksi, "SELECT * FROM spp");
                      while($data = mysqli_fetch_array($sql)){ ?>
                      <option value="<?php echo $data['id_spp']; ?> "><?php echo $data['nominal']; ?></option>
                      <?php } ?>
                    </select>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="jumlah_bayar">Jumlah Bayar</label>
                    <input id="jumlah_bayar" type="text" class="form-control" name="jumlah_bayar">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      SIMPAN DATA TRANSAKSI
                    </button>
                  </div>
                </form>
                    <a href="Entri-Transaksi.php?" class="btn btn-secondary btn-lg btn-block">KEMBALI</a>
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