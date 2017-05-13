<?php

namespace CNKTCOTIZA;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table="CapitalHumano";
    protected $fillable = [
        'Nombres', 'apellidoPaterno', 'apellidoMaterno','CURP','NoSeguroSocial','RFC','id_Trabajador','TipoPermiso','password',
    ];
    public $timestamps =false; 

    public function direccion(){

            return $this->hasMany('CNKTCOTIZA\Direccion','id_CapitalHumano','id');
    }

}
