@extends('layouts.app')

@section('content')
{{-- 
 <div class="container-fluid mt--6">
    <form action="{{ route('empresa.proyecto.soli') }}" accept-charset="UTF-8" method="post" enctype="multipart/form-data">  

       <!--Middleware-->
    {!! csrf_field() !!}
      
      <div class="row">
   
        <div class="col-lg-6">

          <div class="card-wrapper">
            <!-- Form controls -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Datos generales</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                
              <!-- PARA QUE SIRVE : RUC -->
                  <div class="form-group">
                    <label class="form-control-label" for="ruc">RUC</label>
      <input type="number" value="{{old('ruc')}}" class="form-control @error('ruc') is-invalid @enderror" maxlength="50"  id="ruc" name="ruc" placeholder="">
                       @error('ruc')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                  </div>
                  <!-- PARA QUE SIRVE : Razon Social -->
                  <div class="form-group">
                    <label class="form-control-label" for="rasons_id">Razon Social</label>
                    <select class="form-control" id="rasons_id" name="rasons_id">
                                @foreach ($rasons as $rason)
                                     <option value={{$rason->id}}> {{$rason->title}}</option>
                                 @endforeach
                    </select> 
                        @error('rasons_id')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                         @endif
                  </div>
                  <!-- PARA QUE SIRVE : Nombre comercial -->
                  <div class="form-group">
                    <label class="form-control-label" for="nombrecomer">Nombre comercial</label>
      <input type="text" value="{{old('nombrecomer')}}" class="form-control @error('nombrecomer') is-invalid @enderror" maxlength="50"  id="nombrecomer" name="nombrecomer" placeholder="">
                       @error('nombrecomer')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                  </div>
                    <!-- PARA QUE SIRVE : Direccion -->
                   <div class="form-group">
                    <label class="form-control-label" for="direccion">Direccion</label>
      <input type="text" value="{{old('direccion')}}" class="form-control @error('direccion') is-invalid @enderror" maxlength="50"  id="direccion" name="direccion" placeholder="">
                       @error('direccion')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                  </div>
                  <!-- PARA QUE SIRVE : Representacion legal -->
                  <div class="form-group">
                    <label class="form-control-label" for="representantes_id">Representate legal</label>
                    <select class="form-control" id="representantes_id" name="representantes_id">
                                @foreach ($representantes as $representante)
                                     <option value={{$representante->id}}> {{$representante->title}}</option>
                                 @endforeach
                    </select> 
                        @error('representantes_id')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                         @endif
                  </div>
                  <!-- PARA QUE SIRVE : Celular 1 -->
                  <div class="form-group">
                    <label class="form-control-label" for="celularuno">Celular 1</label>
      <input type="number" value="{{old('celularuno')}}" class="form-control @error('celularuno') is-invalid @enderror" maxlength="50"  id="celularuno" name="celularuno" placeholder="">
                       @error('celularuno')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                  </div>
                  <!-- PARA QUE SIRVE : Celular 2 -->
                  <div class="form-group">
                    <label class="form-control-label" for="celulardos">Celular 2</label>
      <input type="number" value="{{old('celulardos')}}" class="form-control @error('celulardos') is-invalid @enderror" maxlength="50"  id="celulardos" name="celulardos" placeholder="">
                       @error('celulardos')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                  </div>
                  <!-- PARA QUE SIRVE : Telefono -->
                  <div class="form-group">
                    <label class="form-control-label" for="telefono"> Telefono </label>
      <input type="number" value="{{old('telefono')}}" class="form-control @error('telefono') is-invalid @enderror" maxlength="50"  id="telefono" name="telefono" placeholder="">
                       @error('telefono')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                  </div>
              <!-- PARA QUE SIRVE : Anexo 1 -->
                  <div class="form-group">
                    <label class="form-control-label" for="anexouno">Anexo 1</label>
      <input type="number" value="{{old('anexouno')}}" class="form-control @error('anexouno') is-invalid @enderror" maxlength="50"  id="anexouno" name="anexouno" placeholder="">
                       @error('anexouno')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                  </div>
                  <!-- PARA QUE SIRVE : Anexo 2 -->
                  <div class="form-group">
                    <label class="form-control-label" for="anexodos">Anexo 2</label>
      <input type="number" value="{{old('anexodos')}}" class="form-control @error('anexodos') is-invalid @enderror" maxlength="50"  id="anexodos" name="anexodos" placeholder="">
                       @error('anexodos')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                  </div>
                  <!-- PARA QUE SIRVE : email -->
                  <div class="form-group">
                    <label class="form-control-label" for="email"> Email </label>
      <input type="text" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" maxlength="50"  id="email" name="email" placeholder="">
                       @error('email')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                  </div>
<!-- PARA QUE SIRVE : Cantidad de empleados -->
                  <div class="form-group">
                    <label class="form-control-label" for="cantidademple">Cantidad de empleados</label>
      <input type="number" value="{{old('cantidademple')}}" class="form-control @error('cantidademple') is-invalid @enderror" maxlength="50"  id="cantidademple" name="cantidademple" placeholder="">
                       @error('cantidademple')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif

                  </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card-wrapper">
            <!-- Sizes -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Descripción del proyecto</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">


      <!-- PARA QUE SIRVE : Tipo de proyecto -->
                  <div class="form-group">
                    <label class="form-control-label" for="tipos_id">Tipo de proyecto</label>
                    <select class="form-control" id="tipos_id" name="tipos_id">
                                @foreach ($tipos as $tipo)
                                     <option value={{$tipo->id}}> {{$tipo->title}}</option>
                                 @endforeach
                    </select> 
                        @error('tipos_id')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                         @endif
                  </div>

                  <!-- PARA QUE SIRVE : LOGO DEL PROYECTO -->
                  <div class="card-body">

                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Logo del proyecto</h5>
                      <span class="h2 font-weight-bold mb-0">IMG</span>
                    </div>

                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-album-2"></i>
                      </div>
                    </div>

                  </div>


                   <p> <label for="imagen" class="mt-3 mb-0 text-sm" >
                        Imagen
                   <input class="form-control" type="file" id="imagen" name="imagen" >
                         @error('imagen')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                         @endif
                   </label></p>

                </div>


                <!-- PARA QUE SIRVE : Adquisicion de inmuebles -->
                  <div class="card-body">

                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Adquisicion de inmuebles</h5>
                      <span class="h2 font-weight-bold mb-0">PDF</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                      </div>
                    </div>
                  </div>



                   <p> <label for="avatar" class="mt-3 mb-0 text-sm" >
                        Adquisicion

                    <input class="form-control " type="file" id="avatar" name="avatar" >
                         @error('avatar')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                         @endif

                    </label></p>
                      
                </div>


                <!-- PARA QUE SIRVE : Subida de documentos importantes -->
                  <div class="card-body">

                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Subida de documentos importantes</h5>
                      <span class="h2 font-weight-bold mb-0">PDF</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                      </div>
                    </div>
                  </div>


        @for ($i = 0; $i < 3; $i++)
                   <p> <label for="avatar" class="mt-3 mb-0 text-sm" >
                        Documentos

                    <input class="form-control " type="file" id="avatar" name="avatar[{{ $i }}]" >
                         @error('avatar')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                         @endif

                    </label></p>
              @endfor
                      
                </div>




                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary mr-1">Guardar</button>
                    <button type="button" class="btn btn-secondary" onclick="window.history.back()">Cancelar</button>
                </div>

              </div>
            </div>
            

          </div>
        </div>

        
         </div>

                                              <!-- PARA QUE SIRVE : BALANCE -->

      <div class="row">
        <div class="col">
          <div class="card-wrapper">
            <!-- Custom form validation -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Balance de rentabilidad</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <div class="row">

                    <!-- PARA QUE SIRVE : Primera columna -->
                  <div class="col-lg-6">

                    <!-- PARA QUE SIRVE : GASTOS Y COSTOS DE VENTA  -->
                    <div class="form-group">
                    <label class="form-control-label" for="gastos"> Gastos y costos de venta</label>
      <input type="number" value="{{old('gastos')}}" class="form-control @error('gastos') is-invalid @enderror" maxlength="50"  id="gastos" name="gastos" placeholder="">
                       @error('gastos')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                  </div>

                  <!-- PARA QUE SIRVE :  Gastos operativos -->
                  <div class="form-group">
                    <label class="form-control-label" for="gastosope"> Gastos operativos</label>
      <input type="number" value="{{old('gastosope')}}" class="form-control @error('gastosope') is-invalid @enderror" maxlength="50"  id="gastosope" name="gastosope" placeholder="">
                       @error('gastosope')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                  </div>

                  <!-- PARA QUE SIRVE : Ingresos operativos -->
                  <div class="form-group">
                    <label class="form-control-label" for="ingresosope"> Ingresos operativos</label>
      <input type="number" value="{{old('ingresosope')}}" class="form-control @error('ingresosope') is-invalid @enderror" maxlength="50"  id="ingresosope" name="ingresosope" placeholder="">
                       @error('ingresosope')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                  </div>

                    <!-- PARA QUE SIRVE : Gastos financieros -->
                  <div class="form-group">
                    <label class="form-control-label" for="gastosfinan"> Gastos financieros </label>
      <input type="number" value="{{old('gastosfinan')}}" class="form-control @error('gastosfinan') is-invalid @enderror" maxlength="50"  id="gastosfinan" name="gastosfinan" placeholder="">
                       @error('gastosfinan')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                  </div>

                  <!-- PARA QUE SIRVE : Ingresos financieros -->
                  <div class="form-group">
                    <label class="form-control-label" for="ingresosfinan"> Ingresos financieros </label>
      <input type="number" value="{{old('ingresosfinan')}}" class="form-control @error('ingresosfinan') is-invalid @enderror" maxlength="50"  id="ingresosfinan" name="ingresosfinan" placeholder="">
                       @error('ingresosfinan')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                  </div>


                  </div>

                    <!-- PARA QUE SIRVE : Segunda columna -->
                  <div class="col-lg-6">
                    
                    <!-- PARA QUE SIRVE : Ingresos financieros -->
                  <div class="form-group">
                    <label class="form-control-label" for="impuestorent"> Impuestos a la renta </label>
      <input type="number" value="{{old('impuestorent')}}" class="form-control @error('impuestorent') is-invalid @enderror" maxlength="50"  id="impuestorent" name="impuestorent" placeholder="">
                       @error('impuestorent')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                  </div>

                  <!-- PARA QUE SIRVE : Ingresos financieros -->
                  <div class="form-group">
                    <label class="form-control-label" for="utineta"> Utilidad neta </label>
      <input type="number" value="{{old('utineta')}}" class="form-control @error('utineta') is-invalid @enderror" maxlength="50"  id="utineta" name="utineta" placeholder="">
                       @error('utineta')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                  </div>

                  </div>



                </div>
              </div>
            </div>
           

          </div>
        </div>
      </div>


         </form>
  </div>
         


 --}}


