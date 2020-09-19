<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Head    ESTILOS --> 
    @include('partials.head')
</head>
<body class="vertical-layout vertical-menu-modern 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">


         <!-- Header  BARRA DE ARRIBA--> 
            @include('partials.header')
    

         <!-- Sidebar  BARRA DE LA MANO DERECHA-->
            @include('partials.slider')

             @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            <a class="close" data-dismiss="alert" href="#">×</a>{{ session('success') }}
                        </div>
                    @endif
                    
                    @if ($errors->count() > 0)
                        <div class="alert alert-danger">
                            <ul class="list-unstyled">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @yield('content')


               <!-- Footer BARRA DE ABAJO NO HAY NADA-->
              @include('partials.footer')
          

          </body>
</html>
