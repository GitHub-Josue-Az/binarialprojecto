<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    public $timestamps = false;


    public function proyectos(){
         return $this->hasMany(Proyecto::class, 'tipos_id');
    }

    
}
