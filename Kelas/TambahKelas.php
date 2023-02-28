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
                  <div class="card-stats-title">CRUD DATA KELAS
              
                    <div class="card-stats-items">
                      <div class="card-stats-item">
                        <div class="card-stats-item-label">Total Siswa</div>
                        <div class="card-stats-item-count">36</div>
                      </div>

                      <div class="card-stats-item">
                        <div class="card-stats-item-label">Total kelas</div>
                        <div class="card-stats-item-count">3</div>
                        
                      </div>
                      <div class="card-stats-item">
                        <div class="card-stats-item-label">Total SPP</div>
                        <div class="card-stats-item-count">23</div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="card-icon shadow-primary bg-primary">
                    <i class="fas fa-archive"></i>
                  </div>
                  <div class="card-wrap">
                  <div class="card-header">
                    <h4>Data Transaksi Bulanan</h4>
                  </div>
                  <div class="card-body">
                    59
                  </div>
                </div>
              </div>
            </div>
            
            
         
            
                
         <form action="../input-aksi.php" method="post">
          
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>FORM TAMBAH</h4>
                    <a class='btn btn-primary'  href="DataKelas.php">KEMBALI</a>
                  <div class="card-header-action">
                  
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <td>ID KELAS</td>
                        <td><input type="text" name="id_kelas"></td>
                      </tr>
                      <tr>
                        <td>NAMA KELAS</td>
                        <td><input type="text" name="nama_kelas"></td>
                      </tr>
                      <tr>
                        <td>KOMPETISI KEAHLIAN</td>
                        <td><input type="text" name="kompetisi_keahlian"></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td><input class='btn btn-primary' type="submit" value="Simpan">
                            <a class='btn btn-danger' href="DataKelas.php">Kembali</a>
                    </td>
                      </tr>
    </table>
</form>
                  </div>
                </div>
              </div>
            </div>
           
                  
              
                    
            <?php include "../Template-SPP/Footer.php"; ?>