<?php
include "koneksi.php";
$id_kelas = $_POST['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];
$kompetisi_keahlian = $_POST['kompetisi_keahlian'];

mysqli_query($koneksi, "INSERT INTO kelas VALUES ('$id_kelas','$nama_kelas','$kompetisi_keahlian')");
header("location:Kelas/DataKelas.php?pesan=input");
?>