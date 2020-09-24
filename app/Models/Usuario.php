<?php

namespace App\Models;

use App\Models\Proyecto;
use App\Models\Role;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;



    protected $fillable = [
        'nombre', 'usuario', 'password', 'roles_id', 'created_at', 'updated_at', 'deleted', 
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    public function setPasswordAttribute($password) {
        return $this->attributes['password'] = bcrypt($password);
    }
    
    public function role() {
        return $this->belongsTo(Role::class, 'roles_id');
    }
    
    /*public function archivos(){
        return $this->hasMany(Proyecto::class,'usuarios_id');
    }*/
       


    public function empresas(){
        return $this->hasMany(Empresa::class,'usuarios_id');
    }

    public function archivos(){
        return $this->hasMany(Archivo::class,'usuarios_id');
    }

    
    /*public function getIsAdminAttribute() {
        return $this->role->id === 3;
    }*/

    public function getIsEmpresaAttribute() {
        return $this->role->id === 1;
    }

    public function getIsInvesionistaAttribute() {
        return $this->role->id === 2;
    }
        
    /* public function getStatusTagAttribute() {
        switch ($this->status){
            case '1': 
                return '<span class="badge badge-success"> Aceptado </span>';

             case '2': 
                return '<span class="badge badge-success"> Rechazado </span>';

            default : 
                return '<span class="badge badge-secondary">Evaluación</span>';
        }
    } */   



}



