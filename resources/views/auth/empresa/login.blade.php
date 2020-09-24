

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Login-BINARIAL</title>
    <link rel="apple-touch-icon" href="<?php echo url('/'); ?>/Backend/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo url('/'); ?>/Backend/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/Backend/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/Backend/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/Backend/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/Backend/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/Backend/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/Backend/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/Backend/css/themes/semi-dark-layout.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/Backend/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/Backend/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/Backend/assets/css/style.css">
    <!-- END: Custom CSS-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<!-- END: Head-->


<!-- BEGIN: Body-->



<body class="vertical-layout vertical-menu-modern 1-column  navbar-sticky footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!--Navbar -->

  <!--/.Navbar -->
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            
            <div class="content-header row">
                
            </div>
            <div class="content-body">
                <!-- login page start -->
             
                <section id="auth-login" class="row flexbox-container">
                    <div class="col-xl-10 col-12">
                        <div class="card bg-authentication mb-0">
                            <nav class=" navbar navbar-expand-lg navbar-dark info-color">
                                <a class="navbar-brand" href="#"><img width="200" src="<?php echo url('/'); ?>/Frontend/images/logo/logo.png" alt="">
                                </a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                                  aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                                  <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                  <ul class="navbar-nav ml-auto">
                                    <li class="nav-item ">
                                      <a class="nav-link" href="#">
                                        <i class="fa fa-envelope pr-1"></i>binarial@gmail.com
                                        <span class="sr-only">(current)</span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="#">
                                        <i class="fa fa-phone pr-1"></i>+519994538755</a>
                                    </li>
                                  
                                  </ul>
                                </div>
                              </nav>
                            <div class="row m-0">
                                <!-- left section-login -->
                                
                                <div class="col-md-6 col-12 px-0">
                                    <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
                                        <div class="card-header pb-1">
                                            <div class="card-title">
                                                <h4 class="text-center mb-2">Ingresar</h4>
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body">
                                                
                                                
                                                <form method="POST" action="{{ route('login') }}">
                                                     @csrf
                                                    <div class="form-group mb-50">
                                                        <label class="text-bold-600" for="usuario">Correo</label>
                                                        <input class="form-control" placeholder="usuario" id="usuario" name="usuario" type="text"></div>
                                                    <div class="form-group">
                                                        <label class="text-bold-600" for="password">Contraseña</label>
                                                        <input class="form-control" id="password" name="password" placeholder="Password" type="password">
                                                    </div>
                                                    <div class="form-group d-flex flex-md-row flex-column justify-content-between align-items-center">
                                                        <div class="text-left">
                                                            <div class="checkbox checkbox-sm">
                                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                                <label class="checkboxsmall" for="exampleCheck1"><small>Mantenerme Conectado</small></label>
                                                            </div>
                                                        </div>
                                                        <div class="text-right"><a href="" class="card-link"><small>Olvidaste Contraseña?</small></a></div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary glow w-100 position-relative">Login<i id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>
                                                    <div class="divider">
                                                        <div class="divider-text text-uppercase text-muted"><small>O INGRESAR CON</small>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-md-row flex-column justify-content-around">
                                                        <a href="#" class="btn btn-social btn-google btn-block font-small-3 mr-md-1 mb-md-0 mb-1">
                                                            <i class="bx bxl-google font-medium-3"></i><span class="pl-50 d-block text-center">Google</span></a>
                                                        <a href="#" class="btn btn-social btn-block mt-0 btn-facebook font-small-3">
                                                            <i class="bx bxl-facebook-square font-medium-3"></i><span class="pl-50 d-block text-center">Facebook</span></a>
                                                    </div>
                                                </form>
                                                

<br>                                                <div class="text-center"><small class="mr-25">¿Aún no tienes cuenta?</small><a href=""><small>Registrarse</small></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- right section image -->
                                <div class="col-md-6 d-md-block d-none text-center align-self-center p-3">
                                    <div class="card-content">
                                        <h3>Bienvenido al Sistema Binarial</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit nihil voluptatibus fuga asperiores, autem impedit ipsum cum delectus temporibus nesciunt laboriosam architecto.</p>
                                        <img class="img-fluid" src="<?php echo url('/'); ?>/Backend/images/pages/login.png" alt="branding logo">
                                    </div>
                                </div>
                                    
                                
                            </div>
                       
                        </div>
                    </div>
                </section>
                <!-- login page ends -->



                
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?php echo url('/'); ?>/Backend/vendors/js/vendors.min.js"></script>
    <script src="<?php echo url('/'); ?>/Backend/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
    <script src="<?php echo url('/'); ?>/Backend/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
    <script src="<?php echo url('/'); ?>/Backend/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo url('/'); ?>/Backend/js/scripts/configs/vertical-menu-light.js"></script>
    <script src="<?php echo url('/'); ?>/Backend/js/core/app-menu.js"></script>
    <script src="<?php echo url('/'); ?>/Backend/js/core/app.js"></script>
    <script src="<?php echo url('/'); ?>/Backend/js/scripts/components.js"></script>
    <script src="<?php echo url('/'); ?>/Backend/js/scripts/footer.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>