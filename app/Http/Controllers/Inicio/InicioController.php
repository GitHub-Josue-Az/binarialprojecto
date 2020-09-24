<?php

namespace App\Http\Controllers\Inicio;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class InicioController extends Controller
{

    public function __construct()
    {
        /*$this->middleware('auth');*/
    }


    public function index()
    {
        return view('inicio.index');
    }

    public function empresa()
    {
        return view('inicio.empresa');
    }

    public function inversionista()
    {
        return view('inicio.inversionista');
    }



    public function pruebita2()
    {

        $i=1;
        for ($i=1; $i < 2; $i++) { 
           $cupones=Usuario::findOrFail($i);
           $jeje = $cupones->password;
           $data = DB::table("usuarios")->where('id', $i)->update(array("password" => bcrypt($jeje)));
        }


        return $jeje;
    }


 public function pruebita3()
    {

       $jeje = Usuario::all();


        return $jeje;
    }

    public function logii(Request $request)
{

    return 1;
}


}
