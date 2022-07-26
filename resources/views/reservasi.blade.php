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
    <title>Reservasi | BPSDM Prov. Kaltim</title>

    <!-- Bootstrap Data Table Plugin -->
<link rel="stylesheet" href="https://bpsdm.kaltimprov.go.id/apps/reservasi/css/components/bs-datatable.css" type="text/css" />

<!-- Date & Time Picker CSS -->
<link rel="stylesheet" href="https://bpsdm.kaltimprov.go.id/apps/reservasi/css/components/datepicker.css" type="text/css" />
<link rel="stylesheet" href="https://bpsdm.kaltimprov.go.id/apps/reservasi/css/components/timepicker.css" type="text/css" />
<link rel="stylesheet" href="https://bpsdm.kaltimprov.go.id/apps/reservasi/css/components/daterangepicker.css" type="text/css" />

<!-- Sweetalert2 -->
<link rel="stylesheet" href="https://bpsdm.kaltimprov.go.id/apps/reservasi/css/components/sweetalert2.css" type="text/css" />

<style>
    .g-recaptcha.error {
        border: solid 2px #c64848;
        padding: .2em;
    }
</style>


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
                    <li class=""><a href=""><div>Beranda</div></a></li>
                    <li class=""><a href="javascript:;"><div>Fasilitas</div></a>
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
                    </li>
                    <li class="current"><a href="https://bpsdm.kaltimprov.go.id/apps/reservasi/reservasi"><div>Reservasi</div></a></li>
                    <li class=""><a href="https://bpsdm.kaltimprov.go.id/apps/reservasi/jadwal"><div>Cek Jadwal</div></a></li>
                    <li class=""><a href="https://bpsdm.kaltimprov.go.id/apps/reservasi/informasi"><div>Informasi</div></a></li>
                </ul>

            </div>

        </nav><!-- #primary-menu end -->

    </div>

</header><!-- #header end -->

<section id="page-title" class="page-title-pattern">

    <div class="container clearfix">
        <h1>Reservasi</h1>
        <span>Isi dan lengkapi formulir untuk reservasi secara online.</span>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Reservasi</li>
        </ol>
    </div>

</section>


		<!-- Content
		============================================= -->
		<section id="content">