<div class="app-content content">
  <form action="{{ route('empresa.proyecto.soli') }}" accept-charset="UTF-8" method="post" enctype="multipart/form-data">  

       <!--Middleware-->
    {!! csrf_field() !!}
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h5 class="content-header-title float-left pr-1 mb-0">Agregar Proyecto</h5>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb p-0 mb-0">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Proyectos</a>
                                    </li>
                                    <li class="breadcrumb-item "><a href="#">Agregar  Proyecto</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

<!-- Basic Vertical form layout section start -->
<section id="basic-vertical-layouts">


    <div class="row match-height">
        
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-header pb-2" style="background-color: #c0e969">
                    <h4 class="card-title">Datos generales</h4>
                </div>
                
                 <div class="card-content">
                    
                    <div class="card-body">
                            <div class="row">
                             
                                    <div class="col-12">
                                        <div class="form-group">
                    <label class="form-control-label" for="ruc">RUC</label>
      <input type="number" value="{{old('ruc')}}" class="form-control @error('ruc') is-invalid @enderror" maxlength="50"  id="ruc" name="ruc" placeholder="">
                       @error('ruc')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                  </div>
                                    </div>



                                    <div class="col-12">
                                         <!-- PARA QUE SIRVE : Razon Social -->
                  <div class="form-group">
                    <label class="form-control-label" for="rasons_id">Razón Social</label>
                    <select class="form-control" id="rasons_id" name="rasons_id">
                                @foreach ($rasons as $rason)
                                     <option value={{$rason->id}}> {{$rason->title}}</option>
                                 @endforeach
                    </select> 
                        @error('rasons_id')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                         @endif
                  </div>
                                    </div>


