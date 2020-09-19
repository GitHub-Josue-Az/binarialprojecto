@extends('layouts.app')

@section('content')

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">

                <div class="content-header row">
                    <div class="content-header-left col-12  mt-1">
                        <div class="row breadcrumbs-top">
                            <div class="col-12">
                                <h5 class="content-header-title float-left pr-1 mb-0">Dashboard</h5>
                                <div class="breadcrumb-wrapper col-12">
                                    <ol class="breadcrumb p-0 mb-0">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                                        </li>
                                        <li class="breadcrumb-item active">Principal
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            
            <div class="content-body">
                   

               

                <!-- Widgets Statistics start -->
                <section id="widgets-Statistics">
                    <div class="row">
                        <div class="col-12  black mt-3 mb-2">
                           <h4 style="color:gray;"><strong>¡BIENVENIDO <span style="color:#cdf27e;">{{ auth()->user()->nombre }}</span> A NUESTRO SISTEMA BINARIAL EMPRESAS!</strong></h4> 
                            <hr>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="card text-center">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="badge-circle badge-circle-lg badge-circle-light-warning mx-auto my-1">
                                            <i class="bx bx-home-alt font-medium-6"></i>
                                        </div>
                                        <h4 class="text-muted mb-0 line-ellipsis">Proyectos</h4>
                                        <h2 class="mb-0">8</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="card text-center">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="badge-circle badge-circle-lg badge-circle-light-success mx-auto my-1">
                                            <i class="bx bx-user font-medium-5"></i>
                                        </div>
                                        <h4 class="text-muted mb-0 line-ellipsis">Inversionistas</h4>
                                        <h2 class="mb-0">4</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6">
                            <div class="card text-center">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="badge-circle badge-circle-lg badge-circle-light-info mx-auto my-1">
                                            <i class="bx bx-message-alt font-medium-5"></i>
                                        </div>
                                        <h4 class="text-muted mb-0 line-ellipsis">Mensajes</h4>
                                        <h2 class="mb-0">4</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-7 col-md-6 col-sm-12">
                            <div class="card collapse-icon accordion-icon-rotate">
                                <div class="card-header">
                                    <h1 class="card-title pl-1">¿Sabes a que tipo de proyecto postular?</h1>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="accordion" id="cardAccordion">
                                            <div class="card">
                                                <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" role="button">
                                                    <span class="collapsed collapse-title">Fondo Mutuo</span>
                                                </div>
                                                <div id="collapseOne" class="collapse pt-1" aria-labelledby="headingOne" data-parent="#cardAccordion">
                                                    <div class="card-body">
                                                        Cheesecake muffin cupcake dragée lemon drops tiramisu cake gummies chocolate cake. Marshmallow tart
                                                        croissant. Tart dessert tiramisu marzipan lollipop lemon drops.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card collapse-header">
                                                <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" role="button">
                                                    <span class="collapsed collapse-title">Fondo de Inverisón</span>
                                                </div>
                                                <div id="collapseTwo" class="collapse pt-1" aria-labelledby="headingTwo" data-parent="#cardAccordion">
                                                    <div class="card-body">
                                                        Pastry pudding cookie toffee bonbon jujubes jujubes powder topping. Jelly beans gummi bears sweet
                                                        roll bonbon muffin liquorice. Wafer lollipop sesame snaps.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card open">
                                                <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" role="button">
                                                    <span class="collapsed collapse-title">Proyecto Inversión</span>
                                                </div>
                                                <div id="collapseThree" class="collapse show pt-1" aria-labelledby="headingThree" data-parent="#cardAccordion">
                                                    <div class="card-body">
                                                        Sweet pie candy jelly. Sesame snaps biscuit sugar plum. Sweet roll topping fruitcake. Caramels
                                                        liquorice biscuit ice cream fruitcake cotton candy tart.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" role="button">
                                                    <span class="collapsed  collapse-title">Cartera diversificada</span>
                                                </div>
                                                <div id="collapseFour" class="collapse pt-1" aria-labelledby="headingFour" data-parent="#cardAccordion">
                                                    <div class="card-body">
                                                        Sweet pie candy jelly. Sesame snaps biscuit sugar plum. Sweet roll topping fruitcake. Caramels
                                                        liquorice biscuit ice cream fruitcake cotton candy tart.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                         
                        </div>

                    

                        
                        
                     
                        <div class=" text-center col-xl-5 col-12 dashboard-users">
                            <div class="card-header text-center  ">
                                <center><h4 class="">Tipo de Cambio</h4></center>
                               
                            </div>
                            <div class="row text-center">
                                
                               
                                       
                                        <div class="col-sm-6 col-12 dashboard-users-success">
                                            <div class="card text-center">
                                                <div class="card-content">
                                                    <div class="card-body py-1">
                                                        <div class="badge-circle badge-circle-lg badge-circle-light-success mx-auto mb-50">
                                                            <i class="bx bx-briefcase-alt font-medium-5"></i>
                                                        </div>
                                                        <div class="text-muted line-ellipsis">Compra</div>
                                                        <h3 class="mb-0">S/3.529</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12 dashboard-users-danger">
                                            <div class="card text-center">
                                                <div class="card-content">
                                                    <div class="card-body py-1">
                                                        <div class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto mb-50">
                                                            <i class="bx bx-user font-medium-5"></i>
                                                        </div>
                                                        <div class="text-muted line-ellipsis">Venta</div>
                                                        <h3 class="mb-0">S/3.533</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      
                                  
                                <!-- Revenue Growth Chart Starts -->
                            </div>


                                <div class="card">
                                    <div class="card-content">
                                        <div class="text-center card-body">
                                            <h4 class="card-title">NOVEDADES PARA EMPRESAS</h4>
                                        </div>
                                        <div id="carousel-example-card" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-example-card" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-example-card" data-slide-to="1"></li>
                                                <li data-target="#carousel-example-card" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner rounded-0" role="listbox">
                                                <div class="carousel-item active">
                                                    <div class="card-body">
                                                       <h2 class="text-center">Título</h2>
                                                        <p class="card-text">
                                                            Gummies bonbon apple pie fruitcake icing biscuit apple pie jelly-o sweet roll. Toffee sugar plum sugar
                                                            plum jelly-o jujubes bonbon dessert carrot cake.
                                                            Sweet pie candy jelly. Sesame snaps biscuit sugar plum. Sweet roll topping fruitcake. Caramels liquorice
                                                            biscuit ice cream fruitcake cotton candy tart.
                                                        </p>
                                                    </div>
                                                    <img src="<?php echo url('/'); ?>/Backend/images/slider/01.jpg" class="d-block w-100" alt="First slide">
                                                   
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="card-body">
                                                        <h2 class="text-center">Título</h2>
                                                         <p class="card-text">
                                                             Gummies bonbon apple pie fruitcake icing biscuit apple pie jelly-o sweet roll. Toffee sugar plum sugar
                                                             plum jelly-o jujubes bonbon dessert carrot cake.
                                                             Sweet pie candy jelly. Sesame snaps biscuit sugar plum. Sweet roll topping fruitcake. Caramels liquorice
                                                             biscuit ice cream fruitcake cotton candy tart.
                                                         </p>
                                                     </div>
                                                    <img src="<?php echo url('/'); ?>/Backend/images/slider/02.jpg" class="d-block w-100" alt="Second slide">
                                                    
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="card-body">
                                                        <h2 class="text-center">Título</h2>
                                                         <p class="card-text">
                                                             Gummies bonbon apple pie fruitcake icing biscuit apple pie jelly-o sweet roll. Toffee sugar plum sugar
                                                             plum jelly-o jujubes bonbon dessert carrot cake.
                                                             Sweet pie candy jelly. Sesame snaps biscuit sugar plum. Sweet roll topping fruitcake. Caramels liquorice
                                                             biscuit ice cream fruitcake cotton candy tart.
                                                         </p>
                                                     </div>
                                                    <img src="<?php echo url('/'); ?>/Backend/images/slider/03.jpg" class="d-block w-100" alt="Third slide">
                                                  
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carousel-example-card" role="button" data-slide="prev">
                                                <span class="bx bx-chevron-left icon-prev" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carousel-example-card" role="button" data-slide="next">
                                                <span class="bx bx-chevron-right icon-next" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                            
                          
                        </div>
                        
                        
                       
                    </div>

               
                </section>
                <!-- Widgets Statistics End -->



            </div>
        </div>
    </div>
    <!-- END: Content-->


@endsection