<div class="content-wrap" style="padding-top: 40px">

    <div class="container clearfix">
        <div class="col_three_fifth">
            <div class="card">
                <div class="card-header"><strong><i class="icon-tasks"></i> Formulir Reservasi</strong></div>
                <div class="card-body">
                    <form id="form" method="post" action="https://bpsdm.kaltimprov.go.id/apps/reservasi/reservasi/lanjut" data-toggle="validator">
                        <input type="hidden" name="_token" value="gLtEMhjrUCTiOoD2pcQhOs4qYjN2fjSuhhFx5YhC">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="pemesan_ktp">No. KTP <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="pemesan_ktp" id="pemesan_ktp" placeholder="Nomor Identitas KTP"
                                    minlength="16" maxlength="16" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="pemesan_nama">Nama Pemesan <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="pemesan_nama" id="pemesan_nama"
                                    placeholder="Nama Lengkap Pemesan" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="pemesan_telp">No. Telepon Pemesan <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="pemesan_telp" id="pemesan_telp"
                                    placeholder="No. Telepon Pemesan" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="pemesan_email">Email Pemesan <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="pemesan_email" id="pemesan_email"
                                    placeholder="Email Pemesan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pemesan_alamat">Alamat Pemesan <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="pemesan_alamat" id="pemesan_alamat"
                                placeholder="Alamat Lengkap Pemesan" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="pemakai_nama">Nama Pemakai</label>
                                <input type="text" class="form-control" name="pemakai_nama" id="pemakai_nama"
                                    placeholder="Nama Lengkap Pemakai">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="pemakai_telp">No. Telepon Pemakai</label>
                                <input type="text" class="form-control" name="pemakai_telp" id="pemakai_telp"
                                    placeholder="No. Telepon Pemakai">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Pemakaian <span class="text-danger">*</span></label>
                            <div class="input-daterange input-group">
                                <input type="text" id="dari" name="dari" value="" class="form-control tleft"
                                    placeholder="YYYY-MM-DD" autocomplete="off" required>
                                <div class="input-group-prepend">
                                    <div class="input-group-text">sampai</div>
                                </div>
                                <input type="text" id="sampai" name="sampai" value="" class="form-control tleft"
                                    placeholder="YYYY-MM-DD" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="gedung">Fasilitas <span class="text-danger">*</span></label>
                                <select id="gedung" name="gedung" class="form-control" required>
                                    <option value="" selected>-- Pilih Gedung --</option>
                                                                        <option value="1">Aula Utama I</option>
                                                                        <option value="2">Aula Utama II</option>
                                                                        <option value="3">Ruang Kelas / Ruang Belajar</option>
                                                                        <option value="4">Ruang Aula Kelas</option>
                                                                        <option value="6">Asrama</option>
                                                                    </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="jumlah">Jumlah Sewa <span class="text-danger">*</span></label>
                                <select id="jumlah" name="jumlah" class="form-control" required>
                                    <option value="" selected>-- Pilih Jumlah --</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="keperluan">Keperluan <span class="text-danger">*</span></label>
                            <select id="keperluan" name="keperluan" class="form-control" required>
                                <option value="" selected>-- Pilih Keperluan --</option>
                                                                <option value="6">Bimtek / Diklat</option>
                                                                <option value="8">Kunjungan/Visitasi</option>
                                                                <option value="9">Liburan</option>
                                                                <option value="3">Pentas Seni</option>
                                                                <option value="5">Perpisahan</option>
                                                                <option value="2">Rapat / Pertemuan</option>
                                                                <option value="1">Seminar</option>
                                                                <option value="7">Test / Ujian</option>
                                                                <option value="4">Wisuda / Yudisium</option>
                                                            </select>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label" for="setuju" style="text-transform: none; font-weight: 400">
                                    <input class="form-check-input" type="checkbox" name="setuju" id="setuju" required>
                                    Saya menyetujui segala ketentuan dan aturan yang berlaku tentang penyewaan
                                    fasilitas pada BPSDM Provinsi Kalimantan Timur.
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div data-sitekey="6LcFYZIUAAAAAIdbjcpu-vHnlpYIsiGLiBL6GTY4" class="g-recaptcha"></div>
                        </div>
                        <button type="submit" class="button button-3d">Lanjut</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col_two_fifth col_last">
            <div class="card">
				<div class="card-header"><strong><i class="icon-line2-info"></i> Petunjuk Reservasi</strong></div>
				<div class="card-body">
						<ol align="justify" style="padding-left: 10px; margin-bottom: 0px">
							<li>Penyewaan fasilitas diajukan paling lambat 7 hari kerja sebelum tanggal acara.</li>
							<li>Isi formulir disebelah dengan benar termasuk KTP (Kartu Tanda Penduduk), karena akan digunakan pada saat verifikasi.</li>
							<li>Setelah berhasil melakukan pemesanan, lakukan <strong>verifikasi paling lambat 3 hari setelah pemesanan</strong>, dengan cara datang langsung pada jam kerja ke <strong>Ruang Layanan Informasi</strong> BPSDM Provinsi Kalimantan Timur dan menunjukkan <strong>KTP beserta bukti cetak reservasi online</strong>.</li>
							<li>Jika dalam waktu 3 hari Anda belum melakukan verifikasi, data pemesanan Anda akan dihapus.</li>
							<li>Perubahan tanggal hanya bisa dilakukan 1 kali, paling lambat 3 hari sebelum tanggal acara, dan hanya jika jadwal yang diingkan masih kosong.</li>
							<li>Apabila terjadi pembatalan segera hubungi petugas.</li>
						</ol>
				</div>
			</div>        </div>
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

    	<!-- Validation JS -->
	<script src="https://bpsdm.kaltimprov.go.id/apps/reservasi/js/plugins/jquery.validation.js"></script>

	<!-- Date & Time Picker JS -->
	<script src="https://bpsdm.kaltimprov.go.id/apps/reservasi/js/components/moment.js"></script>
	<script src="https://bpsdm.kaltimprov.go.id/apps/reservasi/js/components/datepicker.js"></script>
	<script src="https://bpsdm.kaltimprov.go.id/apps/reservasi/js/components/timepicker.js"></script>

	<!-- Include Date Range Picker -->
	<script src="https://bpsdm.kaltimprov.go.id/apps/reservasi/js/components/daterangepicker.js"></script>

    <script src="https://bpsdm.kaltimprov.go.id/apps/reservasi/js/components/sweetalert2.js"></script>

    <script src="https://www.google.com/recaptcha/api.js?" async defer></script>


	<script src="https://bpsdm.kaltimprov.go.id/apps/reservasi/js/pages/reservasi.js"></script>

</body>
</html>