<div class="col-12">
<!-- PARA QUE SIRVE : Nombre comercial -->
                  <div class="form-group">
                    <label class="form-control-label" for="nombrecomer">Nombre comercial</label>
      <input type="text" value="{{old('nombrecomer')}}" class="form-control @error('nombrecomer') is-invalid @enderror" maxlength="50"  id="nombrecomer" name="nombrecomer" placeholder="">
                       @error('nombrecomer')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                  </div></div>

                  <div class="col-12">
                    <!-- PARA QUE SIRVE : Direccion -->
                   <div class="form-group">
                    <label class="form-control-label" for="direccion">Direccion</label>
      <input type="text" value="{{old('direccion')}}" class="form-control @error('direccion') is-invalid @enderror" maxlength="50"  id="direccion" name="direccion" placeholder="">
                       @error('direccion')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                  </div>
                </div>

                <div class="col-12">
                  <!-- PARA QUE SIRVE : Representacion legal -->
                  <div class="form-group">
                    <label class="form-control-label" for="representantes_id">Representate legal</label>
                    <select class="form-control" id="representantes_id" name="representantes_id">
                                @foreach ($representantes as $representante)
                                     <option value={{$representante->id}}> {{$representante->title}}</option>
                                 @endforeach
                    </select> 
                        @error('representantes_id')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                         @endif
                  </div>
                </div>

                <div class="col-12">
                  <!-- PARA QUE SIRVE : Celular 1 -->
                  <div class="form-group">
                    <label class="form-control-label" for="celularuno">Celular 1</label>
      <input type="number" value="{{old('celularuno')}}" class="form-control @error('celularuno') is-invalid @enderror" maxlength="50"  id="celularuno" name="celularuno" placeholder="">
                       @error('celularuno')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                  </div>
                </div>

                <div class="col-12">
                  <!-- PARA QUE SIRVE : Celular 2 -->
                  <div class="form-group">
                    <label class="form-control-label" for="celulardos">Celular 2</label>
      <input type="number" value="{{old('celulardos')}}" class="form-control @error('celulardos') is-invalid @enderror" maxlength="50"  id="celulardos" name="celulardos" placeholder="">
                       @error('celulardos')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                  </div>
                </div>

                <div class="col-12">
                  <!-- PARA QUE SIRVE : Telefono -->
                  <div class="form-group">
                    <label class="form-control-label" for="telefono"> Telefono </label>
      <input type="number" value="{{old('telefono')}}" class="form-control @error('telefono') is-invalid @enderror" maxlength="50"  id="telefono" name="telefono" placeholder="">
                       @error('telefono')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                  </div>
                </div>

                <div class="col-12">
              <!-- PARA QUE SIRVE : Anexo 1 -->
                  <div class="form-group">
                    <label class="form-control-label" for="anexouno">Anexo 1</label>
      <input type="number" value="{{old('anexouno')}}" class="form-control @error('anexouno') is-invalid @enderror" maxlength="50"  id="anexouno" name="anexouno" placeholder="">
                       @error('anexouno')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                  </div>
                </div>

                <div class="col-12">
                  <!-- PARA QUE SIRVE : Anexo 2 -->
                  <div class="form-group">
                    <label class="form-control-label" for="anexodos">Anexo 2</label>
      <input type="number" value="{{old('anexodos')}}" class="form-control @error('anexodos') is-invalid @enderror" maxlength="50"  id="anexodos" name="anexodos" placeholder="">
                       @error('anexodos')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                  </div>
                </div>

                <div class="col-12">
                  <!-- PARA QUE SIRVE : email -->
                  <div class="form-group">
                    <label class="form-control-label" for="email"> Email </label>
      <input type="text" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" maxlength="50"  id="email" name="email" placeholder="">
                       @error('email')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                  </div>
                </div>

                <div class="col-12">
