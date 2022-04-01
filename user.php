<?php
session_start();
if(empty( $_SESSION['nik'])){
    $_SESSION['error'] = "Anda Belum Melakukan Login";
    header("Location: register.php");
    die;
 } ?>

<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Catatan Perjalanan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Tables are the backbone of almost all web applications.">
    <meta name="msapplication-tap-highlight" content="no">
 
    <link rel="stylesheet" type="text/css" href="datatable/datatables.min.css"/>
 

    <link href="./main.css" rel="stylesheet"></head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header ">
        <div class="app-header header-shadow mx-auto animated bounceInRight">
            <div class="app-header__logo">
                <div class=""><a href="user.php"><img src="assets/images/catatanperjalanan.png" width="80%" height="80%" alt=""></a></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>           
        </div>    
        <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    
                    <!-- sidebar -->
                    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner mx-auto animated bounceInLeft">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Menu</li>
                                <li <?php (isset($_GET['url']) == 'index.php') ? '': 'active' ?>>
                                    <a href="user.php">
                                        <i class="metismenu-icon pe-7s-monitor text-primary"></i>
                                        Beranda
                                    </a>
                                </li>
                                <li <?php (isset($_GET['url']) == 'tulis_catatan') ? 'mm-active' : ''; ?> >
                                    <a href="?url=tulis_catatan">
                                        <i class="metismenu-icon pe-7s-pen text-primary"></i>
                                        Tulis Catatan
                                    </a>
                                </li>
                                <li class=" <?php (isset($_GET['url']) == 'catatan_perjalanan') ? ' ' : 'mm=active'; ?> ">
                                    <a href="?url=catatan_perjalanan">
                                        <i class="metismenu-icon pe-7s-note text-primary"></i>
                                        Kelola Catatan
                                    </a>
                                </li>
                                <li>
                                    <a href="?url=data_covid">
                                        <i class="metismenu-icon pe-7s-folder text-primary"></i>
                                        Informasi Covid
                                    </a>
                                </li>
                                <hr>
                                <li>
                                    <a href="logout.php" >
                                        <i class="metismenu-icon pe-7s-next-2 text-danger"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end sidebar -->
                </div>    
                <!-- code biar jadi main template -->
                <?php 
                if(!empty(@$_GET['url'])){
                    switch (@$_GET['url']){
                        case 'tulis_catatan';
                            include 'tulis_catatan.php';
                            break;

                        case 'catatan_perjalanan';
                            include 'catatan_perjalanan.php';
                            break;

                        case 'edit_catatan';
                            include 'edit_catatan.php';
                            break;

                        case 'data_covid';
                            include 'datacovid.php';
                            break;

                        default:
                            echo "<h3> Halaman tidak ditemukan </h3>";
                            break;
                    }
                }else{ ?>
                <!-- isi dashboard -->
                    <div class="app-main__outer mx-auto animated bounceInDown">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <a href="user.php">
                                            <i class="pe-7s-notebook"></i>
                                        </a>
                                    </div>
                                    <div><a href=""> Peduli Diri </a>
                                        <div class="page-title-subheading">
                                        <?php 
                                        echo "Selamat Datang ".$_SESSION['nama_lengkap']. " Di Aplikasi Peduli Diri"; 
                                        ?>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>            
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-xl-6">
                                    <div class="card mb-3 widget-content">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">
                                                    <a href="?url=tulis_catatan"> Tulis Catatan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-6">
                                    <div class="card mb-3 widget-content">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">
                                                    <a href="?url=catatan_perjalanan">Kelola Catatan </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header"><i class="fa fa-table"></i>Riwayat Perjalanan</div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="example" class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>no</th>
                                                            <th>Tanggal</th>
                                                            <th>Waktu</th>
                                                            <th>Lokasi</th>
                                                            <th>Suhu Tubuh</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                       $no=1;
                                                       $halaman = 10;
                                                       $data = file('catatan.txt', FILE_IGNORE_NEW_LINES);
                                                       $user = $_SESSION['nik']."|".$_SESSION['nama_lengkap'];
                                                       foreach($data as $value){
                                                           $pisah = explode("|", $value);
                                                           @$key = $pisah['1']."|".$pisah['2'];
                                                           if($key==$user){

                                                    ?>
                                                        <tr>
                                                            <td><?= $no++ ?></td>
                                                            <td><?= $pisah['3'];?></td>
                                                            <td><?= $pisah['4'];?></td>
                                                            <td><?= $pisah['5'];?></td>
                                                            <td><?= $pisah['6'];?>℃</td>
                                                        </tr>
                                                        <?php }} ?>
                                                    </tbody>  
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>   
                </div>
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                            <div class="app-footer-right">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            &copy; Mohammad Reihan Zakya Alawi
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>  
             <?php   } ?>
            </div>
            
    <!-- Architech -->
    <script type="text/javascript" src="assets/scripts/main.js"></script>
    <script src="datatable/jquery-3.1.0.js"></script>
    <script type="text/javascript" src="datatable/datatables.min.js"></script>
    <script>
    $(document).ready(function(){
        $('#default-datatable').DataTable();

        var table = $('#example').DataTable( {
            lengthChange: false,
            buttons: [ 'copy', 'excel', 'print' ]
        } );

        table.buttons().container()
            .appendTo( '#example_wrapper .col-md-6:eq(0)' );
        
        } );
    </script>


<script src="assets/js/sweetalert2@11.js"></script>
<?php if(isset($_SESSION['success'])) { ?>
	<script>
		Swal.fire(
		'Berhasil',
		'<?= $_SESSION['success']; ?>',
		'success'
		)
	</script>
<?php unset($_SESSION['success']); } ?>

<?php if(isset($_SESSION['error'])) { ?>
	<script>
		Swal.fire(
		'Maaf',
		'<?= $_SESSION['error']; ?>',
		'error'
		)
	</script>
<?php unset($_SESSION['error']); } ?>

<script>
 $(document).on('click','#btn-hapus',function(e){
     e.preventDefault();
     var link = $(this).attr('href');
        Swal.fire({
        title: 'Yakin?',
        text: "Kamu akan menghapus data ini",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Batal',
        confirmButtonText: 'Ya'
        }).then((result) => {
        if (result.isConfirmed) {
            window.location = link;
        }
        })
 })        
</script>


</html>