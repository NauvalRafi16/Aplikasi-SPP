<?php
include "koneksi.php";
$id_spp = $_POST['id_spp'];
$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];

mysqli_query($koneksi, "INSERT INTO spp VALUES ('$id_spp','$tahun','$nominal')");
header("location:Admin/CRUD-SPP.php?pesan=input");
?>