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
              <div class="card-header"><h4>EDIT Transaksi</h4></div>

              <form action="../updatetransaksi.php" method="post">

              
                 
              <?php
 include "../koneksi.php";
 $id = $_GET['id_pembayaran'];
 $query_mysql = mysqli_query($koneksi, "SELECT pembayaran.id_pembayaran, petugas.id_petugas, petugas.nama_petugas, siswa.nisn, siswa.nama, pembayaran.tgl_bayar, pembayaran.bulan_dibayar, pembayaran.tahun_dibayar, spp.id_spp, spp.nominal, pembayaran.jumlah_bayar  FROM  pembayaran,petugas,siswa,spp WHERE pembayaran.id_petugas=petugas.id_petugas AND pembayaran.nisn=siswa.nisn AND pembayaran.id_spp=spp.id_spp AND pembayaran.id_pembayaran = '$id' ")or die(mysql_error());
 $nomor = 1;
 while($data = mysqli_fetch_array($query_mysql)){    
 ?>

    <form action="../update-aksi-transaksi.php" method="post">
    <div class="form-group">
    <label for="id_pembayaran">ID pembayaran</label>
    <input id="id_pembayaran" type="text" class="form-control" name="id_pembayaran" value="<?php echo $data['id_pembayaran'] ?>" >
    <div class="invalid-feedback">
</div>
</div>

<div class="form-group">
    <label for="id_petugas">Nama Petugas</label>
    <select class="form-control selectric" name="nama_petugas">
              <option value="<?php echo $data['id_petugas'] ?>"><?php echo $data['nama_petugas'] ?></option>
              <?php
              include "../koneksi.php";
              $sql = mysqli_query($koneksi, "SELECT * FROM petugas");
              while($data_petugas = mysqli_fetch_array($sql)){ ?>
              
              <option value="<?php echo $data_petugas['id_petugas']; ?> "><?php echo $data_petugas['nama_petugas']; ?><option>
            <?php } ?>
            </select>
          </div>

<div class="form-group">
    <label for="nisn">Nama</label>
    <select class="form-control selectric" name="nama">
              <option value="<?php echo $data['nisn'] ?>"><?php echo $data['nama'] ?></option>
              <?php
              include "../koneksi.php";
              $sql = mysqli_query($koneksi, "SELECT * FROM siswa");
              while($data_nama = mysqli_fetch_array($sql)){ ?>
              
              <option value="<?php echo $data_nama['nisn']; ?> "><?php echo $data_nama['nama']; ?><option>
            <?php } ?>
            </select>
          </div>

<div class="form-group">
    <label for="tgl_bayar">Tanggal Bayar</label>
    <input id="tgl_bayar" type="text" class="form-control" name="tgl_bayar" value="<?php echo $data['tgl_bayar']; ?>" >
    <div class="invalid-feedback">
</div>
</div>

<div class="form-group">
    <label for="bulan_dibayar">Bulan Dibayar</label>
    <input id="bulan_dibayar" type="text" class="form-control" name="bulan_dibayar" value="<?php echo $data['bulan_dibayar']; ?>" >
    <div class="invalid-feedback">
</div>
</div>

<div class="form-group">
    <label for="tahun_dibayar">Tahun Dibayar</label>
    <input id="tahun_dibayar" type="text" class="form-control" name="tahun_dibayar" value="<?php echo $data['tahun_dibayar']; ?>" >
    <div class="invalid-feedback">
</div>
</div>

<div class="form-group">
    <label for="id_spp">Nominal</label>
    <select class="form-control selectric" name="nominal">
              <option value="<?php echo $data['id_spp'] ?>"><?php echo $data['nominal'] ?></option>
              <?php
              include "../koneksi.php";
              $sql = mysqli_query($koneksi, "SELECT * FROM spp");
              while($data_spp = mysqli_fetch_array($sql)){ ?>
              
              <option value="<?php echo $data_spp['id_spp']; ?> "><?php echo $data_spp['nominal']; ?><option>
            <?php } ?>
            </select>
          </div>
   

<div class="form-group">
    <label for="jumlah_bayar">Jumlah Bayar</label>
    <input id="jumlah_bayar" type="text" class="form-control" name="jumlah_bayar" value="<?php echo $data['jumlah_bayar']; ?>" >
    <div class="invalid-feedback">
</div>
</div>
</select>
</div>

<div class="form-group">
  <button type="submit" class="btn btn-primary btn-lg btn-block">
    Edit Data  pembayaran
</button>
</div>
</form>
<?php } ?>
<a href="DataTransaksi.php" class="btn btn-primary btn-lg btn-block">Kembali</a>
</div>
</div>
</div>
</div>

<?php
include "../Template-SPP/Footer.php";
?>
            
                    
            
            
           

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