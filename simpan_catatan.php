<?php
session_start();

$year = $_POST['tanggal'];
$getOnlyear = date('Y', strtotime($year)); // TAHUN
$dateNow = date('Y');
if ($getOnlyear != $dateNow) {
   $_SESSION['error'] = "Tahun tidak sesuai";
    header("Location: user.php?url=tulis_catatan");
    die;
}

$nik            =$_SESSION['nik'];
$nama_lengkap   =$_SESSION['nama_lengkap'];
$tanggal    =$_POST['tanggal'];
$jam        =$_POST['jam'];
$lokasi     =$_POST['lokasi'];
$suhu       =$_POST['suhu'];
$id_catatan = rand(0, 100000);

$format ="\n$id_catatan|$nik|$nama_lengkap|$tanggal|$jam|$lokasi|$suhu";

// kita buka file catatan.txt
$file = fopen('catatan.txt','a');
fwrite($file,$format);

// tutup file
fclose($file);

$_SESSION['success'] = 'Data Perjalanan Berhasil Disimpan';
header('Location: user.php?url=catatan_perjalanan');
?>
