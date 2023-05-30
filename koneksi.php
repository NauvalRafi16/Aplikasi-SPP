<?php
$koneksi = mysqli_connect("localhost","root","","nopal_spp");
if (mysqli_connect_error()){
    echo "Koneksi database gagal : ".mysqli_connect_error();
}
?>
