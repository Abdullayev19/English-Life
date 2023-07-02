<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="English-life - Education">

    <!-- ========== Page Title ========== -->
    <title>English Life School & Language Center</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/home/log.svg" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="assets/css/themify-icons.css" rel="stylesheet"/>
    <link href="assets/css/flaticon-set.css" rel="stylesheet"/>
    <link href="assets/css/elegant-icons.css" rel="stylesheet"/>
    <link href="assets/css/magnific-popup.css" rel="stylesheet"/>
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet"/>
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet"/>
    <link href="assets/css/animate.css" rel="stylesheet"/>
    <link href="assets/css/bootsnav.css" rel="stylesheet"/>
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet"/>
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5/html5shiv.min.js"></script>
    <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap"
          rel="stylesheet">

</head>

<body>

<!-- Preloader Start -->
<div class="se-pre-con"></div>
<!-- Preloader Ends -->

<!-- Start Header Top
============================================= -->
<div class="top-bar-area bg-dark text-light inline inc-border">
    <div class="container">
        <div class="row align-center">

            <div class="col-lg-7 col-md-12 left-info">
                <div class="item-flex">
                    <ul class="list">
                        <li>
                            <i class="fas fa-phone"></i> Qo'ngiroq qiling! +998 88 624 11 11
                        </li>
                        <li>
                            <i class="fas fa-bullhorn"></i> <a href="#">English Life Maktabi</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-5 col-md-12 right-info">
                <div class="item-flex">
                    <div class="social">
                        <ul>
                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
<!--                            <li>-->
<!--                                <a href="#"><i class="fab fa-linkedin-in"></i></a>-->
<!--                            </li>-->
                        </ul>
                    </div>
                   
                    <!--                        <div class="button">-->
                    <!--                            <a href="#">Register</a>-->
                    <!--                            <a href="#"><i class="fa fa-sign-in-alt"></i>Login</a>-->
                    <!--                        </div>-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Header Top -->

<!-- Header
============================================= -->
<header id="home">
    <!-- Start Navigation -->
    <nav class="navbar navbar-default attr-border navbar-sticky dark bootsnav">

        <div class="container-full">
            <!-- Start Atribute Navigation -->
            <div class="attr-nav">  
                      <a class="btn btn-danger p-1" href="/lang/en">EN</a>
                      <a class="btn btn-danger p-1" href="/lang/uz">UZ</a>
               </div>
            
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/">
                    <img src="assets/img/home/log.svg" class="logo" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="dropdown">
                        <a href="/" class="{{ Request::is('/') ? 'active' : '' }}">@lang('words.home')</a>
                    </li>
                    <li class="dropdown" >
                        <a href="/about" class="{{ Request::is('/about') ? 'active' : '' }}">@lang('words.about')</a>
                    </li>
                    <li class="dropdown">
                        <a href="/courses">@lang('words.cources')</a>
                    </li>
                    <li class="dropdown">
                        <a href="/advisors">@lang('words.mentor')</a>
                    </li>
                    <li class="dropdown">
                        <a href="/blog">@lang('words.blog+')</a>
                    </li>
                    <li>
                        <a href="/contact">@lang('words.contact')</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>

    </nav>
    <!-- End Navigation -->
    
</header>
<!-- End Header -->

@yield('content')


<!-- Start Footer
============================================= -->
<footer class="bg-dark text-light">
    <div class="container">
        <div class="f-items default-padding">
            <div class="row">
                <div class="col-lg-4 col-md-6 item">
                    <div class="f-item about">
                        <img src="/assets/img/home/log.svg" alt="Logo" width="80px">
                        <p>
                            Sizni o'z o'quv dargohimizda ko'rganimizdan hursandmiz !
                        </p>
<!--                        <p class="text-italic">-->
<!--                            Please write your email and get our amazing updates, news and support*-->
<!--                        </p>-->
<!--                        <div class="subscribe">-->
<!--                            <form action="#">-->
<!--                                <input type="email" placeholder="Enter your e-mail here" class="form-control"-->
<!--                                       name="email">-->
<!--                                <button type="submit"><i class="fa fa-paper-plane"></i></button>-->
<!--                            </form>-->
<!--                        </div>-->
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 item">
                    <div class="f-item contact">
                        <h4 class="widget-title">Aloqa ma'lumotlari.</h4>
                        <div class="address">
                            <ul>
                                <li>
                                    <strong>Email:</strong> support@validtheme.com
                                </li>
                                <li>
                                    <strong>Contact:</strong> +998 88 624 11 11
                                </li>
                            </ul>
                        </div>
                        <div class="opening-info">
                            <h5>Ish soatlari</h5>
                            <ul>
                                <li><span> Du - Se :  </span>
                                    <div class="float-right"> 9.00 - 17.00 </div>
                                </li>
                                <li><span> Chor - Pay :</span>
                                    <div class="float-right"> 9.00 - 17.00 </div>
                                </li>
                                <li><span> Sun : </span>
                                    <div class="float-right closed"> Yopilish</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 item">
                    <!-- Star Google Maps  ============================================= -->
                    <div class="maps-area" style="height: 320px">
                        <div class="google-maps">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12088.270126257306!2d72.3542672!3d40.7605394!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd78e243afc4a3dfe!2sEnglish%20Life%20Education%20Center!5e0!3m2!1sen!2s!4v1663407831157!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <!-- End Google Maps -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p>&copy; Copyright 2022. All Rights Reserved by <a href="http://portfolio.softstars.uz/">UIL</a></p>
                </div>
                <div class="col-lg-6 text-right link">
                    <ul>
                        <li>
                            <a href="#">Terms</a>
                        </li>
                        <li>
                            <a href="#">Privacy</a>
                        </li>
                        <li>
                            <a href="#">Support</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom -->
</footer>
<!-- End Footer-->

<!-- jQuery Frameworks
============================================= -->
<script src="assets/js/jquery-1.12.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.appear.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/modernizr.custom.13711.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/progress-bar.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/count-to.js"></script>
<script src="assets/js/YTPlayer.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/loopcounter.js"></script>
<script src="assets/js/bootsnav.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>

