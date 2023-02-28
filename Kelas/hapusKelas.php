<?php
include '../koneksi.php';
$id_kelas = $_GET['id_kelas'];
mysqli_query($koneksi,"DELETE FROM kelas WHERE id_kelas='$id_kelas'")or die(mysql_error());
header("location:DataKelas.php?pesan=hapus");
?>