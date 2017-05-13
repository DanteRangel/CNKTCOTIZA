<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Direccion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Direccion', function (Blueprint $table) {


            $table->increments('id');  
            $table->string('Calle'); 
            $table->string('NoInterior');
            $table->string('NoExterior');
            $table->string('Colonia'); 
            $table->string('Manzana'); 
            $table->string('MunicipioDelegacion');
            $table->string('Ciudad');
            $table->string('CodigoPostal',5); 
            $table->string('Pais'); 
           // $table->timestamps();

             $table->integer('id_CapitalHumano')->unsigned();
             $table->integer('id_Empresa')->unsigned();
            $table->foreign('id_CapitalHumano')->references('id')->on('CapitalHumano');
            $table->foreign('id_Empresa')->references('id')->on('Empresa');
  
        });
    

 

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::drop('Direccion');
    }
}
