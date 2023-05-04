<?php
include "../Template-SPP/Header.php";
include "../Template-SPP/Navbar.php";
include "../Template-SPP/Sidebar.php";
?>

<<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <div class="card-stats-title">CRUD DATA PETUGAS
              
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
            
            
         
            
                
         
          
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>Data Transaksi Pembayaran SPP</h4>
                    <a class='btn btn-primary'  href="TambahPetugas.php">Tambah</a>
                    <?php 
                    if (isset($_GET['pesan'])) {
                      $pesan = $_GET['pesan'];
                      if ($pesan == "input") {
                        echo "<div class='m1-3'><b>database berhasil di input.</b></div>";
                      }else if ($pesan == "update") {
                        echo "<div class='m1-3 '><b>database berhasil di update.</b></div>";
                      }else if ($pesan == "hapus") {
                      echo "data berhasil di hapus.";
                    }
                  }
                  ?>
                  <div class="card-header-action">
  
                  </div>
                  
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>Id Petugas</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Nama Petugas</th>
                        <th>Level</th>
                        <th>ACTION</th>
                        
                      </tr>
                      <?php 
    include "../koneksi.php";
    $sql = mysqli_query($koneksi, "SELECT * FROM petugas");

    while($data = mysqli_fetch_array($sql)){
        echo "<tr>";
        echo "<td>".$data['id_petugas']."</td>";
        echo "<td>".$data['username']."</td>";
        echo "<td>".$data['password']."</td>";
        echo "<td>".$data['nama_petugas']."</td>";
        echo "<td>".$data['level']."</td>";
        echo "<td>
        <a  class='btn btn-primary' href='UpdatePetugas.php?id_petugas=".$data['id_petugas']."'>Ubah</a>
        <a class='btn btn-danger'  href='HapusPetugas.php?id_petugas=".$data['id_petugas']."'>Hapus</a></td>";
        echo "</tr>";
    }
    ?>
    </table>
                  </div>
                </div>
              </div>
            </div>
           
                  
              
                    
            <?php include "../Template-SPP/Footer.php"; ?>