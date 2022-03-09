<?php
session_start();
$nik            =$_SESSION['nik'];
$nama_lengkap   =$_SESSION['nama_lengkap'];
$tanggal    =$_POST['tanggal'];
$jam        =$_POST['jam'];
$lokasi     =$_POST['lokasi'];
$suhu       =$_POST['suhu'];

$format ="\n$nik|$nama_lengkap|$tanggal|$jam|$lokasi|$suhu";

// kita buka file catatan.txt
$file = fopen('catatan.txt','a');
fwrite($file,$format);

// tutup file
fclose($file);

?>
<script type="text/javascript">
    alert('Data Catatan Perjalanan Berhasil Disimpan');
    window.location.assign('catatan_perjalanan.php');
</script>