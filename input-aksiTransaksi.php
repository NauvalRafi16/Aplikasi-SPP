<?php
include "koneksi.php";
$id_pembayaran = $_POST['id_pembayaran'];
$id_petugas = $_POST['nama_petugas'];
$nisn = $_POST['nama'];
$tgl_bayar = $_POST['tgl_bayar'];
$bulan_dibayar = $_POST['bulan_dibayar'];
$tahun_dibayar = $_POST['tahun_dibayar'];
$id_spp = $_POST['nominal'];
$jumlah_bayar = $_POST['jumlah_bayar'];

mysqli_query($koneksi, "INSERT INTO pembayaran VALUES ('$id_pembayaran','$id_petugas','$nisn','$tgl_bayar','$bulan_dibayar','$tahun_dibayar','$id_spp', '$jumlah_bayar')");
header("location:Admin/Entri-transaksi.php?pesan=input");

?>