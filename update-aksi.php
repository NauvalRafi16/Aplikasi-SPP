<?php
include 'koneksi.php';
$id_kelas = $_POST['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];
$kompetisi_keahlian = $_POST['kompetisi_keahlian'];

mysql_query("UPDATE kelas SET id_kelas='$id_kelas', nama_kelas='$nama_kelas', kompetisi_kealian='$kompetisi_keahlian' WHERE id_kelas='$id_kelas'");
header("location:Kelas/DataKelas.php?pesan=update");

?>