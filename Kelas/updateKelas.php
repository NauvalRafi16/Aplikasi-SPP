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
            $id = $_GET['id_kelas'];
            $query_mysql = mysqli_query($koneksi,"SELECT * FROM kelas WHERE id_kelas='$id' ")or die(mysql_error());
            $nomor = 1;
            while($data = mysqli_fetch_array($query_mysql)) {

            
        ?>
        <div class="card-body">
          <form method="POST" action="../update-aksi.php">
            <div class="form-group">
              <label for="id_kelas">ID KELAS</label>
              <input id="id_kelas" type="text" class="form-control" name="id_kelas" value="<?php echo $data['id_kelas']; ?>" readonly>
              <div class="invalid-feedback">
              </div>
            </div>

            <div class="form-group">
              <label for="nama_kelas">NAMA KELAS</label>
              <input id="nama_kelas" type="text" class="form-control" name="nama_kelas" value="<?php echo $data['nama_kelas']; ?>" >
              <div class="invalid-feedback">
              </div>
            </div>

            <div class="form-group">
                    <label>KOMPETENSI KEAHLIAN</label>
                    <select id="kompetensi_keahlian" class="form-control selectric" name="kompetensi_keahlian" value="<?php echo $data['kompetensi_keahlian']; ?>">
                      <option value="">~~ PILIH KOMPETENSI KEAHLIAN ~~</option>
                       <option value="REKAYASA PERANGKAT LUNAK">REKAYASA PERANGKAT LUNAK</option>
                       <option value="TEKNIK AUDIO VIDEO">TEKNIK AUDIO VIDEO</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      UBAH DATA KELAS
                    </button>

                  </div>
                  <?php } ?>
            </form>
            <a href="DataKelas.php" class="btn btn-secondary btn-lg btn-block">KEMBALI</a>
        </div>
                  </div>
                </div>
              </div>
            </div>
                    
            
            
         
        
<?php include "../Template-SPP/Footer.php"; ?>