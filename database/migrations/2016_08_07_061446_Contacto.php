<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contacto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
              Schema::create('Contacto', function (Blueprint $table) {


            $table->increments('id');
            $table->string('Nombre'); 

            $table->string('ApellidoPaterno');
            $table->string('ApellidoMaterno');
            $table->string('TelefonoCasa');
            $table->string('TelefonoCel1');
            $table->string('TelefonoCel2');

            $table->string('TelefonoNextel'); 
            $table->string('TelefonoTrabajo');

            $table->string('CorreoPersonal')->unique();
            $table->string('CorreoPersonal2')->unique();
            $table->string('CorreoEmpresa')->unique();
            $table->string('PuestoEmpresa');
           // $table->timestamps(); 
             $table->integer('id_direccion')->unsigned();
            $table->foreign('id_direccion')->references('id')->on('Direccion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Contacto');
    }
}
