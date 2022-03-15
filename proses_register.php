<?php
error_reporting(0);
$nik             = $_POST['nik'];
$nama_lengkap    = $_POST['nama_lengkap'];

if (strlen($nik) < 16){
    echo "<script> 
    alert('!! Maaf NIK Anda Kurang Dari 16 Angka !!');
    window.location.assign('register.php');
    </script>";die;
}else if(strlen($nik) > 16){
    echo "<script> 
    alert('!! Maaf NIK Anda Lebih Dari 16 Angka !!');
    window.location.assign('register.php');
    </script>";die;
}


// cek apakah nik sudah terdaftar atau belum
$data = file("config.txt", FILE_IGNORE_NEW_LINES);
foreach($data as $value){
    $pecah = explode("|",$value);
    if ($nik==$pecah['0']) {
        $cek = true;
    }
}

if ($cek){ //jika nik sudah terdaftar ?>

    <script type="text/javascript">
        alert('!! Maaf NIK yang anda gunakan sudah terdaftar !!');
        window.location.assign('index.php');
    </script>

<?php } else{ //jika data tidak ditemukan

     //buat format penyimpanan ke txt config
     $format = "\n$nik|$nama_lengkap";

     //buka dulu file config.txt
     $file = fopen('config.txt','a');
     fwrite($file, $format);

     //tututp file
     fclose($file);

     ?>

     <script type="text/javascript">
        alert('Pendaftaran berhasil dilakukan');
        window.location.assign('index.php');
    </script>
 
 <?php }