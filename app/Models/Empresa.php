<?php

namespace App\Models;

use App\Models\Proyecto;
use App\Models\Rason;
use App\Models\Representante;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{

  
/*protected $fillable = ['documentos', 'usuarios_id', 'proyectos_id', ];*/
    


     public function proyectos() {	
        return $this->hasMany(Proyecto::class, 'empresas_id');
    }


     public function usuario() {
        return $this->belongsTo(Usuario::class, 'usuarios_id');
    }


    public function rason() {
        return $this->belongsTo(Rason::class, 'rasons_id');
    }
    
    public function representante() {
        return $this->belongsTo(Representante::class, 'representantes_id');
    }

}
