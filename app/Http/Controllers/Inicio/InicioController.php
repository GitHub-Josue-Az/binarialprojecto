<?php

namespace App\Http\Controllers\Inicio;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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


    public function carbonss(){       

       /*$dt = new Carbon('2020-12-31');                       
       $diasmesto = $dt->daysInMonth; */ 

       $diasstwo = Carbon::now('America/Lima');

 
       $mesAdelantadoto = $diasstwo->month;             
       $diasmestwo = $diasstwo->daysInMonth; 


       if ($diasstwo->day == $diasmestwo) {

            $diaAdelantadot = $diasstwo->addDay();       
            $mesAdelantadot = $diaAdelantadot->month;  

          $cumpler  = Usuario::whereRaw('month(created_at) = '.$mesAdelantadot)            
                            ->whereRaw('day(created_at) ='.$diaAdelantadot->day)->get(); 
       
          return $cumpler;
       }

       $diass = Carbon::now();  
       $diaAdelantado = $diass->addDay();       
       $mesAdelantado = $diaAdelantado->month;      

       $cumples  = Usuario::whereRaw('month(created_at) = '.$mesAdelantado)             
                            ->whereRaw('day(created_at) ='.$diaAdelantado->day)->get();  

        return $cumples;
    }


    public function poiu(Request $request){

      $recipients= ['dRuNEy3TRXmzylm8pX3HoG:APA91bHmqmnr2teUVR6fmJgCihkTLCUP2ggvAvjFX1Ss8Im60tig2ptLyvOTS2QRexFM3_8mfSjIVZvK-uqd_ch8f21V2MybcJELk2CpFuDwBPfnOANT_mGlg-ENK9sUTY4oc_obtdMy'];

      fcm()
        ->to($recipients) 
        ->notification([
            'title' => 'Bina',
            'body' => 'Bina',
        ])
        ->send();

        return back();
    }



}
