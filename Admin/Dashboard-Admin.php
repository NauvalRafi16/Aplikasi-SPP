<?php
include"../Template-SPP/Header.php";
include"../Template-SPP/Navbar.php";
include"../Template-SPP/Sidebar.php";

?>
    
      
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <div class="card-stats-title">Data siswa 
                </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Siswa</h4>
                  </div>
                  <div class="card-body">
                    59
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
              <div class="card-stats">
                  <div class="card-stats-title">Data Kelas 
                  </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Kelas</h4>
                  </div>
                  <div class="card-body">
                    3
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
              <div class="card-stats">
                  <div class="card-stats-title">Data SPP
                  </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total SPP</h4>
                  </div>
                  <div class="card-body">
                    1
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="card card-statistic-2">
              <div class="card-stats">
                  <div class="card-stats-title">Data Transaksi Bulanan
                  </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Transaksi Bulanan</h4>
                  </div>
                  <div class="card-body">
                    13
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="card card-statistic-2">
              <div class="card-stats">
                  <div class="card-stats-title">Data Transaksi Tahunan
                  </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Transaksi Tahunan</h4>
                  </div>
                  <div class="card-body">
                    47
                  </div>
                </div>
              </div>
            </div>
          </div>
            
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="card">
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                  <h4>History Pembayaran</h4>
                  <table class="table table-striped">
                      <tr>
                        <th>id pembayaran</th>
                        <th>Nama Petugas</th>
                        <th>NISN</th>
                        <th>Tanggal Bayar</th>
                        <th>Bulan di Bayar</th>
                        <th>Tahun di Bayar</th>
                        <th>Id SPP</th>
                        <th>jumlah bayar</th>
                        
                      </tr>
                      <?php 
    include "../koneksi.php";
    $sql = mysqli_query($koneksi,"SELECT*FROM pembayaran");

    while($data = mysqli_fetch_array($sql)){
        echo "<tr>";
        echo "<td>".$data['id_pembayaran']."</td>";
        echo "<td>".$data['id_petugas']."</td>";
        echo "<td>".$data['nisn']."</td>";
        echo "<td>".$data['tgl_bayar']."</td>";
        echo "<td>".$data['bulan_dibayar']."</td>";
        echo "<td>".$data['tahun_dibayar']."</td>";
        echo "<td>".$data['id_spp']."</td>";
        echo "<td>".$data['jumlah_bayar']."</td>";
        echo "</tr>";
    }
    ?>
    </table>
                  </div>
                </div>
              </div>
            </div>
        
          </div>
        </section>
      </div>

  <?php
    include "../Template-SPP/Footer.php";
    ?>