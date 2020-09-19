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
                                <a href="/index/">
                                    <img width="300" src="<?php echo url('/'); ?>/Frontend/images/logo/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class=" row header-search clearfix">

                      
                                </div>
                                
                               
                           
                        </div>
                        <div class="container col-lg-3 col-md-6 col-12">
                            <div class="row company-info clearfix">
                                 {{--
                               
                                 --}}
                                 <div class=" col-lg-6">
                                    <a class="btn-login-header col-lg-12 text-center" href="/inversionista/login">INGRESAR</a>
                                </div>
                                <div class=" col-lg-6">
                                    <a class="btn-login-header col-lg-12 text-center" href="/inversionista/register">REGISTRARSE</a>
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
                                        <img width="300"  src="<?php echo url('/'); ?>/Frontend/images/logo/logo.png" alt="">
                                    </a>
                                </div>
                                <nav id="primary-menu">
                                    <ul class="main-menu text-center">
                                        <li>
                                            <a href="#">Inicio</a>
                                        </li>
                                       
                                        <li>
                                            <a href="#seccionservicios">Sobre Inversionistas</a>
                                        </li>
                                        <li>
                                            <a href="#seccioninmobiliarias">Inmobiliarias</a>
                                        </li>
                                        <li>
                                            <a href="#seccionportafolio">Portafolio</a>
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
                                      
                                        <li>
                                            <a href="#seccionservicios">Sobre Inversionistas</a>
                                        </li>
                                        <li>
                                            <a href="#seccioninmobiliarias">Inmobiliarias</a>
                                        </li>
                                        <li>
                                            <a href="#seccionportafolio">Portafolio</a>
                                        </li>
                                   
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MOBILE MENU AREA END -->

    




        <!-- DICECTORY LISTING GOOGLE MAP AREA START -->
        <div class="directory-listing-google-map-area">
            <div id="gmap"></div>

            <div class="find-home-box wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="find-home-colse">
                    <span class="close-home"><i class="fa fa-times"></i></span>
                </div>
                <div class="section-title text-white">
                    <h3>ENCUENTRA TU </h3>
                    <h2 class="h1">INMOBILIARIA</h2>
                </div>
                <div class="find-homes">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="find-home-item custom-select">
                                <select class="selectpicker" title="Departamento" data-hide-disabled="true" data-live-search="true">
                                    <optgroup disabled="disabled" label="disabled">
                                        <option>Hidden</option>
                                    </optgroup>
                                    <optgroup label="Australia">
                                        <option>Sydney</option>
                                        <option>Melbourne</option>
                                        <option>Cairns</option>
                                    </optgroup>
                                    <optgroup label="USA">
                                        <option>South Carolina</option>
                                        <option>Florida</option>
                                        <option>Rhode Island</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="find-home-item custom-select">
                                <select class="selectpicker" title="Provincia" data-hide-disabled="true" data-live-search="true">
                                    <optgroup disabled="disabled" label="disabled">
                                        <option>Hidden</option>
                                    </optgroup>
                                    <optgroup label="Australia">
                                        <option>southeastern coast</option>
                                        <option>southeastern tip</option>
                                        <option>northwest corner</option>
                                    </optgroup>
                                    <optgroup label="USA">
                                        <option>Charleston</option>
                                        <option>St. Petersburg</option>
                                        <option>Newport</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="find-home-item">
                                <input type="text" name="min-area" placeholder="Min area (sqft)">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="find-home-item">
                                <input type="text" name="max-area" placeholder="Max area (sqft)">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="find-home-item  custom-select">
                                <select class="selectpicker" title="No. DE" data-hide-disabled="true">
                                    <optgroup label="1">
                                        <option label="1">1</option>
                                        <option>2 Beadrooms</option>
                                        <option>3 Beadrooms</option>
                                        <option>4 Beadrooms</option>
                                        <option>5 Beadrooms</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="find-home-item custom-select">
                                <select class="selectpicker" title="No. de" data-hide-disabled="true">
                                    <optgroup label="2">
                                        <option>1 Bathrooms</option>
                                        <option>2 Bathrooms</option>
                                        <option>3 Bathrooms</option>
                                        <option>4 Bathrooms</option>
                                        <option>5 Bathrooms</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-7 col-xs-12">
                                    <div class="find-home-item">
                                        <!-- shop-filter -->
                                        <div class="shop-filter">
                                            <div class="price_filter">
                                                <div class="price_slider_amount">
                                                    <input type="submit" value="Precio Rango :" />
                                                    <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                                </div>
                                                <div id="slider-range"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5 col-xs-12">
                                    <div class="find-home-item">
                                        <a class="button-1 btn-block btn-hover-1" href="#">BUSCAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- DICECTORY LISTING GOOGLE MAP AREA START -->







