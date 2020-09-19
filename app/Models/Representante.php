<?php

namespace App\Models;

use App\Models\Empresa;
use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{
    public $timestamps = false;


public function empresas(){
         return $this->hasMany(Empresa::class, 'representantes_id');
    }


}