<!-- PARA QUE SIRVE : Cantidad de empleados -->
                  <div class="form-group">
                    <label class="form-control-label" for="cantidademple">Cantidad de empleados</label>
      <input type="number" value="{{old('cantidademple')}}" class="form-control @error('cantidademple') is-invalid @enderror" maxlength="50"  id="cantidademple" name="cantidademple" placeholder="">
                       @error('cantidademple')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                  </div>
                </div>
                                    


                                
                            </div>
                    </div>
                </div>
            
               
            </div>
        </div>

        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-header pb-2" style="background-color: #c0e969">
                    <h4 class="card-title">Descripción del Proyecto</h4>
                </div>
                <div class="card-content pt-2">
                    <div class="card-body">
                        <form class="form form-vertical">
                            <div class="form-body">
                                <div class="row">

                                 <div class="card-content">
                    
                    <div class="card-body">
                            <div class="row">
                             

                                <p> <label for="imagen" class="mt-3 mb-0 text-sm" >
                        Logo del proyecto
                   <input class="form-control" type="file" id="imagen" name="imagen" >
                         @error('imagen')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                         @endif
                   </label></p>
                                
                            </div>
                    </div>
                </div>



                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="tipos_id">Tipo de Proyecto Inmobiliario</label>
                                            <select data-placeholder="Selecciona el tipo de proyecto" class="select2-icons form-control" id="tipos_id" name="tipos_id">
                                                @foreach ($tipos as $tipo)
                                     <option value={{$tipo->id}}> {{$tipo->title}}</option>
                                 @endforeach
                                            </select>
                                             @error('tipos_id')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                         @endif
                                        </div>
                                    </div>



                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="codigo"> Codigo del Proyecto</label>
                                            <div class="position-relative has-icon-left">
                                                <input type="text" value="{{old('codigo')}}" class="form-control @error('codigo') is-invalid @enderror" maxlength="50"  id="codigo" name="codigo" placeholder="">
                                                <div class="form-control-position">
                                                    <i class="bx bx-search"></i>
                                                </div>

                                            </div>
                                            @error('codigo')
                                       <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                        @endif
                                        </div>
                                       
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="nombreproyect"> Nombre del proyecto</label>
                                            <div class="position-relative has-icon-left">
                                                <input type="text" value="{{old('nombreproyect')}}" class="form-control @error('nombreproyect') is-invalid @enderror" maxlength="50"  id="nombreproyect" name="nombreproyect" placeholder="">
                      
                                                <div class="form-control-position">
                                                    <i class="bx  bx-windows"></i>
                                                </div>
                                            </div>
                                            @error('nombreproyect')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="ventaesti"> Venta estimada</label>
                                            <div class="position-relative has-icon-left">
                                                <input type="number" value="{{old('ventaesti')}}" class="form-control @error('ventaesti') is-invalid @enderror" maxlength="50"  id="ventaesti" name="ventaesti" placeholder="">
                                                <div class="form-control-position">
                                                    <i class="bx bx-dollar-circle"></i>
                                                </div>
                                            </div>
                                         @error('ventaesti')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                                        </div>
                                    </div>
                                    
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="capital"> Capital necesario</label>
                                            <div class="position-relative has-icon-left">
                                                <input type="number" value="{{old('capital')}}" class="form-control @error('capital') is-invalid @enderror" maxlength="50"  id="capital" name="capital" placeholder="">
                                                <div class="form-control-position">
                                                    <i class="bx  bx-money"></i>
                                                </div>
                                            </div>
                                            @error('capital')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="rentabilidad"> Rentabilidad estimada</label>
                                            <div class="position-relative has-icon-left">
                                                 <input type="number" value="{{old('rentabilidad')}}" class="form-control @error('rentabilidad') is-invalid @enderror" maxlength="50"  id="rentabilidad" name="rentabilidad" placeholder="">
                                                <div class="form-control-position">
                                                    <i class="bx bx-dollar-circle"></i>
                                                </div>
                                            </div>
                                            @error('rentabilidad')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                                        </div>
                                    </div>
   
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- // Basic Vertical form layout section end -->

