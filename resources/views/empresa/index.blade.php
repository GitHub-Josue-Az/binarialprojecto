@extends('layouts.app')

@section('content')



 <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h5 class="content-header-title float-left pr-1 mb-0">Mis Proyectos</h5>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb p-0 mb-0">
                                    <li class="breadcrumb-item"><a href=""><i class="bx bx-home-alt"></i></a>
                                    </li>
                                   
                                    <li class="breadcrumb-item"><a href="#">Proyectos</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">Mis proyectos
                                    </li>
                                    
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
             
               


                
                <!-- table success start -->
                <section id="table-success">
                    <div class="card">
                        <!-- datatable start -->

                        <div class="card-header  pb-3">
                            <!-- head -->
                            <h5 class="card-title">Proyectos Inmobiliarios</h5>
                            <!-- Single Date Picker and button -->
                            <div class="heading-elements ">
                                <ul class="list-inline mb-0">
                                    <li>
                                        <fieldset class="has-icon-left">
                                            <input type="text" class="form-control single-daterange" />
                                            <div class="form-control-position">
                                                <i class="bx bx-calendar font-medium-1"></i>
                                            </div>
                                        </fieldset>
                                    </li>
                                    <a href="{{ route('empresa.solicitar') }}" class="btn btn-primary"><i class="fas fa-plus"></i> POSTULAR PROYECTO</a>
                                </ul>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="table-extended-success" class="table mb-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Logo</th>
                                        <th>NOMBRE</th>
                                        <th>CÓDIGO</th>
                                        <th>TIPO</th>
                                        <th>Capital</th>
                                        <th>ESTADO</th>
                                        <th>ACCIÓN</th>
                                    </tr>
                                </thead>
                                <tbody>
                  
                     </tr>



                                     @foreach ($proyectos as $proyecto)

                                    <tr>
                    <td><img class="rounded-circle mr-1" src="{{route('empresa.proyecto.image', [$proyecto->id])}}" width="130px" height="120px" ></td>
                    <td> {{ $proyecto->nombreproyect }} </td> 
                    <td> {{ $proyecto->codigo }} </td> 
                   <td> {{ $proyecto->tipo->title }} </td> 
                   <td> {{ $proyecto->capital }} </td> 
                    <td>{!! $proyecto->statusTag !!}</td>
                    <td>
                          <div class="dropdown">
                              <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></span>
                             <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ route('empresa.proyecto.show', [$proyecto->id]) }}"><i class="bx bx-file-find mr-1"></i>Ver Detalles</a>
                                <a class="dropdown-item" href="{{ route('empresa.proyecto.edit', [$proyecto->id]) }}"><i class="bx bx-edit-alt mr-1"></i>Solicitar Edición</a>
<form style="display:inline" method='POST' action="{{ route('empresa.proyecto.destroy',[$proyecto->id]) }}">
                      {!! method_field('DELETE') !!}
                      {!! csrf_field() !!}
                                 <a class="dropdown-item" type="submit"><i class="bx bx-trash mr-1"></i>Solicitar Eliminación</a>
                               </form>   
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                   
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- datatable ends -->
                    </div>
                </section>
                <!-- table success ends -->
               

                
            </div>
        </div>
    </div>



@endsection

