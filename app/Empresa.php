<?php

namespace CNKTCOTIZA;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table="Empresa";
       protected $fillable = [  'id','Nombre' ,'RazonSocial', 'RFC',
       ];


       public function direccion(){

       		return $this->hasMany('CNKTCOTIZA\Direccion','id_Empresa');
       }


}
