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
                    <table class="table table-striped">
                      <tr>
                        <th>#</th>
                        <th>NISN</th>
                        <th>Nama Siswa</th>
                        <th>Tanggal Bayar</th>
                        <th>Jumlah Bayar</th>
                        <th>Petugas</th>
                      </tr>
                      <tr>
                        <td><a href="#">1</a></td>
                        <td>2122.10.336</td>
                        <td class="font-weight-600">Adnan Alif Faturrahman</td>
                        <td>01-1-2022</td>
                        <td>100.000</td>
                        <td><div class="badge badge-success">Petugas</div></td>
                      </tr>
                      <tr>
                        <td><a href="#">2</a></td>
                        <td>2122.10.337</td>
                        <td class="font-weight-600">Albretus Ichvanius Giharta</td>
                        <td>01-1-2022</td>
                        <td>100.000</td>
                        <td><div class="badge badge-success">Admin</div></td>
                      </tr>
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