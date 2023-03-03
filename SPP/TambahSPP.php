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
                  <div class="card-stats-title">FORM TAMBAH

              
                    
            
            <br>
         
            
                
         <form action="../input-aksiSPP.php" method="post">
          
          
                  
                  
                  <div class="form-group">
                    <label for="id_kelas">ID SPP</label>
                    <input id="id_kelas" type="text" class="form-control" name="id_spp">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="nama_kelas">TAHUN</label>
                    <input id="nama_kelas" type="text" class="form-control" name="tahun">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="nama_kelas">NOMINAL</label>
                    <input id="nama_kelas" type="text" class="form-control" name="nominal">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      SIMPAN DATA KELAS
                    </button>

                  </div>
</form>
<a href="DataKelas.php" class="btn btn-secondary btn-lg btn-block">KEMBALI</a>
                  </div>
                </div>
              </div>
            </div>
           
                  
              
                    
            <?php include "../Template-SPP/Footer.php"; ?>