<?php
include "../Template-SPP/Header.php";
include "../Template-SPP/Navbar.php";
include "../Template-SPP/SidebarAdmin.php";
?>

<<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <div class="card-stats-title">FORM EDIT
        <?php 
            include "../koneksi.php";
            $id = $_GET['id_spp'];
            $query_mysql = mysqli_query($koneksi,"SELECT * FROM spp WHERE id_spp='$id' ")or die(mysql_error());
            $nomor = 1;
            while($data = mysqli_fetch_array($query_mysql)) {

            
        ?>
        <div class="card-body">
          <form method="POST" action="../update-aksiSPP.php">
            <div class="form-group">
              <label for="id_kelas">ID SPP</label>
              <input id="id_kelas" type="text" class="form-control" name="id_spp" value="<?php echo $data['id_spp']; ?>" readonly>
              <div class="invalid-feedback">
              </div>
            </div>

            <div class="form-group">
              <label for="nama_kelas">TAHUN</label>
              <input id="nama_kelas" type="text" class="form-control" name="tahun" value="<?php echo $data['tahun']; ?>" >
              <div class="invalid-feedback">
              </div>
            </div>

            <div class="form-group">
              <label for="nama_kelas">NOMINAL</label>
              <input id="nama_kelas" type="text" class="form-control" name="nominal" value="<?php echo $data['nominal']; ?>" >
              <div class="invalid-feedback">
              </div>
            </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      UBAH DATA SPP
                    </button>

                  </div>
                  <?php } ?>
            </form>
            <a href="DataSPP.php" class="btn btn-secondary btn-lg btn-block">KEMBALI</a>
        </div>
                  </div>
                </div>
              </div>
            </div>
                    
            
            
         
        
<?php include "../Template-SPP/Footer.php"; ?>