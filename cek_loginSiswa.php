<?php
session_start();
include 'koneksi.php';
$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$login = mysqli_query($koneksi,"SELECT * FROM siswa where nisn ='$nisn' and nis ='$nis'");

$cek = mysqli_num_rows($login);
if($cek > 0){
    $data = mysqli_fetch_assoc($login);
        $_SESSION['nisn'] = $nisn;
        header("location:Siswa/Dashboard-Siswa.php"); 
    } else {
        header("location:Form-Login.php?pesan=gagal");
    } 
?>