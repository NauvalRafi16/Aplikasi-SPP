<?php
include "../Template-SPP/Header.php";
include "../Template-SPP/Navbar.php";
include "../Template-SPP/Sidebar.php";
?>

<<!-- Main Content -->
<div class="main-content">
  <section class="section">
  <div class="row">
           <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Data </h4>
                    <div class="card-header-action">
                  </div>
                </div>
            </div>
        </div>
    </div>

          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header">
                    <h4>Tambah Data SPP</h4>
                    <a class='btn btn-primary' href="TambahSPP.php">Tambah</a>
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
                        <th>ID SPP</th>
                        <th>TAHUN</th>
                        <th>NOMINAL</th>
                        <th>ACTION</th>
                        
                      </tr>
                      <?php 
    include "../koneksi.php";
    $sql = mysqli_query($koneksi, "SELECT * FROM spp");

    while($data = mysqli_fetch_array($sql)){
        echo "<tr>";
        echo "<td>".$data['id_spp']."</td>";
        echo "<td>".$data['tahun']."</td>";
        echo "<td>".$data['nominal']."</td>";
        echo "<td><a  class='btn btn-primary' href='updatespp.php?id_spp=".$data['id_spp']."'>Ubah</a>
               <a class='btn btn-danger'  href='hapusspp.php?id_spp=".$data['id_spp']."'>Hapus</a></td>";
        echo "</tr>";
    }
    ?>
    </table>
                  </div>
                </div>
              </div>
            </div>
           
                  
              
                    
            <?php include "../Template-SPP/Footer.php"; ?>