<!-- SERVICES AREA START -->
<div  id="seccionservicios" class="services-area pt-100 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-2 text-center">
                    <h2>SERVICIOS</h2>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="service-carousel">
                    <!-- service-item -->
                    <div class="col">
                        <div class="service-item">
                            <div class="service-item-image">
                                <a href="service-details.html"><img src="<?php echo url('/'); ?>/Frontend/images/service/1.jpg" alt=""></a>
                            </div>
                            <div class="service-item-info">
                                <h5><a href="service-details.html">Sale Property</a></h5>
                                <p>Property sale best theme for litdo eiusmod tempor dolor sit amet, conse
                                    tetur adiping eiusmo</p>
                            </div>
                        </div>
                    </div>
                    <!-- service-item -->
                    <div class="col">
                        <div class="service-item">
                            <div class="service-item-image">
                                <a href="service-details.html"><img src="<?php echo url('/'); ?>/Frontend/images/service/2.jpg" alt=""></a>
                            </div>
                            <div class="service-item-info">
                                <h5><a href="service-details.html">Buy Property</a></h5>
                                <p>Property sale best theme for litdo eiusmod tempor dolor sit amet, conse
                                    tetur adiping eiusmo</p>
                            </div>
                        </div>
                    </div>
                    <!-- service-item -->
                    <div class="col">
                        <div class="service-item">
                            <div class="service-item-image">
                                <a href="service-details.html"><img src="<?php echo url('/'); ?>/Frontend/images/service/3.jpg" alt=""></a>
                            </div>
                            <div class="service-item-info">
                                <h5><a href="service-details.html">Rent Property</a></h5>
                                <p>Property sale best theme for litdo eiusmod tempor dolor sit amet, conse
                                    tetur adiping eiusmo</p>
                            </div>
                        </div>
                    </div>
                    <!-- service-item -->
                    <div class="col">
                        <div class="service-item">
                            <div class="service-item-image">
                                <a href="service-details.html"><img src="<?php echo url('/'); ?>/Frontend/images/service/4.jpg" alt=""></a>
                            </div>
                            <div class="service-item-info">
                                <h5><a href="service-details.html">Property Management</a></h5>
                                <p>Property sale best theme for litdo eiusmod tempor dolor sit amet, conse
                                    tetur adiping eiusmo</p>
                            </div>
                        </div>
                    </div>
                    <!-- service-item -->
                    <div class="col">
                        <div class="service-item">
                            <div class="service-item-image">
                                <a href="service-details.html"><img src="<?php echo url('/'); ?>/Frontend/images/service/4.jpg" alt=""></a>
                            </div>
                            <div class="service-item-info">
                                <h5><a href="service-details.html">Sale Property</a></h5>
                                <p>Property sale best theme for litdo eiusmod tempor dolor sit amet, conse
                                    tetur adiping eiusmo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SERVICES AREA END -->


 <!-- BOOKING AREA START -->
 <div class="booking-area bg-1 call-to-bg plr-140 pt-75">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-lg-12 col-md-8 col-12">
                <div class="booking-conternt clearfix">
                    <div class="book-house text-white text-center">
                        <h2>INGRESA A NUESTRO PORTAL </h2>
                        <h2 class="h5">PARA INVERTIR EN INMOBILIARIAS </h2>
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








