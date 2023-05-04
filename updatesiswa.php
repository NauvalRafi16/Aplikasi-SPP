<?php
include 'koneksi.php';
$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$id_kelas = $_POST['id_kelas'];
$alamat = $_POST['alamat'];
$no_tlp = $_POST['no_tlp'];
$id_spp = $_POST['id_spp'];

mysqli_query($koneksi,"UPDATE siswa SET nis='$nis', nama='$nama', id_kelas='$id_kelas', alamat='$alamat', 
no_tlp='$no_tlp', id_spp='$id_spp' WHERE nisn='$nisn'");

header("location:Admin/CRUD-Siswa.php?pesan=update");

?>