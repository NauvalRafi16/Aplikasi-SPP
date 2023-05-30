<?php
include '../koneksi.php';
$id_pembayaran = $_GET['id_pembayaran'];
mysqli_query($koneksi,"DELETE FROM pembayaran WHERE id_pembayaran='$id_pembayaran'")or die(mysql_error());
header("location:Entri-Transaksi.php?pesan=hapus");
?>