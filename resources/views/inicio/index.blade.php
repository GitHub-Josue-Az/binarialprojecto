<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BINARIAL</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo url('/'); ?>/Frontend/images/icons/favicon.png">

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="<?php echo url('/'); ?>/Frontend/css/bootstrap.min.css">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="<?php echo url('/'); ?>/Frontend/lib/css/nivo-slider.css" />
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="<?php echo url('/'); ?>/Frontend/css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="<?php echo url('/'); ?>/Frontend/css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="<?php echo url('/'); ?>/Frontend/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?php echo url('/'); ?>/Frontend/css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="<?php echo url('/'); ?>/Frontend/css/custom.css">

    <!-- Style customizer (Remove these two lines please) -->
    <link rel="stylesheet" href="<?php echo url('/'); ?>/Frontend/css/style-customizer.css">
    <link href="#" data-style="styles" rel="stylesheet">


    <!-- Modernizr JS -->
    <script src="<?php echo url('/'); ?>/Frontend/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Body main wrapper start -->
    <div class="wrapper">

        <!-- HEADER AREA START -->
        <header class="header-area header-wrapper pb-2">
            <div class="header-top-bar bg-white pt-10 pb-10">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12  ">
                            <div class="logo">
                                <a href="">
                                    <img width="300" src="<?php echo url('/'); ?>/Frontend/images/logo/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5 d-none d-lg-block">
                            <div class=" row header-search clearfix">

                               
                                 <form class="col-lg-12" action="#">
                                    <button class="search-icon" type="submit">
                                        <img src="<?php echo url('/'); ?>/Frontend/images/icons/search.png" alt="">
                                    </button>
                                    <input type="text" placeholder="Buscar...">
                                </form>
                               
                                </div>
                                
                               
                           
                        </div>
                        <div class="container col-lg-4 col-md-6 col-12">
                            <div class="row company-info clearfix">
                                 {{--
                               
                                 --}}
                                 <div class=" col-lg-6">
                                    <a class="btn-login-header col-lg-12 text-center" href="/empresa">SOY EMPRESA</a>
                                </div>
                                <div class=" col-lg-6">
                                    <a class="btn-login-header col-lg-12 text-center" href="/inversionista">SOY INVERSIONISTA</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="header-middle-area transparent-header d-none d-md-block">
                <div class="container">
                    <div class="full-width-mega-drop-menu">
                        <div class="row">
                            <div class="col-12">
                                <div class="sticky-logo">
                                    <a href="">
                                        <img   src="<?php echo url('/'); ?>/Frontend/images/logo/logo.png" alt="">
                                    </a>
                                </div>
                                <nav id="primary-menu">
                                    <ul class="main-menu text-center">
                                        <li>
                                            <a href="#">Inicio</a>
                                        </li>
                                        <li class="">
                                            <a href="#nosotros">Nosotros</a>
                                        </li>
                                        <li>
                                            <a href="#servicios">Servicios</a>
                                        </li>
                                        <li>
                                            <a href="#app">Nuestra App</a>
                                        </li>
                                        <li>
                                            <a href="#blog">Blog</a>
                                        </li>
                                        <li>
                                            <a href="#testimonios">Testimonios</a>
                                        </li>
                                        <li>
                                            <a href="#clientes">Clientes</a>
                                        </li>
                                        <li>
                                            <a href="#contacto">Contacto</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER AREA END -->

        <!-- MOBILE MENU AREA START -->
        <div class="mobile-menu-area d-block d-md-none">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li>
                                        <a href="#">Inicio</a>
                                    </li>
                                    <li class="">
                                        <a href="#nosotros">Nosotros</a>
                                    </li>
                                    <li>
                                        <a href="#servicios">Servicios</a>
                                    </li>
                                    <li>
                                        <a href="#app">Nuestra App</a>
                                    </li>
                                    <li>
                                        <a href="#blog">Blog</a>
                                    </li>
                                    <li>
                                        <a href="#testimonios">Testimonios</a>
                                    </li>
                                    <li>
                                        <a href="#clientes">Clientes</a>
                                    </li>
                                    <li>
                                        <a href="#contacto">Contacto</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MOBILE MENU AREA END -->

        <!-- SLIDER SECTION START -->
        <div class="slider-1 pos-relative slider-overlay">
            <div class="bend niceties preview-1">
                <div id="ensign-nivoslider-3" class="slides">
                    <img src="<?php echo url('/'); ?>/Frontend/images/slider/1.jpg" alt="" title="#slider-direction-1" />
                    <img src="<?php echo url('/'); ?>/Frontend/images/slider/2.jpg" alt="" title="#slider-direction-2" />
                    <img src="<?php echo url('/'); ?>/Frontend/images/slider/3.jpg" alt="" title="#slider-direction-3" />
                </div>
                <!-- direction 1 -->
                <div id="slider-direction-1" class="slider-direction">
                    <div class="slider-content text-center">
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <h4 class="slider-1-title-1">BIENVENIDOS <span>BINARIAL</span></h4>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                            <h1 class="slider-1-title-2">slider ejemplo</h1>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                            <p class="slider-1-desc">Lorem consectetur adipiscing elit, sed do eiusmod tempor dolor sit
                                amet <br> contetur adipiscing elit, sed do eiusmod tempor incididunt </p>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                            <a class="slider-button mt-40" href="#">Leer Más</a>
                        </div>
                    </div>
                </div>
                <!-- direction 2 -->
                <div id="slider-direction-2" class="slider-direction">
                    <div class="slider-content text-center">
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <h4 class="slider-1-title-1">BIENVENIDOS <span>BINARIAL</span></h4>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                            <h1 class="slider-1-title-2">slider ejemplo</h1>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                            <p class="slider-1-desc">Lorem consectetur adipiscing elit, sed do eiusmod tempor dolor sit
                                amet <br> contetur adipiscing elit, sed do eiusmod tempor incididunt </p>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                            <a class="slider-button mt-40" href="#">Leer Más</a>
                        </div>
                    </div>
                </div>
                <!-- direction 2 -->
                <div id="slider-direction-3" class="slider-direction">
                    <div class="slider-content text-center">
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <h4 class="slider-1-title-1">BIENVENIDOS <span>BINARIAL</span></h4>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                            <h1 class="slider-1-title-2">slider ejemplo</h1>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                            <p class="slider-1-desc">Lorem consectetur adipiscing elit, sed do eiusmod tempor dolor sit
                                amet <br> contetur adipiscing elit, sed do eiusmod tempor incididunt </p>
                        </div>
                        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
                            <a class="slider-button mt-40" href="#">Leer Más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SLIDER SECTION END -->


        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">

          

            <!-- ABOUT BINARIAL AREA START -->
            <div id="nosotros" class="About-sheltek-area ptb-115">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="section-title mb-30">
                                <h2>¿QUIÉNES SOMOS?</h2>
                            </div>
                            <div class="About-sheltek-info">
                                <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">BINARIAL</span> is the best theme for elit, sed do
                                    eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et lorna aliquatd minim veniam, quis nostrud exercitation oris
                                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolo.</p>
                                <p>Lorem is a dummy text do eiusmod tempor dolor sit amet, onsectetur adip iscing elit,
                                    sed do eiusmod tempor incididunt ut labore et lorna aliqua Ut enim onsectetur </p>
                                <p>Lorem is a dummy text do eiusmod tempor dolor sit amet, onsectetur adip iscing elit,
                                    sed do eiusmod tempor incididunt ut labore et lorna aliqua Ut enim onsectetur </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="about-image">
                                <a href="about.html"><img src="<?php echo url('/'); ?>/Frontend/images/about/1.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ABOUT BINARIAL AREA END -->






            <!-- BOOKING AREA START -->
            <div class="booking-area bg-1 call-to-bg plr-140 pt-75">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="section-title text-white">
                                <h3>Principales</h3>
                                <h2 class="h1">Características</h2>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 col-12">
                            <div class="booking-conternt  clearfix">
                                <div class="counter-content">
                                    <!-- counter-item -->
                                    <div class="counter-item">
                                        <h2>
                                            <i class="fa fa-home" aria-hidden="true"></i>
                                            <span class="counter">99</span>
                                        </h2>
                                        <p>Inmobiliarias</p>
                                    </div>
                                    <!-- counter-item -->
                                    <div class="counter-item">
                                        <h2>
                                            <i class="fa fa-key" aria-hidden="true"></i>
                                            <span class="counter">55</span>
                                        </h2>
                                        <p>Proyectos </p>
                                    </div>
                                    <!-- counter-item -->
                                    <div class="counter-item">
                                        <h2>
                                            <i class="fa fa-smile-o" aria-hidden="true"></i>
                                            <span class="counter">150</span>
                                        </h2>
                                        <p>Inversionistas</p>
                                    </div>
                                    <!-- counter-item -->
                                    <div class="counter-item">
                                        <h2>
                                            <i class="fa fa-trophy" aria-hidden="true"></i>
                                            <span class="counter">100</span>
                                        </h2>
                                        <p>Ventas</p>
                                    </div>
                                </div>
                                <div class="booking-imgae">
                                    <img src="<?php echo url('/'); ?>/Frontend/images/others/booking.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BOOKING AREA END -->


    <!--Welcome Khonike - Real Estate Bootstrap 4 Templatesection-->
    <div id="servicios"  class="feature-section feature-section-border-bottom section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
        <div class="container">
            <div class="row">
                <div class="col-12 pb-50">
                    <div class="section-title-2 text-center">
                        <h2>NUESTROS SERVICIOS</h2>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                       
                <!--Feature start-->
                <div class="col-lg-3 col-sm-6 col-12 mb-30">
                    <div class="feature-2">
                        <div class="icon"><i class="fa fa-trophy"></i></div>
                        <div class="content">
                            <h4>Low Cost</h4>
                            <p>ed do eiusmod tempor dolor sit amet, conse elit ctetur sed tempor.</p>
                        </div>
                    </div>
                </div>
                <!--Feature end-->

                <!--Feature start-->
                <div class="col-lg-3 col-sm-6 col-12 mb-30">
                    <div class="feature-2">
                        <div class="icon"><i class="fa fa-trophy"></i></div>
                        <div class="content">
                            <h4>Good Marketing</h4>
                            <p>ed do eiusmod tempor dolor sit amet, conse elit ctetur sed tempor.</p>
                        </div>
                    </div>
                </div>
                <!--Feature end-->

                <!--Feature start-->
                <div class="col-lg-3 col-sm-6 col-12 mb-30">
                    <div class="feature-2">
                        <div class="icon"><i class="fa fa-trophy"></i></div>
                        <div class="content">
                            <h4>Easy to Find</h4>
                            <p>ed do eiusmod tempor dolor sit amet, conse elit ctetur sed tempor.</p>
                        </div>
                    </div>
                </div>
                <!--Feature end-->

                <!--Feature start-->
                <div class="col-lg-3 col-sm-6 col-12 mb-30">
                    <div class="feature-2">
                        <div class="icon"><i class="fa fa-trophy"></i></div>
                        <div class="content">
                            <h4>Reliable</h4>
                            <p>ed do eiusmod tempor dolor sit amet, conse elit ctetur sed tempor.</p>
                        </div>
                    </div>
                </div>
                <!--Feature end-->
                
            </div>
        </div>
    </div>
    <!--Welcome Khonike - Real Estate Bootstrap 4 Templatesection end-->         
   
             <!-- FEATURES AREA START -->
             <div class="features-area-2 pt-100 pb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title-2 text-center">
                                <h2>¿QUÉ BENEFICIOS TE OFRECEMOS?</h2>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                          <div class="services-feature-image">
                            <img src="<?php echo url('/'); ?>/Frontend/images/about/servicios-banner.png" alt="image">
                        </div>
                        </div>
                      </div>
                    <div class="row">
                        <div class="col-xl-4 col-md-6 text-center wow fadeInUp " style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;" data-wow-delay="0.3s">
                            <div class="media-body features-include-list">
                                <h4 class="media-heading"><img src="<?php echo url('/'); ?>/Frontend/images/icons/9.png" alt="">Fully Furnished</h4>
                                <p>Lorem is a dummy text do eiud tempor dolor sit amet dum ut aliquip ex ea commodo at.
                                    Duis aute irure dolor in reprehenulla</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 text-center wow fadeInUp " style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;" data-wow-delay="0.3s">
                            <div class="features-include-list">
                                <h4 class="media-heading"><img src="<?php echo url('/'); ?>/Frontend/images/icons/9.png" alt="">Royal Touch Paint</h4>
                                <p>Lorem is a dummy text do eiud tempor dolor sit amet dum ut aliquip ex ea commodo at.
                                    Duis aute irure dolor in reprehenulla</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 text-center wow fadeInUp " style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;" data-wow-delay="0.3s">
                            <div class="features-include-list">
                                <h4 class="media-heading"><img src="<?php echo url('/'); ?>/Frontend/images/icons/9.png" alt="">Latest Interior Design</h4>
                                <p>Lorem is a dummy text do eiud tempor dolor sit amet dum ut aliquip ex ea commodo at.
                                    Duis aute irure dolor in reprehenulla</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 text-center wow fadeInUp " style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;" data-wow-delay="0.3s">
                            <div class="features-include-list">
                                <h4 class="media-heading"><img src="<?php echo url('/'); ?>/Frontend/images/icons/7.png" alt="">Non Stop Security</h4>
                                <p>Lorem is a dummy text do eiud tempor dolor sit amet dum ut aliquip ex ea commodo at.
                                    Duis aute irure dolor in reprehenulla</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 text-center wow fadeInUp " style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;" data-wow-delay="0.3s">
                            <div class="features-include-list">
                                <h4 class="media-heading"><img src="<?php echo url('/'); ?>/Frontend/images/icons/7.png" alt="">Living Inside a Nature</h4>
                                <p>Lorem is a dummy text do eiud tempor dolor sit amet dum ut aliquip ex ea commodo at.
                                    Duis aute irure dolor in reprehenulla</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 text-center wow fadeInUp " style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;" data-wow-delay="0.3s">
                            <div class="features-include-list">
                                <h4 class="media-heading"><img src="<?php echo url('/'); ?>/Frontend/images/icons/7.png" alt="">Luxurious Fittings</h4>
                                <p>Lorem is a dummy text do eiud tempor dolor sit amet dum ut aliquip ex ea commodo at.
                                    Duis aute irure dolor in reprehenulla</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FEATURES AREA END -->


              
        <!-- PROPERTIES VIDEO AREA START -->
        <div class="properties-video-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-2 text-center pb-50">
                            <h2>VIDEO DEMOSTRATIVO</h2>
                           
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="properties-video">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe  class="embed-responsive-item" src="https://www.youtube.com/embed/F385h59TsKQ" frameborder="0" allowfullscreen></iframe>                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PROPERTIES VIDEO AREA END -->




     

              <!--Download apps section start-->
              <div id="app" class="download-section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20" style="background-image: url(<?php echo url('/'); ?>/Frontend/images/bg/download-bg.jpg);">
        <div class="container">
            
            <div class="row align-items-center">
               
               
                <!--Download Content start-->
                <div class="col-md-8 col-12 mb-30">
                    <div class="download-content-2">
                        <h1>Descarga <span>Binarial</span> App <br>y Recibe Notificaciones de nuevas características</h1>
                        <div class="buttons justify-content-start">
                            <a href="#">
                                <i class="fa fa-apple"></i>
                                <span class="text">
                                    <span>Disponible en</span>
                                    Apple Store
                                </span>
                            </a>
                            <a href="#">
                                <i class="fa fa-android"></i>
                                <span class="text">
                                    <span>Disponible en</span>
                                    Google Play
                                </span>
                            </a>
                            <a href="#">
                                <i class="fa fa-windows"></i>
                                <span class="text">
                                    <span>Disponible en</span>
                                    Windows Store
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Download Content end-->
                
                
                <!--Download Image Start-->
                <div class="col-md-4 col-12 mb-30">
                    <div class="download-image"><img src="<?php echo url('/'); ?>/Frontend/images/others/app-2.png" alt=""></div>
                </div>
                <!--Download Image end-->
                
            </div>
        </div>
    </div>
    <!--Download apps section end-->



            <!-- BLOG AREA START -->
            <div id="blog"  class="blog-area pt-60 pb-60">
                <div class="container">
                    <div class="row pt-50 pb-50">
                        <div class="col-12">
                            <div class="section-title-2 text-center">
                                <h2>NUESTRO BLOG</h2>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="blog-carousel">
                                <!-- blog-item -->
                                <div class="col">
                                    <article class="blog-item bg-gray">
                                        <div class="blog-image">
                                            <a href=""><img src="<?php echo url('/'); ?>/Frontend/images/blog/1.jpg" alt=""></a>
                                        </div>
                                        <div class="blog-info">
                                            <div class="post-title-time">
                                                <h5><a href="">Maridland de Villa</a></h5>
                                                <p>July 30, 2017 / 10 am</p>
                                            </div>
                                            <p>Lorem must explain to you how all this mistaolt denouncing pleasure and
                                                praising pain wasnad I will give you a complete pain was praising</p>
                                            <a class="read-more" href="single-blog.html">Leer Más</a>
                                        </div>
                                    </article>
                                </div>
                                <!-- blog-item -->
                                <div class="col">
                                    <article class="blog-item bg-gray">
                                        <div class="blog-image">
                                            <a href="single-blog.html"><img src="<?php echo url('/'); ?>/Frontend/images/blog/2.jpg" alt=""></a>
                                        </div>
                                        <div class="blog-info">
                                            <div class="post-title-time">
                                                <h5><a href="single-blog.html">Latest Design House</a></h5>
                                                <p>July 30, 2017 / 10 am</p>
                                            </div>
                                            <p>Lorem must explain to you how all this mistaolt denouncing pleasure and
                                                praising pain wasnad I will give you a complete pain was praising</p>
                                            <a class="read-more" href="single-blog.html">Leer Más</a>
                                        </div>
                                    </article>
                                </div>
                                <!-- blog-item -->
                                <div class="col">
                                    <article class="blog-item bg-gray">
                                        <div class="blog-image">
                                            <a href="single-blog.html"><img src="<?php echo url('/'); ?>/Frontend/images/blog/3.jpg" alt=""></a>
                                        </div>
                                        <div class="blog-info">
                                            <div class="post-title-time">
                                                <h5><a href="single-blog.html">Duplex Villa House</a></h5>
                                                <p>July 30, 2017 / 10 am</p>
                                            </div>
                                            <p>Lorem must explain to you how all this mistaolt denouncing pleasure and
                                                praising pain wasnad I will give you a complete pain was praising</p>
                                            <a class="read-more" href="single-blog.html">Leer Más</a>
                                        </div>
                                    </article>
                                </div>
                                <!-- blog-item -->
                                <div class="col">
                                    <article class="blog-item bg-gray">
                                        <div class="blog-image">
                                            <a href="single-blog.html"><img src="<?php echo url('/'); ?>/Frontend/images/blog/4.jpg" alt=""></a>
                                        </div>
                                        <div class="blog-info">
                                            <div class="post-title-time">
                                                <h5><a href="single-blog.html">Latest Design House</a></h5>
                                                <p>July 30, 2017 / 10 am</p>
                                            </div>
                                            <p>Lorem must explain to you how all this mistaolt denouncing pleasure and
                                                praising pain wasnad I will give you a complete pain was praising</p>
                                            <a class="read-more" href="single-blog.html">Leer Más</a>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BLOG AREA END -->




            <!-- TESTIMONIAL AREA START -->
            <div id="testimonios" class="testimonial-area  pt-115 pb-115">
                <div class="container">
                    <div class="row">
                        <div class="col-12  pb-100">
                            <div class="section-title-2 text-center">
                                <h2>TESTIMONIOS</h2>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="testimonial">
                                <div class="row">
                                    <div class="col-lg-8 col-md-9">
                                        <div class="section-title mb-30">
                                            <h3>LO QUE DICEN</h3>
                                            <h2 class="h1">NUESTROS CLIENTES</h2>
                                        </div>
                                        <div class="testimonial-carousel dots-right-btm">
                                            <!-- testimonial-item -->
                                            <div class="testimonial-item">
                                                <div class="testimonial-brief">
                                                    <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Sheltek</span> is the best theme for
                                                        elit, sed do eiusmod tempor dolor sit amet, conse ctetur
                                                        adipiscing elit, ed do eiusmod tempor incididunt ut labore et
                                                        lorna aliquatd minim veniam, quis nostrud exercitation oris nisi
                                                        ut aliquip ex ea commodo equat. Duis aute irure dolo. liquatd
                                                        minim veniam, quis nostrud exercitation oris nisi ut aliquip ex
                                                        ea commodo equat. Duis aute irure dolo uis nostrud exercitation
                                                    </p>
                                                </div>
                                                <h6>Zasica Luci, <span>CEO</span></h6>
                                            </div>
                                            <!-- testimonial-item -->
                                            <div class="testimonial-item">
                                                <div class="testimonial-brief">
                                                    <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Sheltek</span> is the best theme for
                                                        elit, sed do eiusmod tempor dolor sit amet, conse ctetur
                                                        adipiscing elit, ed do eiusmod tempor incididunt ut labore et
                                                        lorna aliquatd minim veniam, quis nostrud exercitation oris nisi
                                                        ut aliquip ex ea commodo equat. Duis aute irure dolo. liquatd
                                                        minim veniam, quis nostrud exercitation oris nisi ut aliquip ex
                                                        ea commodo equat. Duis aute irure dolo uis nostrud exercitation
                                                    </p>
                                                </div>
                                                <h6>Zasica Luci, <span>CEO</span></h6>
                                            </div>
                                            <!-- testimonial-item -->
                                            <div class="testimonial-item">
                                                <div class="testimonial-brief">
                                                    <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Sheltek</span> is the best theme for
                                                        elit, sed do eiusmod tempor dolor sit amet, conse ctetur
                                                        adipiscing elit, ed do eiusmod tempor incididunt ut labore et
                                                        lorna aliquatd minim veniam, quis nostrud exercitation oris nisi
                                                        ut aliquip ex ea commodo equat. Duis aute irure dolo. liquatd
                                                        minim veniam, quis nostrud exercitation oris nisi ut aliquip ex
                                                        ea commodo equat. Duis aute irure dolo uis nostrud exercitation
                                                    </p>
                                                </div>
                                                <h6>Zasica Luci, <span>CEO</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-3">
                                        <div class="testimonial-image">
                                            <img src="<?php echo url('/'); ?>/Frontend/images/others/testimonial.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- TESTIMONIAL AREA END -->


             
            <!-- BRAND AREA START -->
            <div id="clientes" class="brand-area pt-115 pb-115">
                <div class="container">
                    <div class="row">
                        <div class="col-12  pb-50">
                            <div class="section-title-2 text-center">
                                <h2>CLIENTES</h2>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="brand-carousel">
                                <!-- brand-item -->
                                <div class="col">
                                    <div class="brand-item">
                                        <img src="<?php echo url('/'); ?>/Frontend/images/brand/1.png" alt="">
                                    </div>
                                </div>
                                <!-- brand-item -->
                                <div class="col">
                                    <div class="brand-item">
                                        <img src="<?php echo url('/'); ?>/Frontend/images/brand/2.png" alt="">
                                    </div>
                                </div>
                                <!-- brand-item -->
                                <div class="col">
                                    <div class="brand-item">
                                        <img src="<?php echo url('/'); ?>/Frontend/images/brand/3.png" alt="">
                                    </div>
                                </div>
                                <!-- brand-item -->
                                <div class="col">
                                    <div class="brand-item">
                                        <img src="<?php echo url('/'); ?>/Frontend/images/brand/4.png" alt="">
                                    </div>
                                </div>
                                <!-- brand-item -->
                                <div class="col">
                                    <div class="brand-item">
                                        <img src="<?php echo url('/'); ?>/Frontend/images/brand/5.png" alt="">
                                    </div>
                                </div>
                                <!-- brand-item -->
                                <div class="col">
                                    <div class="brand-item">
                                        <img src="<?php echo url('/'); ?>/Frontend/images/brand/1.png" alt="">
                                    </div>
                                </div>
                                <!-- brand-item -->
                                <div class="col">
                                    <div class="brand-item">
                                        <img src="<?php echo url('/'); ?>/Frontend/images/brand/4.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BRAND AREA END -->

              <!-- Start page content -->
        <section id="page-content" class="page-wrapper">

            <!-- CONTACT AREA START -->
            <div id="contacto" class="contact-area pt-115 pb-115">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-12">
                            <!-- get-in-toch -->
                            <div class="get-in-toch">
                                <div class="section-title mb-30">
                                    <h2>CONTÁCTANOS</h2>
                                </div>
                                <div class="contact-desc mb-50">
                                    <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">BINARIAL</span> is the best theme for elit, sed do
                                        eiusmod tempor dolor sit ame tse ctetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et lorna aliquatd minim veniam, quis nostrud exercitation
                                        oris nisi ut aliquip</p>
                                </div>
                                <ul class="contact-address">
                                    <li>
                                        <div class="contact-address-icon">
                                            <img src="<?php echo url('/'); ?>/Frontend/images/icons/location-2.png" alt="">
                                        </div>
                                        <div class="contact-address-info">
                                            <span>8901 Marmora Raod, New Yourk City </span>
                                            <span>25 Glasgow, D04 89GR</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-address-icon">
                                            <img src="<?php echo url('/'); ?>/Frontend/images/icons/phone-3.png" alt="">
                                        </div>
                                        <div class="contact-address-info">
                                            <span>Telephone : +0 123-456-7890</span>
                                            <span>Telephone : +0 123-456-7890</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-address-icon">
                                            <img src="<?php echo url('/'); ?>/Frontend/images/icons/world.png" alt="">
                                        </div>
                                        <div class="contact-address-info">
                                            <span>Email : info@domain.com</span>
                                            <span>Web :<a href="#" target="_blank"> www.yoursite.com</a></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-7 col-12">
                            <div class="contact-messge contact-bg">
                                <!-- blog-details-reply -->
                                <div class="leave-review">
                                    <h5>Escríbenos un Mensaje</h5>
                                    <form id="contact-form" action="mail.php" method="post">
                                        <input type="text" name="name" placeholder="Escribe tu nombre">
                                        <input type="email" name="email" placeholder="Escribe tu correo">
                                        <textarea name="message" placeholder="Escribe tu mensaje"></textarea>
                                        <button type="submit" class="submit-btn-1">ENVIAR</button>
                                    </form>
                                    <p class="form-messege mb-0"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CONTACT AREA END -->




            

            <!-- GOOGLE MAP AREA START -->
            <div class="google-map-area">
                <div id="googleMap"></div>
            </div>
            <!-- GOOGLE MAP AREA END -->

           


            <!-- SUBSCRIBE AREA START 
            <div class="subscribe-area bg-blue call-to-bg plr-140 ptb-50">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="section-title text-white">
                                <h3>SUBSCRÍBETE</h3>
                                <h2 class="h1">A NOSOTROS</h2>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 col-12">
                            <div class="subscribe">
                                <form action="#">
                                    <input type="text" name="subscribe" placeholder="Ingresa tu Correo Aquí...">
                                    <button type="submit" value="send">Enviar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           SUBSCRIBE AREA END -->
        </section>
        <!-- End page content -->
        </section>
        <!-- End page content -->

          <!--Footer section start-->
    <footer class="footer-section section" style="background-image: url(<?php echo url('/'); ?>/Frontend/images/)">
       
        <!--Footer Top start-->
        <div class="footer-top section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-60 pb-lg-40 pb-md-30 pb-sm-20 pb-xs-10">
            <div class="container">
                <div class="row row-25">
                    
                    <!--Footer Widget start-->
                    <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                        <img width="150" src="<?php echo url('/'); ?>/Frontend/images/logo/logo.png" alt="">
                        <p>Binarial - Best theme for elit, sed do to eiumod tempor dolor sit amet, ctetur adipiscing elit seddo dolor sit amet.</p>
                        <div class="footer-social">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                            <!--<a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="pinterest"><i class="fa fa-pinterest-p"></i></a>-->
                        </div>
                    </div>
                    <!--Footer Widget end-->
                    
                    <!--Footer Widget start-->
                    <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                        <h4 class="title"><span class="text">Contáctanos</span><span class="shape"></span></h4>
                        <ul>
                            <li><i class="fa fa-map-o"></i><span>Av. Javier Prado Este 418-502, Cercado de Lima 15046</span></li>
                            <li><i class="fa fa-phone"></i><span><a href="#">+012 345 678 102</a><a href="#">+012 345 678 101</a></span></li>
                            <li><i class="fa fa-envelope-o"></i><span><a href="#">info@example.com</a><a href="#">www.binarial.com</a></span></li>
                        </ul>
                    </div>
                    <!--Footer Widget end-->
                    
                    <!--Footer Widget start-->
                    <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                        <h4 class="title"><span class="text">Enlaces útiles</span><span class="shape"></span></h4>
                        <ul>
                            <li><a href="#">Rental Builidngs</a></li>
                            <li><a href="#">Browe all Categories</a></li>
                            <li><a href="#">Top Mortagages Rates</a></li>
                            <li><a href="#">RentalTerms of use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                       </ul>
                    </div>
                    <!--Footer Widget end-->    
                    
                    <!--Footer Widget start-->
                    <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                        <h4 class="title"><span class="text">Subcripción</span><span class="shape"></span></h4>
                        
                        <p>Subscribe our newsletter and get all latest news about our latest properties, promotions, offers and discount</p>
                        
                        <form id="mc-form" class="mc-form footer-newsletter" >
                            <input id="mc-email" type="email" autocomplete="off" placeholder="Ingresa tu correo aquí.." />
                            <button id="mc-submit"><i class="fa fa-paper-plane-o"></i></button>
                        </form>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts text-centre">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                        </div><!-- mailchimp-alerts end -->
                        
                    </div>
                    <!--Footer Widget end-->
                    
                </div>
            </div>
        </div>
        <!--Footer Top end-->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright text-center">
                                <p>Copyright &copy; <script>
                                        document.write(new Date().getFullYear());
                                    </script> <a href="#"><b>Binarial</b></a>. Todos los Derechos Reservados.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer area -->


         <!--
        style-customizer start 
        <div class="style-customizer closed">
            <div class="buy-button">
                <a href="index.html" class="customizer-logo"><img src="<?php echo url('/'); ?>/Frontend/images/logo/logo.png" alt="Theme Logo"></a>
                <a class="opener" href="#"><i class="fa fa-cog fa-spin" aria-hidden="true"></i></a>
            </div>
            <div class="clearfix content-chooser">
                <h3>Layout Options</h3>
                <p>Which layout option you want to use?</p>
                <ul class="layoutstyle clearfix">
                    <li class="wide-layout selected" data-style="wide" title="wide"> Wide </li>
                    <li class="boxed-layout" data-style="boxed" title="boxed"> Boxed </li>
                </ul>
                <h3>Color Schemes</h3>
                <p>Which theme color you want to use? Select from here.</p>
                <ul class="styleChange clearfix">
                    <li class="skin-default selected" title="skin-default" data-style="skin-default"></li>
                    <li class="skin-amber" title="amber" data-style="skin-amber"></li>
                    <li class="skin-blue-grey" title="blue-grey" data-style="skin-blue-grey"></li>
                    <li class="skin-blue" title="blue" data-style="skin-blue"></li>
                    <li class="skin-cyan" title="cyan" data-style="skin-cyan"></li>
                    <li class="skin-green-dark" title="green-dark" data-style="skin-green-dark"></li>
                    <li class="skin-green" title="green" data-style="skin-green"></li>
                    <li class="skin-maroon" title="maroon" data-style="skin-maroon"></li>
                    <li class="skin-orenge" title="orenge" data-style="skin-orenge"></li>
                    <li class="skin-pink" title="pink" data-style="skin-pink"></li>
                    <li class="skin-purple" title="purple" data-style="skin-purple"></li>
                    <li class="skin-teal" title="teal" data-style="skin-teal"></li>
                </ul>
                <h3>Background Patterns</h3>
                <p>Which background pattern you want to use?</p>
                <ul class="patternChange clearfix">
                    <li class="pattern-1" data-style="pattern-1" title="pattern-1"></li>
                    <li class="pattern-2" data-style="pattern-2" title="pattern-2"></li>
                    <li class="pattern-3" data-style="pattern-3" title="pattern-3"></li>
                    <li class="pattern-4" data-style="pattern-4" title="pattern-4"></li>
                    <li class="pattern-5" data-style="pattern-5" title="pattern-5"></li>
                    <li class="pattern-6" data-style="pattern-6" title="pattern-6"></li>
                    <li class="pattern-7" data-style="pattern-7" title="pattern-7"></li>
                    <li class="pattern-8" data-style="pattern-8" title="pattern-8"></li>
                </ul>
                <h3>Background Images</h3>
                <p>Which background image you want to use?</p>
                <ul class="patternChange main-bg-change clearfix">
                    <li class="main-bg-1" data-style="main-bg-1" title="Background 1"> <img src="<?php echo url('/'); ?>/Frontend/images/customizer/bodybg/01.jpg" alt=""></li>
                    <li class="main-bg-2" data-style="main-bg-2" title="Background 2"> <img src="<?php echo url('/'); ?>/Frontend/images/customizer/bodybg/02.jpg" alt=""></li>
                    <li class="main-bg-3" data-style="main-bg-3" title="Background 3"> <img src="<?php echo url('/'); ?>/Frontend/images/customizer/bodybg/03.jpg" alt=""></li>
                    <li class="main-bg-4" data-style="main-bg-4" title="Background 4"> <img src="<?php echo url('/'); ?>/Frontend/images/customizer/bodybg/04.jpg" alt=""></li>
                    <li class="main-bg-5" data-style="main-bg-5" title="Background 5"> <img src="<?php echo url('/'); ?>/Frontend/images/customizer/bodybg/05.jpg" alt=""></li>
                    <li class="main-bg-6" data-style="main-bg-6" title="Background 6"> <img src="<?php echo url('/'); ?>/Frontend/images/customizer/bodybg/06.jpg" alt=""></li>
                    <li class="main-bg-7" data-style="main-bg-7" title="Background 7"> <img src="<?php echo url('/'); ?>/Frontend/images/customizer/bodybg/07.jpg" alt=""></li>
                    <li class="main-bg-8" data-style="main-bg-8" title="Background 8"> <img src="<?php echo url('/'); ?>/Frontend/images/customizer/bodybg/08.jpg" alt=""></li>
                </ul>
                <ul class="resetAll">
                    <li><a class="button button-border button-reset" href="#">Reset All</a></li>
                </ul>
            </div>
        </div>
       style-customizer end 
    </div>
    Body main wrapper end -->




    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="<?php echo url('/'); ?>/Frontend/js/vendor/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="<?php echo url('/'); ?>/Frontend/js/bootstrap.min.js"></script>
    <!-- Nivo slider js -->
    <script src="<?php echo url('/'); ?>/Frontend/lib/js/jquery.nivo.slider.js"></script>
     <!-- Google Map js -->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeeHDCOXmUMja1CFg96RbtyKgx381yoBU"></script>
     <script src="<?php echo url('/'); ?>/Frontend/js/google-map.js"></script>
    <!-- ajax-mail js -->
    <script src="<?php echo url('/'); ?>/Frontend/js/ajax-mail.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="<?php echo url('/'); ?>/Frontend/js/plugins.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="<?php echo url('/'); ?>/Frontend/js/main.js"></script>

</body>

</html>