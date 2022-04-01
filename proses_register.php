<?php
session_start();
error_reporting(0);
$nik             = $_POST['nik'];
$nama_lengkap    = $_POST['nama_lengkap'];

if (strlen($nik) != 16){
    $_SESSION['error'] = 'NIK Harus 16 Angka';
    header('Location:register.php');
    die;    
}


// cek apakah nik sudah terdaftar atau belum
$data = file("config.txt", FILE_IGNORE_NEW_LINES);
foreach($data as $value){
    $pisah = explode("|",$value);
    if ($nik==$pisah['0']) {
        $cek = true;
    }
}

if ($cek){ //jika nik sudah terdaftar

    $_SESSION['error'] = "NIK sudah di gunakan";
    header("Location: register.php");
    die;
?>

<?php } else{ //jika data tidak ditemukan

     //buat format penyimpanan ke txt config
     $format = "\n$nik|$nama_lengkap";

     //buka dulu file config.txt
     $file = fopen('config.txt','a');
     fwrite($file, $format);

     //tututp file
     fclose($file);


   $_SESSION['success'] = "Pendaftaran Berhasil Dilakukan";
   header("Location: index.php");
} ?>
   