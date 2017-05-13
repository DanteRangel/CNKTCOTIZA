<?php

namespace CNKTCOTIZA\Http\Controllers;

use Illuminate\Http\Request;

use CNKTCOTIZA\Http\Requests;
use Auth;

class AdminController extends Controller
{
    
    public function __construct(){

    	$this->middleware('admin');
    }



    public function inicio(){

    	return view('Admin.Home');
    }
      public function dashboard(){

    	return view('Admin.Home');
    }
}
