<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="image/favicon.png" type="image/png">
        <title>Penyewaan Ruang Aula</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/vendors/linericon/style.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="assets/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
    </head>
    <body>
        <!--================Header Area =================-->
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    {{-- <a class="navbar-brand logo_h" href="index.html"><img src="assets/image/Logo.png" alt=""></a> --}}
                    <a class="navbar-brand logo_h" href="index.html"><h3>Sewa Aula</h3></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="/">Landing Page</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--================Header Area =================-->

        <!--================Banner Area =================-->
        <section class="banner_area" style="margin-top:30px">
            <div class="booking_table d_flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>

                <div class="hotel_booking_area position " style="margin-top:30px">
                    <div class="container">
                        <div class="banner_content text-center">
                            <h2>Sistem Informasi Penyewaan Ruang Aula</h2> <br>
                            <h3>Puskesmas Kecamatan Kemayoran</h3>
                            {{-- <a href="#" class="btn theme_btn button_hover">Get Started</a> --}}
                        </div>
                        {{-- <div class="hotel_booking_table" style="margin-bottom-50px;">
                            <div class="col-md-3">
                                <h2>Book<br> Your Room</h2>
                            </div>
                            <div class="col-md-9">
                                <div class="boking_table">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="book_tabel_item">
                                                <div class="form-group">
                                                    <div class='input-group date' id='datetimepicker11'>
                                                        <input type='text' class="form-control" placeholder="Arrival Date"/>
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class='input-group date' id='datetimepicker1'>
                                                        <input type='text' class="form-control" placeholder="Departure Date"/>
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="book_tabel_item">
                                                <div class="input-group">
                                                    <select class="wide">
                                                        <option data-display="Adult">Adult</option>
                                                        <option value="1">Old</option>
                                                        <option value="2">Younger</option>
                                                        <option value="3">Potato</option>
                                                    </select>
                                                </div>
                                                <div class="input-group">
                                                    <select class="wide">
                                                        <option data-display="Child">Child</option>
                                                        <option value="1">Child</option>
                                                        <option value="2">Baby</option>
                                                        <option value="3">Child</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="book_tabel_item">
                                                <div class="input-group">
                                                    <select class="wide">
                                                        <option data-display="Child">Number of Rooms</option>
                                                        <option value="1">Room 01</option>
                                                        <option value="2">Room 02</option>
                                                        <option value="3">Room 03</option>
                                                    </select>
                                                </div>
                                                <a class="book_now_btn button_hover" href="#">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>

            </div>

        </section>
        <!--================Banner Area =================-->


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        <script src="assets/js/mail-script.js"></script>
        <script src="assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="assets/vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="assets/js/mail-script.js"></script>
        <script src="assets/js/stellar.js"></script>
        <script src="assets/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="assets/js/custom.js"></script>
    </body>
</html>
