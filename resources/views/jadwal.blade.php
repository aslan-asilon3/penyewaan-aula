<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="IT BPSDM Prov. Kaltim" />
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
    <title>Cek Jadwal | BPSDM Prov. Kaltim</title>

    <!-- Bootstrap Data Table Plugin -->
<link rel="stylesheet" href="https://bpsdm.kaltimprov.go.id/apps/reservasi/css/components/bs-datatable.css" type="text/css" />

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
                    <li class=""><a href="/reservasi"><div>Reservasi</div></a></li>
                    <li class=""><a href="/jadwal"><div>Cek Jadwal</div></a></li>
                    <li class=""><a href="/informasi"><div>Informasi</div></a></li>
                </ul>

            </div>

        </nav><!-- #primary-menu end -->

    </div>

</header><!-- #header end -->

<section id="page-title" class="page-title-pattern">

    <div class="container clearfix">
        <h1>Cek Jadwal</h1>
        <span>Cek ketersediaan sebelum reservasi.</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Jadwal</li>
        </ol>
    </div>

</section>


		<!-- Content
		============================================= -->
		<section id="content">


<div class="content-wrap" style="padding-top: 40px">

    <div class="container clearfix">
        <!-- Form -->
        <form class="form-inline">
            <div class="form-group mx-sm-1 mb-2">
                <select id="gedung" name="gedung" class="form-control">
                    <option value="" selected>-- Fasilitas --</option>
                                        <option value="1">Aula Utama I</option>
                                        <option value="2">Aula Utama II</option>
                                        <option value="3">Ruang Kelas / Ruang Belajar</option>
                                        <option value="4">Ruang Aula Kelas</option>
                                        <option value="6">Asrama</option>
                                    </select>
            </div>
            <div class="form-group mx-sm-1 mb-2">
                <select id="bulan" name="bulan" class="form-control">
                     <option value="01"
                        >Januari</option>
                         <option value="02"
                        >Februari</option>
                         <option value="03"
                        >Maret</option>
                         <option value="04"
                        >April</option>
                         <option value="05"
                        >Mei</option>
                         <option value="06"
                        >Juni</option>
                         <option value="07"
                        selected>Juli</option>
                         <option value="08"
                        >Agustus</option>
                         <option value="09"
                        >September</option>
                         <option value="10"
                        >Oktober</option>
                         <option value="11"
                        >November</option>
                         <option value="12"
                        >Desember</option>
                                        </select>
            </div>
            <div class="form-group mx-sm-1 mb-2">
                <select id="tahun" name="tahun" class="form-control">
                                         <option value="2022">2022</option>
                         <option value="2023">2023</option>
                         <option value="2024">2024</option>
                                        </select>
            </div>
            <button type="submit" class="button button-3d mx-sm-1 mb-2"><i class="icon-filter"></i>Filter</button>
        </form>

        <!-- Form End -->

        <div class="table-responsive">
            <table id="datatable1" class="table table-bordered table-hover" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Tanggal</th>
                        <th>Lama</th>
                        <th>Fasilitas</th>
                        <th>Keperluan</th>
                        <th>Penyewa</th>
                    </tr>
                </thead>
                <tbody>
                                    </tbody>
            </table>
        </div>
        <div class="style-msg" style="margin-top: 20px">
            <div class="sb-msg">
                Keterangan : <br>
                <span class="text-danger">* </span> Belum melakukan verifikasi.
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
                Hak Cipta &copy; 2022. Puskesmas Kecamatan Kemayoran Provinsi DKI Jakarta.
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

    	<!-- Bootstrap Data Table Plugin -->
	<script src="https://bpsdm.kaltimprov.go.id/apps/reservasi/js/components/bs-datatable.js"></script>

	<script>

		$(document).ready(function() {
			$('#datatable1').dataTable( {
				"columns": [
					{ "width": "3%" },
					{ "width": "15%" },
					{ "width": "5%" },
					{ "width": "20%" },
					null,
					null
				],
				"iDisplayLength": 25
			});
		});

	</script>

</body>
</html>
