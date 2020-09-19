<?php

namespace App\Models;

use App\Models\Archivo;
use App\Models\Empresa;
use App\Models\Rason;
use App\Models\Representante;
use App\Models\Tipo;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    
protected $fillable = ['codigo', 'nombreproyect', 'ventaesti', 'capital','rentabilidad','deleted','status','tipos_id','varlorcomer','comprainmu', 'comisioncorre', 'comisioninmo', 'publicidadinmu','utibruta','gastoslegales',
'utideimpu', 'gastosadmin', 'utineta','empresas_id','utioperativa','ventaesta', 'gastoscomer', 'comisionbpi','gastosmarke','desarrollopubli','gastosope',
 'gastosinmo', 'gastosremo','impuestorenta','logo',];
    

    public function tipo() {
        return $this->belongsTo(Tipo::class, 'tipos_id');
    }
    

     public function empresa() {
        return $this->belongsTo(Empresa::class, 'empresas_id');
    }

     public function archivos() {
        return $this->hasMany(Archivo::class, 'proyectos_id');
    }


     /*public function usuario() {
        return $this->belongsTo(Usuario::class, 'usuarios_id');
    }*/


    public function getStatusTagAttribute() {
        switch ($this->status){
            case '1': 
                return '<span class="text-warning"> Pendiente </span>';

             case '2': 
                return '<span class="text-success"> Aceptado </span>';

            default : 
                return '<span class="text-danger">Rechazado!</span>';
        }
    }    

}
