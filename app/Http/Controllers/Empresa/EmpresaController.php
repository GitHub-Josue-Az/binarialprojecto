<?php

namespace App\Http\Controllers\Empresa;

use App\Http\Controllers\Controller;
use App\Models\Archivo;
use App\Models\Proyecto;
use App\Models\Rason;
use App\Models\Representante;
use App\Models\Tipo;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmpresaController extends Controller
{
    

     public function __construct()
    {
        $this->middleware('empresa');
    }


    public function index()
    {

        //GET trae una coleccion, en caso quieras traer todos los usuarios con sus respectivos proyectos 
        $proyectos = Proyecto::with('empresa')->where('empresas_id',1)->get();


        return view('empresa.index',compact('proyectos'));
       /* return $proyectos;*/
    }

    public function solicitud()
    {

         $rasons= Rason::all();
         $representantes= Representante::all();
         $tipos= Tipo::all();

        return view('empresa.solicitud',compact('tipos','rasons','representantes'));
    }


 public function store(Request $request)
    {


           $request->validate([


                 'imagen' => 'required', 
                'codigo' => 'required',
                'nombreproyect' => 'required|max:45',
                'ventaesti' => 'required|max:100',
                'capital' => 'required',
                'rentabilidad' => 'required|max:100',
                'tipos_id' => 'required|max:100',
                'varlorcomer' => 'required|max:100',
                'comprainmu' => 'required',
                'comisioncorre' => 'required',
                'comisioninmo' => 'required',
                'publicidadinmu' => 'required',
                'utibruta' => 'required',
                'gastoslegales' => 'required|max:45',
               
                'gastosadmin' => 'required',
                'utioperativa' => 'required',
                'utineta' => 'required',     
               
                 'ventaesta' => 'required',
                 'gastoscomer' => 'required',
                 'comisionbpi' => 'required',
                 'gastosmarke' => 'required',
                 'desarrollopubli' => 'required',
                 'gastosope' => 'required',
                 'gastosinmo' => 'required',
                 'gastosremo' => 'required',
                 'impuestorenta' => 'required',

                 'tasacion' => 'required',
                 'estudiolegal' => 'required',
                 'impuestorenta' => 'required',
                 'estudiotribu' => 'required',
                 'estudiocomer' => 'required',
                 'estudiofinan' => 'required',
                 'estudioestruc' => 'required',
                 'adquisicion' => 'required',

            ]);

         $usuarioid  = auth()->user()->id;

         $empresasid = auth()->user()->empresas[0]->id;

         if($request->hasFile('imagen') ){
               $imager = $request->file('imagen')->store('proyecto');
            $request->merge(['logo' => $imager]);

             $request->request->add(['empresas_id' => $empresasid ]);  // Student
            $proyect =  Proyecto::create($request->all());


    if ($request->hasFile('tasacion')) {
             
              $tasacio=$request->file('tasacion')->store('empresa/tasacion' );
              $estudiolega=$request->file('estudiolegal')->store('empresa/estudiolegal' );
             $estudiotri= $request->file('estudiotribu')->store('empresa/estudiotribu' );
             $estudiocome= $request->file('estudiocomer')->store('empresa/estudiocomer' );
             $estudiofina= $request->file('estudiofinan')->store('empresa/estudiofinan' );
             $estudioestru= $request->file('estudioestruc')->store('empresa/estudioestruc' );
            $adquisicio=  $request->file('adquisicion')->store('empresa/adquisicion' );

                     $pro =new Archivo;
                     $pro->tasacion=$tasacio;
                     $pro->estudiolegal=$estudiolega;
                     $pro->estudiotribu=$estudiotri;
                     $pro->estudiocomer=$estudiocome;
                     $pro->estudiofinan=$estudiofina;
                     $pro->estudioestruc=$estudioestru;
                     $pro->adquisicion=$adquisicio;
                     $pro->usuarios_id=$usuarioid;
                     $pro->proyectos_id=$proyect->id;
                     $pro->save();  

            }
             
        }
    


        return redirect()->route('empresa.proyectos')->with('success', 'Registro guardado satisfactoriamente');
    }

        
    public function show($id){
            return 1;
    }   

    public function edit($id){
        return 2;
    }  

     public function update(Request $request, $id){
            return 3;
    }   

    public function perfil(){
            return view('empresa.perfil');
    }   


    public function destroy($id){
        return 4;
    }    


        public function image($id) {
        
                $proyecto = Proyecto::findOrFail($id);
        
                 $content = Storage::get($proyecto->logo);
                 $mimetype = Storage::mimeType($proyecto->logo);
                    $size = Storage::size($proyecto->logo);
        
                return response($content)   // https://laravel.com/docs/5.4/responses
                         ->header('Content-Type', $mimetype)
                           ->header('Content-Length', $size);
            }



}
