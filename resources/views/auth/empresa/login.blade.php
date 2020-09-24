

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
     <meta charset="utf-8" >
    <meta http-equiv="Content-Type" content="aplication/json">
    <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">
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



<body >
    <!--Navbar -->


                                                <form  method="POST" action="/login">
                                                    {!! csrf_field() !!}
                                                    <div class="form-group mb-50">
                                                        <label class="text-bold-600" for="usuario">Correo</label>
                                                        <input class="form-control" placeholder="correo" id="usuario" name="usuario" type="email">
                                                    <div class="form-group">
                                                        <label class="text-bold-600" for="password">Contraseña</label>
                                                       <input class="form-control" id="password" name="password" placeholder="Password" type="password">placeholder="Ingresa tu contraseña">
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