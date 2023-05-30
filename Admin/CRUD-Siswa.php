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
                    <h4>Data Siswa</h4>
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
                    <h4>Tambah Data Siswa</h4>
                    <a class='btn btn-primary' href="TambahSiswa.php">Tambah</a>
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
                        <th>nisn</th>
                        <th>nis</th>
                        <th>nama</th>
                        <th>nama_kelas</th>
                        <th>alamat</th>
                        <th>no_tlp</th>
                        <th>nominal</th>
                        <th>ACTION</th>
                        
                      </tr>
                      <?php 
    include "../koneksi.php";
    $sql = mysqli_query($koneksi, 
    "SELECT siswa.nisn, siswa.nis, siswa.nama, kelas.nama_kelas, siswa.alamat, siswa.no_tlp, spp.nominal 
    FROM siswa,kelas,spp WHERE siswa.id_kelas = kelas.id_kelas AND siswa.id_spp = spp.id_spp");

    while($data = mysqli_fetch_array($sql)){
        echo "<tr>";
        echo "<td>".$data['nisn']."</td>";
        echo "<td>".$data['nis']."</td>";
        echo "<td>".$data['nama']."</td>";
        echo "<td>".$data['nama_kelas']."</td>";
        echo "<td>".$data['alamat']."</td>";
        echo "<td>".$data['no_tlp']."</td>";
        echo "<td>".$data['nominal']."</td>";
        echo "<td>
              <a  class='btn btn-primary' href='UpdateSiswa.php?nisn=".$data['nisn']."'>Ubah</a>
               <a class='btn btn-danger'  href='HapusSiswa.php?nisn=".$data['nisn']."'>Hapus</a></td>";
        echo "</tr>";
    }
    ?>
    </table>
                  </div>
                </div>
              </div>
            </div>
           
                  
              
                    
            <?php include "../Template-SPP/Footer.php"; ?>