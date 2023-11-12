<?php

	$fullurl = ($_SERVER['PHP_SELF']);
	$trimmed = trim($fullurl, ".php");
	$canonical = rtrim($trimmed, '/' . '/?');

	if (isset($_COOKIE['COOKIES_MEMBER'])) {
	    header("location:./");
	} else {

	?>

	<!DOCTYPE html>
	<html lang="id-ID" xml:lang="id-ID">

	    <head>

	    	<!--Viewport -->
	    	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	    	<meta content="text/html; charset=UTF-8" http-equiv="Content-Type"/>
	    	<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>

	    	<!--Canonical-->
	    	<meta content="all" name="robots"/>
	    	<link href="<?php echo $site_url; ?>" rel="home"/>
	    	<link href="<?php echo $site_url; ?><?php echo $fullurl; ?>" rel="canonical"/>

	    	<!--Title-->
	    	<title>1SPKPCS</title>
	    	<meta name="description" content="Download Aplikasi 1spkpcs"/>
	    	<meta name="keywords" content="Aplikasi 1spkpcs"/>
	    	<link href="mod/logo.png" rel="shortcut icon" type="image/x-icon"/>

	    	<!--OG-->
	    	<meta content="website" property="og:type"/>
	    	<meta content="1spkpcs.com" property="og:title"/>
	    	<meta content="1spkpcs" property="og:description"/>
	    	<meta content="1spkpcs>" property="og:url"/>
	    	<meta content="1spkpcs" property="og:site_name"/>
	    	<meta content="1spkpcs" property="og:headline"/>
	    	<meta content="mod/logo.png" property="og:image"/>
	    	<meta content="1920" property="og:image:width"/>
	    	<meta content="1080" property="og:image:height"/>
	    	<meta content="id_ID" property="og:locale"/>
	    	<meta content="en_US" property="og:locale:alternate"/>
	    	<meta content="true" property="og:rich_attachment"/>
	    	<meta content="true" property="pinterest-rich-pin"/>
	    	<meta content="" property="fb:app_id"/>
	    	<meta content="" property="fb:pages"/>
	    	<meta content="" property="fb:admins"/>
	    	<meta content="" property="fb:profile_id"/>


	    	<!--Author-->
	    	<meta content="1spkpcs" name="author" />
	    	<meta content="webable.id" name="publisher"/>

	    	<!--verification-->
	    	<meta name="yandex-verification" content=""/>
	    	<meta name="p:domain_verify" content=""/>
	    	<meta name="msvalidate.01" content=""/>
	    	<meta name="google-site-verification" content="" />
	    	<meta name="dmca-site-verification" content=""/>
	    	<meta name="facebook-domain-verification" content=""/>

	    	<!--Location-->
	    	<meta content="ID" name="geo.region"/>
	    	<meta content="Indonesia" name="geo.country"/>
	    	<meta content="Indonesia" name="geo.placename"/>
	    	<meta content="x;x" name="geo.position"/>
	    	<meta content="x,x" name="ICBM"/>

	    	<!--resource-->
	    	<link href="//fonts.googleapis.com" rel="preconnect dns-prefetch"/>
	    	<link href="//api.github.com" rel="preconnect dns-prefetch"/>
	    	<link href="//api.mapbox.com" rel="preconnect dns-prefetch"/>
	    	<link href="//cdnjs.cloudflare.com" rel="preconnect dns-prefetch"/>
	    	<link href="//unpkg.com" rel="preconnect dns-prefetch"/>
			<link href="//kit.fontawesome.com" rel="preconnect dns-prefetch"/>
			
            <!--cssfont-->
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet"/>

            <!--css-->
            <link href="mod/assets-index/css/scroll.css" rel="stylesheet"/>
            <link href="mod/assets-index/css/bootstrap.min.css" rel="stylesheet"/>
            <link href="mod/assets-index/css/animate.css" rel="stylesheet"/>
            <link href="mod/assets-index/css/meanmenu.css" rel="stylesheet"/>
            <link href="mod/assets-index/css/magnific-popup.min.css" rel="stylesheet"/>
            <link href="mod/assets-index/css/owl.carousel.min.css" rel="stylesheet"/>
            <link href="mod/assets-index/css/odometer.css" rel="stylesheet"/>
            <link href="mod/assets-index/css/slick.css" rel="stylesheet"/>
            <link href="mod/assets-index/css/style.css" rel="stylesheet"/>
            <link href="mod/assets-index/css/responsive.css" rel="stylesheet"/>
            <link href="mod/assets-index/css/footer.css" rel="stylesheet"/>

	    </head>

	    <body>

	        <!--HEADER-->
	        <header id="header">
	        	<div class="startp-mobile-nav fixed">
	        		<div class="logo">
	        			<a href="./"><img src="mod/logo.png" class="home-logo"></a>
	        		</div>
	        	</div>
	        	<div class="startp-nav fixed">
	        		<div class="container">
	        			<nav class="navbar navbar-expand-md navbar-light">
	        				<a class="navbar-brand" href="./"><img src="mod/logo.png" class="home-logo"></a>
	        				<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
	        					<ul class="navbar-nav nav ml-auto">
	        						<li class="nav-item"><a href="#panel"><i aria-hidden="true" class="fa fa-home"></i> PANEL</a></li>
	        						<li class="nav-item"><a href="#aplikasi"><i class="fab fa-android"></i> APLIKASI</a></li>
	        						<!--<li class="nav-item"><a href="#fitur"><i aria-hidden="true" class="fa fa-star"></i> FITUR</a></li>-->
	        						<li class="nav-item"><a href="#kontak"><i aria-hidden="true" class="fa fa-comments"></i> KONTAK</a></li>
	        						<div class="others-option m">
	        							<a href="mod/1SPKPCS_1_1.0.apk" title="Download" alt="Download" class="btn btn-primary"><i aria-hidden="true" class="fa fa-download"></i> DOWNLOAD</a>
	        						</div>
	        					</ul>
	        				</div>
	        				<div class="others-option m">
	        					<a href="mod/1SPKPCS_1_1.0.apk" class="btn btn-primary"><i aria-hidden="true" class="fa fa-download"></i> DOWNLOAD</a>
	        				</div>
	        			</nav>
	        		</div> 
	        	</div>
	        </header>

	        <!--BERANDA-->
	        <div class="main-banner">
	        	<div class="d-table">
	        		<div class="d-table-cell c">
	        			<div class="container">
	        				<div class="row h-100 justify-content-center align-items-center">
	        					<div class="col-lg-5">
	        						<div class="hero-content text-center text-white">
	        							<p>
	        								<img src="mod/logo.png" class="img-fluid" width="180px">
	        							</p>
	        							<h1 class="text-white">1SPKPCS</h1>
	        							<i aria-hidden="true" class="fa fa-check-circle"></i> Powered by 1SPKPCS
	        						</div>
	        					</div>
	        					<div class="col-lg-6">
	        						<!--<img style="border-radius: 30px;" src="<?php echo $site_url; ?>/content/logo/absensionline.jpg" class="img-fluid">-->
	        					</div>
	        				</div>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="shape1"><img src="mod/assets-index/images/shape1.png" alt="shape"></div>
	        	<div class="shape2 rotateme"><img src="mod/assets-index/images/shape2.svg" alt="shape"></div>
	        	<div class="shape3"><img src="mod/assets-index/images/shape3.svg" alt="shape"></div>
	        	<div class="shape4"><img src="mod/assets-index/images/shape4.svg" alt="shape"></div>
	        	<div class="shape5"><img src="mod/assets-index/images/shape5.png" alt="shape"></div>
	        	<div class="shape6 rotateme"><img src="mod/assets-index/images/shape4.svg" alt="shape"></div>
	        	<div class="shape7"><img src="mod/assets-index/images/shape4.svg" alt="shape"></div>
	        	<div class="shape8 rotateme"><img src="mod/assets-index/images/shape2.svg" alt="shape"></div>
	        </div>

	        <!--PANEL-->
	        <!--<section class="boxes-area" id="panel">-->
	        <!--	<div class="container">-->
	        <!--		<div class="section-title">-->
	        <!--			<h2><i aria-hidden="true" class="fa fa-star"></i> <?php echo $site_name; ?></h2>-->
	        <!--			<div class="bar"></div>-->
	        <!--			<p>-->
	        <!--				Absensi online cocok untuk guru, dosen, karyawan kantor maupun karyawan lapangan. Semua laporan Absensi terintegrasi dengan auto detect lokasi. Lupakan mesin atau catatan absen manual, atur database kehadiran secara real-time, dan mudah!-->
	        <!--			</p>-->
	        <!--			<br/>-->
	        <!--			<p>-->
	        <!--				Solusi lengkap untuk manajemen kehadiran, mulai dari merekam, mengolah jadwal, pengelompokkan jenis SDM, hingga pelaporan kehadiran dengan penggunaan sistem absensi online berbasis foto selfie dan deteksi lokasi otomatis.-->
	        <!--			</p>-->
	        <!--		</div>-->
	        <!--		<div class="row">-->
	        <!--			<div class="boxes-slides">-->
	        <!--				<div class="col-lg-12 col-md-12">-->
	        <!--					<div class="single-box bg-005CAA">-->
	        <!--						<div class="icon">-->
	        <!--							<i data-feather="airplay"></i>-->
	        <!--						</div>-->
	        <!--						<h3>Absen lebih aman tanpa fingerprint</h3>-->
	        <!--						<p>Aplikasi absensi mobile Android yang berbasis GPS dan disertai fitur selfie Talenta memberikan akses pemantauan keterlambatan, jam istirahat dan ketidakhadiran selama penerapan jam kerja parsial. Tinggalkan mesin fingerprint dan beralih ke sistem absensi yang aman dan lebih cepat.</p>-->
	        <!--					</div>-->
	        <!--				</div>-->

	        <!--				<div class="col-lg-12 col-md-12">-->
	        <!--					<div class="single-box bg-005CAA">-->
	        <!--						<div class="icon">-->
	        <!--							<i data-feather="zap"></i>-->
	        <!--						</div>-->
	        <!--						<h3>Kelola shift kerja saat new normal</h3>-->
	        <!--						<p>Proses panjang dan manual tidak lagi diperlukan dengan manajemen shift karyawan yang langsung dari Talenta. Pengelolaan jam kerja lebih cepat dan praktis selama new normal bahkan untuk perusahaan multi-cabang. Manajemen jadwal kerja dan sistem otomatis akan merekan setiap kehadiran atau ketidakhadiran karyawan.</p>-->
	        <!--					</div>-->
	        <!--				</div>-->

	        <!--				<div class="col-lg-12 col-md-12">-->
	        <!--					<div class="single-box bg-005CAA">-->
	        <!--						<div class="icon">-->
	        <!--							<i data-feather="check"></i>-->
	        <!--						</div>-->
	        <!--						<h3>Berbasis cloud dan multi platform</h3>-->
	        <!--						<p>Anda tidak membutuhkan investasi server fisik karena aplikasi ini menggunakan teknologi yang multi platform. Memudahkan akses sistem dari berbagai macam jenis perangkat. Dengan penggunaan cloud server memudahkan Anda mendapat informasi dan data kehadiran realtime yang dapat di akses setiap saat.</p>-->
	        <!--					</div>-->
	        <!--				</div>-->
	        <!--			</div>-->
	        <!--		</div>-->
	        <!--	</div>-->
	        <!--</section>-->

	        <!--APLIKASI-->
	        <section class="services-area-two bg-f5f5f5" id="aplikasi">
	        	<div class="container">
	        		<div class="section-title">
	        			<h2><i class="fab fa-android" style="color:#a4c639"></i>Aplikasi 1SPKPCS</h2>
	        			<div class="bar"></div>
	        			<p>Anda dapat mengakses sistem melalui aplikasi mobile dan tablet dengan mendownload aplikasi dibawah</p>
	        			<a href="mod/1SPKPCS_1_1.0.apk" class="btn btn-primary"><i aria-hidden="true" class="fa fa-download" style="color:#a4c639"></i> Download</a>
	        		</div>
	        	</div>
	        </section>

	        <!--FITUR-->
	        <!--<section class="services-area ptb-50 bg-f5f5f5" id="fitur">-->
	        <!--	<div class="container">-->
	        <!--		<div class="row h-100 justify-content-center align-items-center">-->
	        <!--			<div class="col-lg-6 col-md-12 services-content">-->
	        <!--				<div class="section-title">-->
	        <!--					<h2><i aria-hidden="true" class="fa fa-star"></i> Fitur Unggulan</h2>-->
	        <!--					<div class="bar"></div>-->
	        <!--					<p>Kami selalu meningkatkan kualitas sistem dan memberikan fitur terbaik yang bisa dengan mudah Anda gunakan.</p>-->
	        <!--				</div>-->

	        <!--				<div class="row">-->
	        <!--					<div class="col-lg-6 col-md-6">-->
	        <!--						<div class="box">-->
	        <!--							<i data-feather="check"></i> Berbasis Android & Web-->
	        <!--						</div>-->
	        <!--					</div>-->
	        <!--					<div class="col-lg-6 col-md-6">-->
	        <!--						<div class="box">-->
	        <!--							<i data-feather="chevrons-up"></i> Tanpa Fingerprint-->
	        <!--						</div>-->
	        <!--					</div>-->
	        <!--					<div class="col-lg-6 col-md-6">-->
	        <!--						<div class="box">-->
	        <!--							<i data-feather="plus"></i> Atur Jadwal Kerja & Shift-->
	        <!--						</div>-->
	        <!--					</div>-->
	        <!--					<div class="col-lg-6 col-md-6">-->
	        <!--						<div class="box">-->
	        <!--							<i data-feather="thumbs-up"></i> Kelola Jenis Pengguna -->
	        <!--						</div>-->
	        <!--					</div>-->
	        <!--					<div class="col-lg-6 col-md-6">-->
	        <!--						<div class="box">-->
	        <!--							<i data-feather="corner-right-up"></i> Fleksibel Dashboard-->
	        <!--						</div>-->
	        <!--					</div>-->
	        <!--					<div class="col-lg-6 col-md-6">-->
	        <!--						<div class="box">-->
	        <!--							<i data-feather="grid"></i> Absen Foto Selfie & GPS-->
	        <!--						</div>-->
	        <!--					</div>-->
	        <!--					<div class="col-lg-6 col-md-6">-->
	        <!--						<div class="box">-->
	        <!--							<i data-feather="zap"></i> Cepat & Mudah Digunakan-->
	        <!--						</div>-->
	        <!--					</div>-->
	        <!--					<div class="col-lg-6 col-md-6">-->
	        <!--						<div class="box">-->
	        <!--							<i data-feather="trending-up"></i> Rekap Laporan Excel & Pdf-->
	        <!--						</div>-->
	        <!--					</div>-->
	        <!--				</div>-->
	        <!--			</div>-->
	        <!--			<div class="col-lg-6 col-md-12">-->
	        <!--				<br/><img style="border-radius: 30px;" src="<?php echo $site_url; ?>/content/logo/absensionline.jpg" class="img-fluid" title="Fitur <?php echo $site_name; ?>" alt="Fitur <?php echo $site_name; ?>">-->
	        <!--			</div>-->
	        <!--		</div>-->
	        <!--	</div>-->
	        <!--</section>-->
	        <section class="ready-to-talk">
	        	<div class="container">
	        		<h3>Langkah Instal</h3>
	        		<p>1. Download Aplikasi</p>
	        		<p>2. Buka setting ijinkan aplikasi tidak dikenal</p>
	        		<p>3. Instal Aplikasi</p>
	        		<p>4. Buka aplikasi dan ijinkan akses</p>
	        	</div>
	        </section>

	        <!--FOOTER-->
	        <footer class="footer-area" id="kontak">
	        	<div class="container">
	        		<div class="row">
	        			<div class="col-lg-4 col-md-12">
	        				<div class="single-footer-widget pl-5">
	        					<!--<h3>Tentang Kami</h3>-->
	        					<!--<?php echo $site_description; ?><br/><br/>-->
	        					<!--<ul class="list">-->
	        					<!--	<li><a href="<?php echo $site_url; ?>/login" title="Member Area <?php echo $site_name; ?>" alt="Member Area <?php echo $site_name; ?>">Masuk</a></li>-->
	        						<!--<li><a href="<?php echo $site_url; ?>/registrasi" title="Daftar <?php echo $site_name; ?>" alt="Daftar <?php echo $site_name; ?>">Daftar</a></li>-->
	        					<!--</ul>-->
	        				</div>
	        			</div>
	        			<div class="col-lg-4 col-md-12">
	        				<div class="single-footer-widget pl-5">
	        					<!--<h3>Halaman Terkait</h3>-->
	        					<!--<ul class="list">-->
	        					<!--	<li><a href="https://undaris.ac.id" title="Tentang Kami" alt="Tentang Kami">Tentang Kami</a></li>-->
	        					<!--	<li><a href="<?php echo $site_url; ?>/UNDARIS - PRESENSI ONLINE_1_1.0" title="Platform Aplikasi" alt="Platform Aplikasi">Platform Aplikasi</a></li>-->
	        						<!--<li><a href="https://mycoding.net" title="Dukungan Teknologi" alt="Dukungan Teknologi">Dukungan Teknologi</a></li>-->
	        						<!--<li><a href="https://mycoding.net" title="Dukungan Pembayaran" alt="Dukungan Pembayaran">Dukungan Pembayaran</a></li>-->
	        						<!--<li><a href="https://mycoding.net" title="Ketentuan Layanan" alt="Ketentuan Layanan">Ketentuan Layanan</a></li>-->
	        						<!--<li><a href="https://mycoding.net" title="Pertanyaan Umum" alt="Pertanyaan Umum">Pertanyaan Umum</a></li>-->
	        					<!--</ul>-->
	        				</div>
	        			</div>
	        			<div class="col-lg-4 col-md-12">
	        				<div class="single-footer-widget pl-5">
	        					<h3>Dukungan Pengguna</h3>
	        					Jangan ragu menghubungi kami melalui whatsapp, halaman kontak, atau email.<br/><br/>
	        					<ul class="social-links">
	        						<li><a href="https://www.youtube.com/channel/UCZIaRdgfgJSdRGgzR9v2PNA" class="youtube"><i data-feather="youtube"></i></a></li>
	        						<li><a href="https://facebook.com/undaris.ungaran.56" class="facebook"><i data-feather="facebook"></i></a></li>
	        						<li><a href="#" class="instagram"><i data-feather="instagram"></i></a></li>
	        					</ul>
	        					<br/>
	        					<ul class="list">
	        						<li><a href="https://wa.me/6281328375307">Hubungi Kami</a></li>
	        						<li><a href="https://instagram.com/fahri_atmaja">Mitra & Jaringan</a></li>
	        					</ul>
	        				</div>
	        			</div>
	        			<div class="col-lg-12 col-md-12">
	        				<div class="copyright-area">
	        					Copyright ©2022-<?= date('Y'); ?> <a class="text-white" href="https://1spkpcs.com"> 1SPKPCS</a> by <a class="text-white" href="https://instagram.com/fahri_atmaja"> IT DIVISION</a>.
	        				</div>
	        			</div>
	        		</div>
	        	</div>
	        </footer>

	        <div class="go-top">
	        	<i data-feather="arrow-up"></i>
	        </div>

			<!--Scroll Indicator Load-->
			<div class='progress-container'>
				<div class='progress-bar' id='progressbar'/>
			</div>
			<script type='text/javascript'>
				//<![CDATA[
				window.addEventListener("scroll", myFunction);
				function myFunction() {
					var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
					var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
					var scrolled = (winScroll / height) * 100;
					document.getElementById("progressbar").style.width = scrolled + "%";
				}
				//]]>
			</script>

	        <!--javascript-->
	        <script src="mod/assets-index/js/jquery.min.js"></script>
	        <script src="mod/assets-index/js/jquery.meanmenu.min.js"></script>
	        <script src="mod/assets-index/js/jquery.magnific-popup.min.js"></script>
	        <script src="mod/assets-index/js/jquery.appear.js"></script>
	        <script src="mod/assets-index/js/odometer.min.js"></script>
	        <script src="mod/assets-index/js/slick.js"></script>
	        <script src="mod/assets-index/js/owl.carousel.min.js"></script>
	        <script src="mod/assets-index/js/feather.min.js"></script>
	        <script src="mod/assets-index/js/main.js"></script>

	    </body>

	</html>

<?php } ?>