<?php

namespace CNKTCOTIZA\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use CNKTCOTIZA\Http\Requests;
use CNKTCOTIZA\Empresa;

use CNKTCOTIZA\User;
use CNKTCOTIZA\Direccion;
use CNKTCOTIZA\Contacto;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
         return view('Admin.Empresa.Crear');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
       
            $clientes=Empresa::where('id','=',$id)->with('direccion.contacto')->get();
        
        $request->session()->put('id_CapitalHumano',$clientes[0]['id']);
        $request->session()->put('id_Direccion',$clientes[0]['direccion'][0]['id']);
        $request->session()->put('id_Contacto',$clientes[0]['direccion'][0]['contacto']['id']);
           return $clientes; 
        return view('Admin.Empresa.WizardModificar',['clientes' => $clientes]);
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     //   return $id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $id;
    }
      public function ViewCrear(){

         return view('Admin.Empresa.Crear');
    }
      public function ViewModificar(){

         return view('Admin.Empresa.Modificar');
    }
      public function ViewEliminar(){

         return view('Admin.Empresa.Eliminar');
    }

    public function busquedaUser(Request $request){
        $palabra=$request->palabra;
        $response="";

        $clientes=DB::table('empresa')->where('Nombre','like', "%".$palabra."%")
                    ->orWhere('RazonSocial','like', "%".$palabra."%")
                    ->orWhere('RFC','like', "%".$palabra."%")
                    ->get();



                    if(count($clientes)>0){
                       $response.='
  <script src="'.asset('js/Empresa/ModificarEmpresa.js').'"></script>';
                    $response.='<table class="table table-striped projects">
                                        <thead>
                                          <tr>
                                            <th style="width: 5%"><h6 align="center">#</h6></th>
                                            <th style="width: 25%"><h6 align="left">Nombre</h6></th>
 
                                            <th style="width: 25%"><h6 align="center">RFC</h6></th>
                                             <th style="width: 25%"><h6 align="center">Razon Social</h6></th>
                                            <th style="width: 20%"><h6 align="center">'.$request->busqueda.'.</th>
                                          </tr>
                                        </thead>
                                        <tbody>';

                    foreach ($clientes as $cliente) {

                        $response.='    <tr  data-id="'.$cliente->id.'">
                                                <td align="center">#'.$cliente->id.'</td>
                                                <td>
                                                  <a class="'; 
                                                  $response.=($request->tipo=="Eliminar")?'Eliminar':'Modifica'; 


                                                  $response.=' data-id="'.$cliente->id.'">'.$cliente->Nombre.'</a>
                                                 </td>
                                                <td align="center">
                                                '.$cliente->RFC.'
                                                </td>
                                                <td align="center"> 
                                                    '.$cliente->RazonSocial.'
                                                </td>
                                               
                                                <td align="center">'
                                                  ; 
                                                  $response.= ($request->tipo=="Eliminar")?'<button type="button" data-token="'.csrf_token().'" class="btn btn-danger btn-xs  Eliminar':'<button type="button" class="btn btn-success btn-xs Modifica';


                                                  $response.='"  data-id="'.$cliente->id.'">'.$request->tipo.'</button>
                                                </td>
                                              </tr>';
                       
                    } 

                    $response.='  </tbody>
                  </table>';
                }else{
                        $response="<h2>Sin Resultados</h2>";
                }


            return $response;
    }
    public function WizardModificar(Request $request){

        

    }	
  
}
