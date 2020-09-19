<?php

namespace App\Models;

use App\Models\Empresa;
use Illuminate\Database\Eloquent\Model;

class Rason extends Model
{
    public $timestamps = false;



    public function empresas(){
         return $this->hasMany(Empresa::class, 'rasons_id');
    }


}
