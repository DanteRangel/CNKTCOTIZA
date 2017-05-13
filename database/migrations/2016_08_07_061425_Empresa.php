<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Empresa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                     Schema::create('Empresa', function (Blueprint $table) {


            $table->increments('id');
            $table->string('Nombre')->unique();
            $table->string('RazonSocial')->unique();

            $table->string('RFC')->unique(); 

  
        });

                     
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::drop('Empresa');
    }
}
