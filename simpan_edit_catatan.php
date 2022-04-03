<?php
session_start();

$year = $_POST['tanggal'];
$getOnlyear = date('Y', strtotime($year)); // TAHUN
$dateNow = date('Y');
if ($getOnlyear < $dateNow) {
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
$id_catatan =$_POST['id_catatan'];

$format ="$id_catatan|$nik|$nama_lengkap|$tanggal|$jam|$lokasi|$suhu";

$no = 0;
$data = file('catatan.txt', FILE_IGNORE_NEW_LINES);
foreach($data as $value){
    $no++;
    $pisah = explode("|", $value);
    if($pisah['0']==$id_catatan){
        $line = $no-1; //mencari urutan baris ke berapa
    }

}

$data[$line] = $format;
$data = implode("\n", $data);
file_put_contents('catatan.txt', $data);

$_SESSION['success'] = 'Data berhasil diedit';
header('Location: user.php?url=catatan_perjalanan');
?>