<?php

namespace CNKTCOTIZA;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table="Productos";
       protected $fillable = [
        'name', 'email', 'password',
    ];
}