<!-- // Basic multiple Column Form section end -->
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header pb-2" style="background-color: #c0e969">
                    <h4 class="card-title">Documentos de garantia inmobiliaria</h4>
                </div>
                <div class="card-content pt-2">
                    <div class="card-body">
                            <div class="form-body">
                                <div class="row">

                          <div class="col-md-6 col-12">
                              <div class="card-content">
                                   <div class="card-body">
                                      <div class="row">
                                         <p> <label for="adquisicion" class="mt-3 mb-0 text-sm" >
                        Adquisicion de compra del inmueble
                   <input class="form-control" type="file" id="adquisicion" name="adquisicion" >
                         @error('adquisicion')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                         @endif
                   </label></p>
                                      </div>
                                  </div>
                                </div>
                                  </div>
                              </div>
                          </div>
                       </div>
                    </div>

                </div>
            </div>
        </div>
</section>

<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header pb-2" style="background-color: #c0e969">
                    <h4 class="card-title">Documentos Legales</h4>
                </div>
                <div class="card-content pt-2">
                    <div class="card-body">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                      
                                       <div class="card-content">
                    
                    <div class="card-body">
                            <div class="row">
                             

                                <p> <label for="estudiolegal" class="mt-3 mb-0 text-sm" >
                        Estudio Legal 
                   <input class="form-control" type="file" id="estudiolegal" name="estudiolegal" >
                         @error('estudiolegal')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                         @endif
                   </label></p>
                                
                            </div>
                    </div>
                </div>

                                    </div>

                                    <div class="col-md-6 col-12">
                                         <div class="card-content">
                    
                    <div class="card-body">
                            <div class="row">
                             

                                <p> <label for="estudiotribu" class="mt-3 mb-0 text-sm" >
                        Estudio tributario
                   <input class="form-control" type="file" id="estudiotribu" name="estudiotribu" >
                         @error('estudiotribu')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                         @endif
                   </label></p>
                                
                            </div>
                    </div>
                </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="card-content">
                    
                    <div class="card-body">
                            <div class="row">
                             

                                <p> <label for="tasacion" class="mt-3 mb-0 text-sm" >
                        Tasacion
                   <input class="form-control" type="file" id="tasacion" name="tasacion" >
                         @error('tasacion')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                         @endif
                   </label></p>
                                
                            </div>
                    </div>
                </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                         <div class="card-content">
                    
                    <div class="card-body">
                            <div class="row">
                             

                                <p> <label for="estudiocomer" class="mt-3 mb-0 text-sm" >
                        Estudio comercial
                   <input class="form-control" type="file" id="estudiocomer" name="estudiocomer" >
                         @error('estudiocomer')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                         @endif
                   </label></p>
                                
                            </div>
                    </div>
                </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                         <div class="card-content">
                    
                    <div class="card-body">
                            <div class="row">
                             

                                <p> <label for="estudioestruc" class="mt-3 mb-0 text-sm" >
                        Estudio de estructuras
                   <input class="form-control" type="file" id="estudioestruc" name="estudioestruc" >
                         @error('estudioestruc')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                         @endif
                   </label></p>
                                
                            </div>
                    </div>
                </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                         <div class="card-content">
                    
                    <div class="card-body">
                            <div class="row">
                             

                                <p> <label for="estudiofinan" class="mt-3 mb-0 text-sm" >
                        Estudio financiero
                   <input class="form-control" type="file" id="estudiofinan" name="estudiofinan" >
                         @error('estudiofinan')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                         @endif
                   </label></p>
                                
                            </div>
                    </div>
                </div>
                                    </div>

                                   
                                   <!-- PARA QUE SIRVE : DOCUEMNTO MUNICIPAÑ -->
