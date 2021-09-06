<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <meta name="title" content="">
    <meta name="keyword" content="">
    <meta name="description" content="">
    <meta property="og:title" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <link rel="shortcut icon" href="{{ asset('front/images/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.css') }}">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('front/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">

    <title>@yield('title')</title>

</head>
<body>
    <!-- header -->
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light proposals_navbar">
                <a class="navbar-brand pl-lg-3" href="#"><img src="{{ asset('front/images/logo.png') }}"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto align-items-start align-items-lg-center">
                        <li class="nav-item ">
                            <a class="nav-link color303030 opensans semibold font-14 p-0" href="#what_we_do">Item1 <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link color303030 opensans semibold font-14 p-0" href="#tours">Item2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link color303030 opensans semibold font-14 p-0" href="#our_pricing">Item3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link color303030 opensans semibold font-14 p-0" href="#video">Item4</a>
                        </li>
                        <li class="nav-item mr-lg-3">
                            <a
                                class="nav-link text-uppercase poppins semibold font-14 login_popup_open all_btn text-center p-0">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase poppins semibold font-14 signup_popup_open all_btn text-center p-0"
                                href="#">GET STARTED</a>
                        </li>

                    </ul>

                </div>
            </nav>
        </div>
    </header>
    @yield('content')
    <!-- footer -->
    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 my-auto">
                        <div class="footer_logo text-center text-md-left mb-5 mb-lg-0">
                            <img src="{{ asset('front/images/footer-logo.png') }}">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <h4 class="poppins font-24 medium text-white mb-4 text-center text-md-left mb-4 pb-1">Contact us</h4>
                        <div
                            class="contact_det_text d-block d-lg-flex justify-content-between text-center text-md-left">
                            <div class="email_text mb-4 mb-md-0">
                                <h6 class="poppins font-weight-normal font-14 colord8dbde pb-1">Email</h6>
                                <a href="mailto:contact@sitename.com"
                                    class="poppins font-weight-normal font-13 coloracb0b4 d-block">contact@sitename.com</a>
                                <a href="mailto:support@sitename.com"
                                    class="poppins font-weight-normal font-13 coloracb0b4">support@sitename.com</a>
                            </div>
                            <div class="phone_text mb-4 mb-md-0">
                                <h6 class="poppins font-weight-normal font-14 colord8dbde pb-1">Phone</h6>
                                <a href="tel:540-96-5544"
                                    class="poppins font-weight-normal font-13 coloracb0b4 d-block">540-96-5544</a>

                            </div>
                            <div class="office_text">
                                <h6 class="poppins font-weight-normal font-14 colord8dbde pb-1">Main office</h6>
                                <p class="poppins font-weight-normal font-13 coloracb0b4 ">12 Gerald Ave, Clifton, NJ,
                                    07012 </p>
                            </div>
                        </div>
                        <ul class="list-unstyled list-inline social_media_icons pt-4 mb-0 text-center text-md-left">
                            <li class="list-inline-item"><a href="" class="socia_media_icon"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="" class="socia_media_icon"><i
                                        class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="" class="socia_media_icon"><i
                                        class="fab fa-linkedin-in"></i></a></li>
                            <li class="list-inline-item"><a href="" class="socia_media_icon"><i
                                        class="fab fa-google-plus-g"></i></a></li>
                            <li class="list-inline-item"><a href="" class="socia_media_icon"><i
                                        class="fab fa-pinterest-p"></i></a></li>
                            <li class="list-inline-item"><a href="" class="socia_media_icon"><i
                                        class="fab fa-vimeo-v"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="footer-bottom py-4">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="text-center text-md-left mb-3 mb-md-0">
                            <p class="poppins font-weight-normal font-13 coloracb0b4a mb-0">© 2021 All rights
                                reserved.<span class="border-bottom-92969a"><a href="" class="coloracb0b4a">
                                        Privacy Statement
                                    </a> </span></p>
                        </div>

                    </div>
                    <div class="col-12 col-md-6">
                        <div class="text-center text-md-right">
                            <p class="poppins font-weight-normal font-13 coloracb0b4a mb-0">
                                Website by: <span class="border-bottom-92969a"><a href=""
                                        class="coloracb0b4a">Elesent</a></span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Login Modal -->
    <div class="modal fade login_popup_style" id="login_popup" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content border-0 rounded-0">
                <div class="modal-header p-0 align-items-center bottom-shadow-1">
                    <div class="row w-100 mx-0">
                        <div class="col-6 px-0">
                            <h3 class="coloraaaaaa montserrat font-13 text-center mb-0 active popup_title semibold">Login</h3>
                        </div>
                        <div class="col-6 px-0">
                            <h3 class="coloraaaaaa montserrat font-13 text-center mb-0 popup_title semibold">Sign up</h3>
                        </div>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3 class="montserrat font-30 font-weight-light color222 pt-4 mb-4">Log in to your account</h3>
                    <form class="row mx-0 w-100">
                        <div class="form-group col-12 px-0">
                            <label
                                class="color888 font-weight-bold montserrat font-12 text-uppercase letterspacing-1">email</label>
                            <input type="email" class="form-control login_popup_field" placeholder="john@wick.me">
                        </div>
                        <div class="form-group col-12 px-0 mb-4">
                            <label
                                class="color888 font-weight-bold montserrat font-12 text-uppercase letterspacing-1">password</label>
                            <input type="password" class="form-control login_popup_field" placeholder="++++++">
                        </div>
                        <div class="form-group col-6 px-0 my-auto">
                            <label
                                class="cust_checkbox montserrat semibold font-13 color222 mb-0 letterspacing-1">Remember
                                me?
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="form-group col-6 px-0 text-right">
                            <a href=""
                                class="popup_login_btn text-center text-white font-13 semibold montserrat d-inline-block letterspacing-1">Login</a>
                        </div>
                </div>
                </form>
            </div>
            <div class="modal-footer rounded-0 border-0 text-center justify-content-center py-4">
                <p class="color464646 montserrat semibold font-12 letterspacing-1">In case you forgot, <a href=""
                        class="color464646 border-bottom-d1d1d1">Reset my password</a></p>
            </div>
        </div>
    </div>
    <!-- Signup Modal -->
    <div class="modal fade login_popup_style" id="signup_popup" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content border-0 rounded-0">
                <div class="modal-header p-0 align-items-center bottom-shadow-1">
                    <div class="row w-100 mx-0">
                        <div class="col-6 px-0">
                            <h3 class="coloraaaaaa montserrat font-13 text-center mb-0  popup_title">Login</h3>
                        </div>
                        <div class="col-6 px-0">
                            <h3 class="coloraaaaaa montserrat font-13 text-center mb-0 active popup_title">Sign up</h3>
                        </div>
                    </div>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3 class="montserrat font-30 font-weight-light color222 pt-4 mb-4">Sign up to your account</h3>
                    <form class="row mx-0 w-100">
                        <div class="form-group col-12 px-0">
                            <label
                                class="color888 font-weight-bold montserrat font-12 text-uppercase letterspacing-1">First
                                Name</label>
                            <input type="text" class="form-control login_popup_field" placeholder="First Name">
                        </div>
                        <div class="form-group col-12 px-0 mb-4">
                            <label
                                class="color888 font-weight-bold montserrat font-12 text-uppercase letterspacing-1">Last
                                Name</label>
                            <input type="text" class="form-control login_popup_field" placeholder="Last Name">
                        </div>
                        <div class="form-group col-12 px-0">
                            <label
                                class="color888 font-weight-bold montserrat font-12 text-uppercase letterspacing-1">email</label>
                            <input type="email" class="form-control login_popup_field" placeholder="john@wick.me">
                        </div>
                        <div class="form-group col-12 px-0 mb-4">
                            <label
                                class="color888 font-weight-bold montserrat font-12 text-uppercase letterspacing-1">password</label>
                            <input type="password" class="form-control login_popup_field" placeholder="++++++">
                        </div>
                        <div class="form-group col-12 px-0 mb-4">
                            <label
                                class="color888 font-weight-bold montserrat font-12 text-uppercase letterspacing-1">confirm
                                password</label>
                            <input type="password" class="form-control login_popup_field" placeholder="++++++">
                        </div>
                        <!-- <div class="form-group col-6 px-0 my-auto">
                            <label
                                class="cust_checkbox montserrat semibold font-13 color222 mb-0 letterspacing-1">Remember
                                me?
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                        </div> -->
                        <div class="form-group col-12 px-0 text-right">
                            <a href=""
                                class="popup_login_btn text-center text-white font-13 semibold montserrat d-inline-block letterspacing-1">Sign
                                up</a>
                        </div>
                </div>
                </form>
            </div>
            <!-- <div class="modal-footer border-0 text-center justify-content-center py-4">
                <p class="color464646 montserrat semibold font-12 letterspacing-1">In case you forgot, <a href=""
                        class="color464646 border-bottom-d1d1d1">Reset my password</a></p>
            </div> -->
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="{{ asset('front/js/jquery-2.2.4.min.js') }}"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
    <!-- owl slider -->
    <script src="{{ asset('front/js/owl.carousel.js') }}"></script>
    <script>
        $(document).ready(function ($) {
            $('.what_we_do_slide').owlCarousel({
                items: 2,
                dots: true,
                margin: 30,
                autoplay: true,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    900: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 2,
                        nav: false,
                        loop: true,
                        margin: 20
                    },
                    1400: {
                        items: 2,
                        nav: false,
                        loop: true,
                        margin: 20
                    }
                }
            });
            if ($(window).width() <= 991) {
                $('.navbar-nav .nav-item a').on('click', function () {
                    $(".navbar-toggler").click();
                });
            }
            $(".login_popup_open").click(function () {
                $('#login_popup').modal('toggle');

            });
            $(".signup_popup_open").click(function () {
                $('#signup_popup').modal('toggle');

            });
        });
    </script>

    <script>
        $(function () {
            $('ul.navbar-nav li a[href*="#"]:not([href="#"]),.footer_site_links  ul li a[href*="#"]:not([href="#"])').click(function () {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
    </script>


</body>

</html>
