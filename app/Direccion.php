<?php

namespace CNKTCOTIZA;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    
	protected $table="Direccion";
	   protected $fillable = [
      'id','id_CapitalHumano','id_Empresa','Calle','NoInterior', 'NoExterior','Colonia','Manzana','MunicipioDelegacion','Ciudad','CodigoPostal','Pais', 
 ];

  public $timestamps =false;
  
      public function user(){




      	return $this->belongsTo('CNKTCOTIZA\User','id','id_CapitalHumano');
      }

      public function empresa(){

      	return $this->belongsTo('CNKTCOTIZA\Empresa','id','id_Empresa');
      }




      public function contacto(){

      	return $this->hasOne('CNKTCOTIZA\Contacto','id_direccion','id');


      }



}