<div class="col-md-6 col-12">
                                         <div class="card-content">
                    
                    <div class="card-body">
                            <div class="row">
                             

                                <p> <label for="documentomunicipal" class="mt-3 mb-0 text-sm" >
                       Documentomunicipal
                   <input class="form-control" type="file" id="documentomunicipal" name="documentomunicipal" >
                         @error('documentomunicipal')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                         @endif
                   </label></p>
                                
                            </div>
                    </div>
                </div>
                                    </div>

                                      <!-- PARA QUE SIRVE : Copia literal -->
<div class="col-md-6 col-12">
                                         <div class="card-content">
                    
                    <div class="card-body">
                            <div class="row">
                             

                                <p> <label for="copialiteral" class="mt-3 mb-0 text-sm" >
                        Copia literal
                   <input class="form-control" type="file" id="copialiteral" name="copialiteral" >
                         @error('copialiteral')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                         @endif
                   </label></p>
                                
                            </div>
                    </div>
                </div>
                                    </div>

<!-- PARA QUE SIRVE : MINUTA -->
<div class="col-md-6 col-12">
                                         <div class="card-content">
                    
                    <div class="card-body">
                            <div class="row">
                             

                                <p> <label for="minuta" class="mt-3 mb-0 text-sm" >
                        Minuta
                   <input class="form-control" type="file" id="minuta" name="minuta" >
                         @error('minuta')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                         @endif
                   </label></p>
                                
                            </div>
                    </div>
                </div>
                                    </div>

<!-- PARA QUE SIRVE : contrato de compra y venta -->
<div class="col-md-6 col-12">
                                         <div class="card-content">
                    
                    <div class="card-body">
                            <div class="row">
                             

                                <p> <label for="contratodecompra" class="mt-3 mb-0 text-sm" >
                        Contrato de compra y venta
                   <input class="form-control" type="file" id="contratodecompra" name="contratodecompra" >
                         @error('contratodecompra')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                         @endif
                   </label></p>
                                
                            </div>
                    </div>
                </div>
                                    </div>

<!-- PARA QUE SIRVE : Estado de gastos y costos de proyecto -->
<div class="col-md-6 col-12">
                                         <div class="card-content">
                    
                    <div class="card-body">
                            <div class="row">
                             

                                <p> <label for="estadogastos" class="mt-3 mb-0 text-sm" >
                        Estado de gastos y costos de proyecto
                   <input class="form-control" type="file" id="estadogastos" name="estadogastos" >
                         @error('estadogastos')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                         @endif
                   </label></p>
                                
                            </div>
                    </div>
                </div>
                                    </div>

