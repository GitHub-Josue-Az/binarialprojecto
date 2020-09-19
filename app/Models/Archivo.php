<?php

namespace App\Models;

use App\Models\Proyecto;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
   
  public $timestamps = false;
  
/*protected $fillable = ['documentos', 'usuarios_id', 'proyectos_id', ];*/
    


     public function proyecto() {
        return $this->belongsTo(Proyecto::class, 'proyectos_id');
    }


     public function usuario() {
        return $this->belongsTo(Usuario::class, 'usuarios_id');
    }


   


}