<!-- FEATURED FLAT AREA START -->
<div id="seccioninmobiliarias" class="featured-flat-area pt-115 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-2 text-center">
                    <h2>INMOBILIARIAS</h2>
                   
                </div>
            </div>
        </div>
        <div class="featured-flat">
            <div class="row">
                <!-- flat-item -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="flat-item">
                        <div class="flat-item-image">
                            <span class="for-sale">Venta</span>
                            <a href="properties-details.html"><img src="<?php echo url('/'); ?>/Frontend/images/flat/1.jpg" alt=""></a>
                            <div class="flat-link">
                                <a href="properties-details.html">Más Detalles</a>
                            </div>
                            <ul class="flat-desc">
                                <li>
                                    <img src="<?php echo url('/'); ?>/Frontend/images/icons/4.png" alt="">
                                    <span>450 sqft</span>
                                </li>
                                <li>
                                    <img src="<?php echo url('/'); ?>/Frontend/images/icons/5.png" alt="">
                                    <span>5</span>
                                </li>
                                <li>
                                    <img src="<?php echo url('/'); ?>/Frontend/images/icons/6.png" alt="">
                                    <span>3</span>
                                </li>
                            </ul>
                        </div>
                        <div class="flat-item-info">
                            <div class="flat-title-price">
                                <h5><a href="properties-details.html">Nombre del Proyecto </a></h5>
                                <span class="price">#####</span>
                            </div>
                            <p><img src="<?php echo url('/'); ?>/Frontend/images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                        </div>
                    </div>
                </div>
                <!-- flat-item -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="flat-item">
                        <div class="flat-item-image">
                            <a href="properties-details.html"><img src="<?php echo url('/'); ?>/Frontend/images/flat/2.jpg" alt=""></a>
                            <div class="flat-link">
                                <a href="properties-details.html">Más Detalles</a>
                            </div>
                            <ul class="flat-desc">
                                <li>
                                    <img src="<?php echo url('/'); ?>/Frontend/images/icons/4.png" alt="">
                                    <span>450 sqft</span>
                                </li>
                                <li>
                                    <img src="<?php echo url('/'); ?>/Frontend/images/icons/5.png" alt="">
                                    <span>5</span>
                                </li>
                                <li>
                                    <img src="<?php echo url('/'); ?>/Frontend/images/icons/6.png" alt="">
                                    <span>3</span>
                                </li>
                            </ul>
                        </div>
                        <div class="flat-item-info">
                            <div class="flat-title-price">
                                <h5><a href="properties-details.html">Nombre del Proyecto </a></h5>
                                <span class="price">#####</span>
                            </div>
                            <p><img src="<?php echo url('/'); ?>/Frontend/images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                        </div>
                    </div>
                </div>
                <!-- flat-item -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="flat-item">
                        <div class="flat-item-image">
                            <span class="for-sale rent">Alquiler</span>
                            <a href="properties-details.html"><img src="<?php echo url('/'); ?>/Frontend/images/flat/3.jpg" alt=""></a>
                            <div class="flat-link">
                                <a href="properties-details.html">Más Detalles</a>
                            </div>
                            <ul class="flat-desc">
                                <li>
                                    <img src="<?php echo url('/'); ?>/Frontend/images/icons/4.png" alt="">
                                    <span>450 sqft</span>
                                </li>
                                <li>
                                    <img src="<?php echo url('/'); ?>/Frontend/images/icons/5.png" alt="">
                                    <span>5</span>
                                </li>
                                <li>
                                    <img src="<?php echo url('/'); ?>/Frontend/images/icons/6.png" alt="">
                                    <span>3</span>
                                </li>
                            </ul>
                        </div>
                        <div class="flat-item-info">
                            <div class="flat-title-price">
                                <h5><a href="properties-details.html">Nombre del Proyecto </a></h5>
                                <span class="price">#####</span>
                            </div>
                            <p><img src="<?php echo url('/'); ?>/Frontend/images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                        </div>
                    </div>
                </div>
                <!-- flat-item -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="flat-item">
                        <div class="flat-item-image">
                            <a href="properties-details.html"><img src="<?php echo url('/'); ?>/Frontend/images/flat/4.jpg" alt=""></a>
                            <div class="flat-link">
                                <a href="properties-details.html">Más Detalles</a>
                            </div>
                            <ul class="flat-desc">
                                <li>
                                    <img src="<?php echo url('/'); ?>/Frontend/images/icons/4.png" alt="">
                                    <span>450 sqft</span>
                                </li>
                                <li>
                                    <img src="<?php echo url('/'); ?>/Frontend/images/icons/5.png" alt="">
                                    <span>5</span>
                                </li>
                                <li>
                                    <img src="<?php echo url('/'); ?>/Frontend/images/icons/6.png" alt="">
                                    <span>3</span>
                                </li>
                            </ul>
                        </div>
                        <div class="flat-item-info">
                            <div class="flat-title-price">
                                <h5><a href="properties-details.html">Nombre del Proyecto </a></h5>
                                <span class="price">#####</span>
                            </div>
                            <p><img src="<?php echo url('/'); ?>/Frontend/images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                        </div>
                    </div>
                </div>
                <!-- flat-item -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="flat-item">
                        <div class="flat-item-image">
                            <span class="for-sale">Venta</span>
                            <a href="properties-details.html"><img src="<?php echo url('/'); ?>/Frontend/images/flat/5.jpg" alt=""></a>
                            <div class="flat-link">
                                <a href="properties-details.html">Más Detalles</a>
                            </div>
                            <ul class="flat-desc">
                                <li>
                                    <img src="<?php echo url('/'); ?>/Frontend/images/icons/4.png" alt="">
                                    <span>450 sqft</span>
                                </li>
                                <li>
                                    <img src="<?php echo url('/'); ?>/Frontend/images/icons/5.png" alt="">
                                    <span>5</span>
                                </li>
                                <li>
                                    <img src="<?php echo url('/'); ?>/Frontend/images/icons/6.png" alt="">
                                    <span>3</span>
                                </li>
                            </ul>
                        </div>
                        <div class="flat-item-info">
                            <div class="flat-title-price">
                                <h5><a href="properties-details.html">Nombre del Proyecto </a></h5>
                                <span class="price">#####</span>
                            </div>
                            <p><img src="<?php echo url('/'); ?>/Frontend/images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                        </div>
                    </div>
                </div>
                <!-- flat-item -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="flat-item">
                        <div class="flat-item-image">
                            <a href="properties-details.html"><img src="<?php echo url('/'); ?>/Frontend/images/flat/6.jpg" alt=""></a>
                            <div class="flat-link">
                                <a href="properties-details.html">Más Detalles</a>
                            </div>
                            <ul class="flat-desc">
                                <li>
                                    <img src="<?php echo url('/'); ?>/Frontend/images/icons/4.png" alt="">
                                    <span>450 sqft</span>
                                </li>
                                <li>
                                    <img src="<?php echo url('/'); ?>/Frontend/images/icons/5.png" alt="">
                                    <span>5</span>
                                </li>
                                <li>
                                    <img src="<?php echo url('/'); ?>/Frontend/images/icons/6.png" alt="">
                                    <span>3</span>
                                </li>
                            </ul>
                        </div>
                        <div class="flat-item-info">
                            <div class="flat-title-price">
                                <h5><a href="properties-details.html">Nombre del Proyecto </a></h5>
                                <span class="price">#####</span>
                            </div>
                            <p><img src="<?php echo url('/'); ?>/Frontend/images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                        </div>
                    </div>
                </div>
                <!-- flat-item -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="flat-item">
                        <div class="flat-item-image">
                            <span class="for-sale rent">Alquiler</span>
                            <a href="properties-details.html"><img src="<?php echo url('/'); ?>/Frontend/images/flat/7.jpg" alt=""></a>
                            <div class="flat-link">
                                <a href="properties-details.html">Más Detalles</a>
                            </div>
                            <ul class="flat-desc">
                                <li>
                                    <img src="<?php echo url('/'); ?>/Frontend/images/icons/4.png" alt="">
                                    <span>450 sqft</span>
                                </li>
                                <li>
                                    <img src="<?php echo url('/'); ?>/Frontend/images/icons/5.png" alt="">
                                    <span>5</span>
                                </li>
                                <li>
                                    <img src="<?php echo url('/'); ?>/Frontend/images/icons/6.png" alt="">
                                    <span>3</span>
                                </li>
                            </ul>
                        </div>
                        <div class="flat-item-info">
                            <div class="flat-title-price">
                                <h5><a href="properties-details.html">Nombre del Proyecto </a></h5>
                                <span class="price">#####</span>
                            </div>
                            <p><img src="<?php echo url('/'); ?>/Frontend/images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                        </div>
                    </div>
                </div>
                <!-- flat-item -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="flat-item">
                        <div class="flat-item-image">
                            <a href="properties-details.html"><img src="<?php echo url('/'); ?>/Frontend/images/flat/8.jpg" alt=""></a>
                            <div class="flat-link">
                                <a href="properties-details.html">Más Detalles</a>
                            </div>
                            <ul class="flat-desc">
                                <li>
                                    <img src="<?php echo url('/'); ?>/Frontend/images/icons/4.png" alt="">
                                    <span>450 sqft</span>
                                </li>
                                <li>
                                    <img src="<?php echo url('/'); ?>/Frontend/images/icons/5.png" alt="">
                                    <span>5</span>
                                </li>
                                <li>
                                    <img src="<?php echo url('/'); ?>/Frontend/images/icons/6.png" alt="">
                                    <span>3</span>
                                </li>
                            </ul>
                        </div>
                        <div class="flat-item-info">
                            <div class="flat-title-price">
                                <h5><a href="properties-details.html">Nombre del Proyecto </a></h5>
                                <span class="price">#####</span>
                            </div>
                            <p><img src="<?php echo url('/'); ?>/Frontend/images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                        </div>
                    </div>
                </div>
                <!-- flat-item -->
                <div class="col-lg-4 col-12 d-none d-lg-block">
                    <div class="flat-item">
                        <div class="flat-item-image">
                            <span class="for-sale">Venta</span>
                            <a href="properties-details.html"><img src="<?php echo url('/'); ?>/Frontend/images/flat/9.jpg" alt=""></a>
                            <div class="flat-link">
                                <a href="properties-details.html">Más Detalles</a>
                            </div>
                            <ul class="flat-desc">
                                <li>
                                    <img src="<?php echo url('/'); ?>/Frontend/images/icons/4.png" alt="">
                                    <span>450 sqft</span>
                                </li>
                                <li>
                                    <img src="<?php echo url('/'); ?>/Frontend/images/icons/5.png" alt="">
                                    <span>5</span>
                                </li>
                                <li>
                                    <img src="<?php echo url('/'); ?>/Frontend/images/icons/6.png" alt="">
                                    <span>3</span>
                                </li>
                            </ul>
                        </div>
                        <div class="flat-item-info">
                            <div class="flat-title-price">
                                <h5><a href="properties-details.html">Nombre del Proyecto </a></h5>
                                <span class="price">#####</span>
                            </div>
                            <p><img src="<?php echo url('/'); ?>/Frontend/images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FEATURED FLAT AREA END -->



<!-- PORTAFOLIO AREA START -->
<div id="seccionportafolio" class="services-area pt-100 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-2 text-center">
                    <h2>PORTAFOLIO</h2>
                    
                </div>
            </div>
        </div>
       
    </div>
</div>
<!-- PORTAFOLIO AREA END -->




          <!--Footer section start-->
    <footer class="footer-section section" style="background-image: url(<?php echo url('/'); ?>/Frontend/)">
       
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

     
    </div>
    <!-- Body main wrapper end -->




    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="<?php echo url('/'); ?>/Frontend/js/vendor/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="<?php echo url('/'); ?>/Frontend/js/bootstrap.min.js"></script>
    <!-- Nivo slider js -->
    <script src="<?php echo url('/'); ?>/Frontend/lib/js/jquery.nivo.slider.js"></script>
     <!-- Maplace-active -->
     <script src="<?php echo url('/'); ?>/Frontend/js/maplace-active.js"></script>
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