<!-- PARA QUE SIRVE : Carta solicitud -->
<div class="col-md-6 col-12">
                                         <div class="card-content">
                    
                    <div class="card-body">
                            <div class="row">
                             

                                <p> <label for="cartasolicitud" class="mt-3 mb-0 text-sm" >
                        Carta solicitud
                   <input class="form-control" type="file" id="cartasolicitud" name="cartasolicitud" >
                         @error('cartasolicitud')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                         @endif
                   </label></p>
                                
                            </div>
                    </div>
                </div>
                                    </div>

<!-- PARA QUE SIRVE : Comprobante de depósito -->
<div class="col-md-6 col-12">
                                         <div class="card-content">
                    
                    <div class="card-body">
                            <div class="row">
                             

                                <p> <label for="comprobante" class="mt-3 mb-0 text-sm" >
                        Comprobante de depósito
                   <input class="form-control" type="file" id="comprobante" name="comprobante" >
                         @error('comprobante')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                         @endif
                   </label></p>
                                
                            </div>
                    </div>
                </div>
                                    </div>

<!-- PARA QUE SIRVE : Título de propiedad inmueble -->
<div class="col-md-6 col-12">
                                         <div class="card-content">
                    
                    <div class="card-body">
                            <div class="row">
                             

                                <p> <label for="titulo" class="mt-3 mb-0 text-sm" >
                        Título de propiedad inmueble
                   <input class="form-control" type="file" id="titulo" name="titulo" >
                         @error('titulo')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                         @endif
                   </label></p>
                                
                            </div>
                    </div>
                </div>
                                    </div>
                                      

                                   
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header pb-2" style="background-color: #c0e969">
                    <h4 class="card-title">Balance de la Rentabilidad</h4>
                </div>
                <div class="card-content pt-2 ">
                    <div class="card-body">
                        
                            <div class="form-body pt-2">
                                <div class="row">



                                    <div class="col-md-6 col-12">
                                        <div class="form-label-group">
          <input type="number" value="{{old('varlorcomer')}}" class="form-control @error('varlorcomer') is-invalid @enderror" maxlength="50"  id="varlorcomer" name="varlorcomer" placeholder="">
         <label class="form-control-label" for="varlorcomer"> Valor Real Comercia</label>

                       @error('varlorcomer')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif

                                        </div>
                                    </div>

              <div class="col-md-6 col-12">
                     <div class="form-label-group">
                  <input type="number" value="{{old('ventaesta')}}" class="form-control @error('ventaesta') is-invalid @enderror" maxlength="50"  id="ventaesta" name="ventaesta" placeholder="">
         <label class="form-control-label" for="ventaesta">VENTA ESTIMADA
</label>

                       @error('ventaesta')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                                        </div>
                                    </div>


                                    <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                             <input type="number" value="{{old('comprainmu')}}" class="form-control @error('comprainmu') is-invalid @enderror" maxlength="50"  id="comprainmu" name="comprainmu" placeholder="">

         <label class="form-control-label" for="comprainmu"> Compra inmueble</label>

                       @error('comprainmu')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                                        </div>
                                    </div>


                                    <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                            <input type="number" value="{{old('comisionbpi')}}" class="form-control @error('comisionbpi') is-invalid @enderror" maxlength="50"  id="comisionbpi" name="comisionbpi" placeholder="">
         <label class="form-control-label" for="comisionbpi"> COMISION DE BPI
</label>

                       @error('comisionbpi')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                                        </div>
                                    </div>


                                     <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                            <input type="number" value="{{old('gastoscomer')}}" class="form-control @error('gastoscomer') is-invalid @enderror" maxlength="50"  id="gastoscomer" name="gastoscomer" placeholder="">
         <label class="form-control-label" for="gastoscomer"> GASTOS COMERCIALES
</label>

                       @error('gastoscomer')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                                        </div>
                                    </div> 

                                    <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                             <input type="number" value="{{old('gastosmarke')}}" class="form-control @error('gastosmarke') is-invalid @enderror" maxlength="50"  id="gastosmarke" name="gastosmarke" placeholder="">
         <label class="form-control-label" for="gastosmarke"> GASTOS DE VENTA DE MARKETING
</label>

                       @error('gastosmarke')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                             <input type="number" value="{{old('comisioncorre')}}" class="form-control @error('comisioncorre') is-invalid @enderror" maxlength="50"  id="comisioncorre" name="comisioncorre" placeholder="">
         <label class="form-control-label" for="comisioncorre"> COMISION DEL CORREDOR INMOBILIARIO
