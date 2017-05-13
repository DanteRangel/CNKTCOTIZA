<?php

namespace CNKTCOTIZA\Http\Controllers;

use Illuminate\Http\Request;

use CNKTCOTIZA\Http\Requests;
use Auth;
class CotizadorController extends Controller
{
    public function __construct(){

    	$this->middleware('user');
    }


    public function inicio(){

    	return view('Cotizador.Home');
    }
    public function crear(){

    	return view('Cotizador.Inicio');
    }
}
