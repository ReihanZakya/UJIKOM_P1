<?php
session_start();
$id_catatan =$_GET['id_catatan'];

$no = 0;
$data = file('catatan.txt', FILE_IGNORE_NEW_LINES);
foreach($data as $value){
    $no++;
    $pisah = explode("|", $value);
    if($pisah['0']==$id_catatan){
        $line = $no-1; //mencari urutan baris ke berapa
    }

}
$buka_file = file('catatan.txt');

unset($buka_file[$line]);
file_put_contents('catatan.txt',implode("", $buka_file));


$_SESSION['success'] = 'Data berhasi dihapus';
header('Location: user.php?url=catatan_perjalanan');
?>
