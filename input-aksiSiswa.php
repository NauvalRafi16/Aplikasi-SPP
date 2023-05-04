<?php
include "koneksi.php";
$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$id_kelas = $_POST['id_kelas'];
$alamat = $_POST['alamat'];
$no_tlp = $_POST['no_tlp'];
$id_spp = $_POST['id_spp'];

mysqli_query($koneksi, "INSERT INTO siswa VALUES ('$nisn','$nis','$nama','$id_kelas','$alamat','$no_tlp','$id_spp')");
header("location:Admin/CRUD-Siswa.php?pesan=input");
?>