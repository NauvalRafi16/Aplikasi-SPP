<?php
$koneksi = mysqli_connect("localhost","root","","aplikasi_spp");
if (mysqli_connect_error()){
    echo "Koneksi database gagal : ".mysqli_connect_error();
}
?>
