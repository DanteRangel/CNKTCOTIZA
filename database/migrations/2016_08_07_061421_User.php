<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                     Schema::create('CapitalHumano', function (Blueprint $table) {


            $table->increments('id');
            $table->string('Nombres');
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->string('NoSeguroSocial')->unique();
            $table->string('id_Trabajador')->unique();
            $table->string('password');
            
            $table->string('CURP')->unique();
            $table->string('RFC')->unique(); 
$table->rememberToken();
            $table->integer('TipoPermiso'); 
  
        });

                     
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::drop('CapitalHumano');
    }
}
