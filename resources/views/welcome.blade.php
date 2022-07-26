<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="IT Puskesmas Kecamatan Kemayoran" />
    {{-- <img src="assets/image/logo-dki1.jpg" alt="DKI Logo"> --}}
	<link rel="icon" href="assets/image/logo-dki.jpg" sizes="32x32" />
	<link rel="icon" href="assets/image/logo-dki.jpg" sizes="192x192" />
	<link rel="apple-touch-icon-precomposed" href="assets/image/logo-dki.jpg" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://bpsdm.kaltimprov.go.id/apps/reservasi/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="https://bpsdm.kaltimprov.go.id/apps/reservasi/css/style.css" type="text/css" />
	<link rel="stylesheet" href="https://bpsdm.kaltimprov.go.id/apps/reservasi/css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="https://bpsdm.kaltimprov.go.id/apps/reservasi/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="https://bpsdm.kaltimprov.go.id/apps/reservasi/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="https://bpsdm.kaltimprov.go.id/apps/reservasi/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="https://bpsdm.kaltimprov.go.id/apps/reservasi/css/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="https://bpsdm.kaltimprov.go.id/apps/reservasi/css/fonts.css" type="text/css" />
	<link rel="stylesheet" href="https://bpsdm.kaltimprov.go.id/apps/reservasi/css/responsive.css" type="text/css" />
	<link rel="stylesheet" href="https://bpsdm.kaltimprov.go.id/apps/reservasi/css/colors.php?color=FB4D3D" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
    <title>Beranda | Puskesmas Kecamatan Kemayoran</title>


</head>

<body>

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
        ============================================= -->
        <header id="header" class="sticky-style-2">

    <div class="container clearfix">

        <!-- Logo
        ============================================= -->
        <div id="logo">
            <a href="javascript:;" class="standard-logo"><img src="assets/image/logo-dki1.jpg" alt="DKI Logo"></a>
            <a href="javascript:;" class="retina-logo"><img src="assets/image/logo-dki1.jpg" alt="DKI Logo"></a>
        </div><!-- #logo end -->

    </div>

    <div id="header-wrap">

        <!-- Primary Navigation
        ============================================= -->
        <nav id="primary-menu" class="with-arrows style-2 sub-title">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <ul>
                    <li class="current"><a href="/"><div>Beranda</div></a></li>
                    <li class=""><a href="javascript:;"><div>Fasilitas</div></a>
                        <ul>
                                                        <li><a href="/aula-utama-i"><div>Aula Utama I</div></a></li>
                                                        <li><a href="/aula-utama-ii"><div>Aula Utama II</div></a></li>
                                                    </ul>
                    </li>
                    <li class=""><a href="{{ url('/reservasi')}}"><div>Reservasi</div></a></li>
                    <li class=""><a href="/jadwal"><div>Cek Jadwal</div></a></li>
                    <li class=""><a href="/informasi"><div>Informasi</div></a></li>
                </ul>

            </div>

        </nav><!-- #primary-menu end -->

    </div>

</header><!-- #header end -->
        <section id="slider" class="slider-element slider-parallax clearfix" style="background: #FFF url('https://bpsdm.kaltimprov.go.id/apps/reservasi/images/beranda.png') center no-repeat; background-size: cover; height: 500px">

    <div class="vertical-middle">
        <div class="container topmargin-sm">
            <div class="row">
                <div class="col-lg-5 col-md-8">
                    <div class="slider-title">
                        <h2>Reservasi Gedung Online</h2>
                        <h3 class="text-rotater mb-2" data-separator="," data-rotate="fadeIn" data-speed="3500">- Untuk
                            berbagai kegiatan - <span class="t-rotate">Rapat,Pertemuan,Seminar,Ujian</span></h3>
                        <p>Cek jadwal dan lakukan reservasi gedung sekarang untuk kegiatan penting anda.</p>
                        <a href="https://bpsdm.kaltimprov.go.id/apps/reservasi/informasi" class="button button-rounded button-large nott ls0">Cek Jadwal</a>
                        <a href="https://bpsdm.kaltimprov.go.id/apps/reservasi/informasi" class="button button-rounded button-large button-success text-dark bg-white border nott ls0">Informasi</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>

		<!-- Content
		============================================= -->
		<section id="content">


<div class="content-wrap">

    <div class="promo promo-light promo-full uppercase bottommargin-lg header-stick">
        <div class="container clearfix">
            <h3 style="letter-spacing: 2px;">Mulai kegiatan anda ditempat kami</h3>
            <a href="https://bpsdm.kaltimprov.go.id/apps/reservasi/reservasi" class="button button-large button-border button-rounded">Reservasi
                Sekarang</a>
        </div>
    </div>

    <div class="container clearfix">

        <div class="clear-bottommargin">
            <div class="row common-height clearfix">
                <div class="col-lg-4 col-md-6 bottommargin">
                    <div class="feature-box fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><img src="https://bpsdm.kaltimprov.go.id/apps/reservasi/images/icons/building.png" alt="Concrete Developments"></a>
                        </div>
                        <h3>Gedung</h3>
                        <p>Pilihan gedung yang beragam yang sesuai dengan kegiatan.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 bottommargin">
                    <div class="feature-box fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><img src="https://bpsdm.kaltimprov.go.id/apps/reservasi/images/icons/bank.png" alt="Finance Assistance"></a>
                        </div>
                        <h3>Kapasitas</h3>
                        <p>Kapasitas gedung besar dapat menampung hingga 500+ orang dalam satu waktu.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 bottommargin">
                    <div class="feature-box fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><img src="https://bpsdm.kaltimprov.go.id/apps/reservasi/images/icons/drawer.png" alt="Interiorly Designed"></a>
                        </div>
                        <h3>Fasilitas</h3>
                        <p>Berbagai macam fasilitas yang dapat menunjang kegiatan.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 bottommargin">
                    <div class="feature-box fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><img src="https://bpsdm.kaltimprov.go.id/apps/reservasi/images/icons/paper-money.png" alt="Cost Effective Solutions"></a>
                        </div>
                        <h3>Harga</h3>
                        <p>Harga untuk sewa gedung kompetitif sesuai dengan budget berbagai macam kegiatan.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 bottommargin">
                    <div class="feature-box fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><img src="https://bpsdm.kaltimprov.go.id/apps/reservasi/images/icons/traffic-cone.png" alt="Smart Builders"></a>
                        </div>
                        <h3>Parkir</h3>
                        <p>Lahan parkir luas yang dapat menampur sekitar 100+ mobil.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 bottommargin">
                    <div class="feature-box fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><img src="https://bpsdm.kaltimprov.go.id/apps/reservasi/images/icons/placeholder.png" alt="Quality Infrastructure"></a>
                        </div>
                        <h3>Lokasi</h3>
                        <p>Lokasi strategis, cukup dekat dengan kota dan dapat berbagai macam akses jalan.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>


		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer">

    <!-- Copyrights
    ============================================= -->
    <div id="copyrights">

        <div class="container clearfix">

            <div>
                Hak Cipta &copy; 2022. Puskesmas Kecamatan Kemayoran.
            </div>

        </div>

    </div><!-- #copyrights end -->

    </footer><!-- #footer end -->
	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="https://bpsdm.kaltimprov.go.id/apps/reservasi/js/jquery.js"></script>
	<script src="https://bpsdm.kaltimprov.go.id/apps/reservasi/js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
    <script src="https://bpsdm.kaltimprov.go.id/apps/reservasi/js/functions.js"></script>


</body>
</html>