</label>

                       @error('comisioncorre')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                                        </div>
                                    </div>


                                    <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                             <input type="number" value="{{old('desarrollopubli')}}" class="form-control @error('desarrollopubli') is-invalid @enderror" maxlength="50"  id="desarrollopubli" name="desarrollopubli" placeholder="">
         <label class="form-control-label" for="desarrollopubli"> DESARROLLO DE LA PUBLICIDAD
</label>

                       @error('desarrollopubli')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                                        </div>
                                    </div>


                                     <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                             <input type="number" value="{{old('comisioninmo')}}" class="form-control @error('comisioninmo') is-invalid @enderror" maxlength="50"  id="comisioninmo" name="comisioninmo" placeholder="">
         <label class="form-control-label" for="comisioninmo"> COMISION INMOBILIARIA

</label>

                       @error('comisioninmo')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                             <input type="number" value="{{old('gastosope')}}" class="form-control @error('gastosope') is-invalid @enderror" maxlength="50"  id="gastosope" name="gastosope" placeholder="">
         <label class="form-control-label" for="gastosope"> GASTOS OPERATIVOS
</label>

                       @error('gastosope')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                             <input type="number" value="{{old('publicidadinmu')}}" class="form-control @error('publicidadinmu') is-invalid @enderror" maxlength="50"  id="publicidadinmu" name="publicidadinmu" placeholder="">
         <label class="form-control-label" for="publicidadinmu"> PUBLICIDAD DEL INMUEBLE
</label>

                       @error('publicidadinmu')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                             <input type="number" value="{{old('gastosinmo')}}" class="form-control @error('gastosinmo') is-invalid @enderror" maxlength="50"  id="gastosinmo" name="gastosinmo" placeholder="">
         <label class="form-control-label" for="gastosinmo"> GASTOS ADMINISTRATIVOS INMOBILIA
</label>

                       @error('gastosinmo')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                             <input type="number" value="{{old('utibruta')}}" class="form-control @error('utibruta') is-invalid @enderror" maxlength="50"  id="utibruta" name="utibruta" placeholder="">
         <label class="form-control-label" for="utibruta">UTILIDAD BRUTA
</label>

                       @error('utibruta')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                                        </div>
                                    </div>


                                    <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                             <input type="number" value="{{old('gastosremo')}}" class="form-control @error('gastosremo') is-invalid @enderror" maxlength="50"  id="gastosremo" name="gastosremo" placeholder="">
         <label class="form-control-label" for="gastosremo"> GASTOS DE REMODELACION / CONSTRUCCION
</label>

                       @error('gastosremo')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                                        </div>
                                    </div>


                                    <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                             <input type="number" value="{{old('gastoslegales')}}" class="form-control @error('gastoslegales') is-invalid @enderror" maxlength="50"  id="gastoslegales" name="gastoslegales" placeholder="">
         <label class="form-control-label" for="gastoslegales"> GASTOS LEGALES
</label>

                       @error('gastoslegales')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                             <input type="number" value="{{old('impuestorenta')}}" class="form-control @error('impuestorenta') is-invalid @enderror" maxlength="50"  id="impuestorenta" name="impuestorenta" placeholder="">
         
         <label class="form-control-label" for="impuestorenta"> IMPUESTO A LA RENTA
</label>

                       @error('impuestorenta')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                           <input type="number" value="{{old('gastosadmin')}}" class="form-control @error('gastosadmin') is-invalid @enderror" maxlength="50"  id="gastosadmin" name="gastosadmin" placeholder="">
         <label class="form-control-label" for="gastosadmin">GASTOS ADMINISTRATIVOS BPI
</label>

                       @error('gastosadmin')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                            <input type="number" value="{{old('utioperativa')}}" class="form-control @error('utioperativa') is-invalid @enderror" maxlength="50"  id="utioperativa" name="utioperativa" placeholder="">
         <label class="form-control-label" for="utioperativa"> UTILIDAD OPERATIVA
</label>

                       @error('utioperativa')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                             <input type="number" value="{{old('utineta')}}" class="form-control @error('utineta') is-invalid @enderror" maxlength="50"  id="utineta" name="utineta" placeholder="">
         <label class="form-control-label" for="utineta"> UTILIDAD NETA
</label>

                       @error('utineta')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @endif
                                        </div>
                                    </div>
                                    
                                  
                                    

                               <div class="col form-group p-0 text-right">
   
    <input class="btn btn-primary" type="submit" value="Enviar postulacion de proyecto"></input>
    
</div>    
                                    
                                    
                                
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
                


            </div>
        </div>

      </form>
    </div>



@endsection