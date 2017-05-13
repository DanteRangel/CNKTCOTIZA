<?php

namespace CNKTCOTIZA;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table="Contacto";
       protected $fillable = [
     'id' ,'id_direccion' ,'Nombre' ,  'ApellidoPaterno','ApellidoMaterno','TelefonoCasa','TelefonoCel1','TelefonoCel2',
  'TelefonoTrabajo','TelefonoNextel','CorreoPersonal','CorreoPersonal2','CorreoEmpresa','PuestoEmpresa' ,
    ];

  public $timestamps =false;
  
    public function direccion(){

    	return $this->hasOne('CNKTCOTIZA\Direccion','id_direccion','id');
    }
}
