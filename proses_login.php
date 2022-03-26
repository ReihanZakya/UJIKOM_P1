<?php
session_start();
$nik            = $_POST['nik'];
$nama_lengkap   = $_POST['nama_lengkap'];

$format   = "$nik|$nama_lengkap";
$file     = file('config.txt', FILE_IGNORE_NEW_LINES);  
if(in_array($format,$file)){    //jika data ditemukan
    $_SESSION['nik']    = $nik;
    $_SESSION['nama_lengkap']    = $nama_lengkap;

    header("Location:user.php");
    die;
}else{  //jika data tidak ditemukan 
    $_SESSION['error'] = 'NIK Tidak Ditemukan';
    header('Location:index.php');
    die;
    ?>
 <?php } ?>