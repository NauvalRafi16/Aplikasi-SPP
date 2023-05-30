<?php
include "../Template-SPP/Header.php";
include "../Template-SPP/Navbar.php";
include "../Template-SPP/SidebarPetugas.php";

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
                    <h4>Entri Transaksi</h4>
                    <a class='btn btn-primary' href="TambahTransaksi.php">Tambah</a>
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
                        <th>id pembayaran</th>
                        <th>Nama Petugas</th>
                        <th>Nama</th>
                        <th>Tanggal Bayar</th>
                        <th>Bulan di Bayar</th>
                        <th>Tahun di Bayar</th>
                        <th>nominal</th>
                        <th>jumlah bayar</th>
                        <th>ACTION</th>
                        
                      </tr>
                      <?php 
    include "../koneksi.php";
    $sql = mysqli_query($koneksi, 
    "SELECT pembayaran.id_pembayaran, petugas.nama_petugas, petugas.id_petugas, siswa.nisn, siswa.nama, pembayaran.tgl_bayar, pembayaran.bulan_dibayar, pembayaran.tahun_dibayar, spp.nominal, pembayaran.jumlah_bayar 
    FROM pembayaran, petugas, siswa, spp WHERE pembayaran.id_petugas= petugas.id_petugas AND pembayaran.nisn=siswa.nisn AND pembayaran.id_spp=spp.id_spp");

    while($data = mysqli_fetch_array($sql)){
        echo "<tr>";
        echo "<td>".$data['id_pembayaran']."</td>";
        echo "<td>".$data['nama_petugas']."</td>";
        echo "<td>".$data['nama']."</td>";
        echo "<td>".$data['tgl_bayar']."</td>";
        echo "<td>".$data['bulan_dibayar']."</td>";
        echo "<td>".$data['tahun_dibayar']."</td>";
        echo "<td>".$data['nominal']."</td>";
        echo "<td>".$data['jumlah_bayar']."</td>";
        echo"<td><a class='btn btn-primary' href='update_transaksi.php?id_pembayaran=".$data['id_pembayaran']."'>Ubah</a>
                 <a class='btn btn-danger' href='proses_hapus_transaksi.php?id_pembayaran=".$data ['id_pembayaran']."'>Hapus</a></td>";
        echo "</tr>";
    }
    ?>
    </table>
                  </div>
                </div>
              </div>
            </div>
           
                  
              
                    
            <?php include "../Template-SPP/Footer.php"; ?>