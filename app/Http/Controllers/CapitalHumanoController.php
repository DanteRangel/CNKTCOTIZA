<?php

namespace CNKTCOTIZA\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use CNKTCOTIZA\User;
use CNKTCOTIZA\Direccion;
use CNKTCOTIZA\Contacto;
use CNKTCOTIZA\Http\Requests;
use Session;

class CapitalHumanoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('errors.404');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {



      $this->validator($request,[
              'Nombres'=>'required|max:250',
              'ApellidoPaterno'=>'required|max:250',
              'ApellidoMaterno'=>'required|max:250',
              'CURP'=>'required|max:250',
              'NoSeguroSocial'=>'required|max:250',
              'id_Trabajador'=>'required|unique:users',
              'TipoPermiso'=>'required',
              'Password'=>'required|min:6|confirmed',
              'Calle'=>'required|max:250',
              'NoExterior'=>'required|max:250',
              'NoInterior'=>'required|max:250',
              'Colonia'=>'required|max:250',
              'Manzana'=>'required|max:250',
              'MunicipioDelegacion'=>'required|max:250',
              'Ciudad'=>'required|max:250',
              'CodigoPostal'=>'required|max:250',
              'Pais'=>'required|max:250',
              'TelefonoCasa'=>'',
              'TelefonoCel1'=>'',
              'TelefonoCel2'=>'',
              'TelefonoTrabajo'=>'',
              'TelefonoNextel'=>'',
              'CorreoPersonal'=>'email',
              'CorreoPersonal2'=>'email',
              'CorreoEmpresa'=>'email',
              'PuestoEmpresa'=>'required|max:250',

        ]);

        $Password="";
        $TipoPermiso="";

 if($request->Password==$request->PasswordConfirm){
                        $Password=bcrypt($request->Password);
                            
                }

   

   $TipoPermiso=$request->TipoPermiso;

       
        $user=User::create([
                'Nombres'=>$request->Nombres,
                'apellidoPaterno'=>$request->ApellidoPaterno,
                'apellidoMaterno'=>$request->ApellidoMaterno,
                'CURP'=>$request->CURP,
                'NoSeguroSocial'=>$request->NoSeguroSocial,
                'RFC'=>$request->RFC,
                'id_Trabajador'=>$request->id_Trabajador,
                'TipoPermiso'=>$TipoPermiso,
                'password'=>$Password,


            ]);
        $user->save();



        $direccion=Direccion::create([
            'id_CapitalHumano'=>$user->id,
            'id_Empresa'=>NULL,
            'Calle'=>$request->Calle,
            'NoInterior'=>$request->NoExterior,
            'NoExterior'=>$request->NoInterior,
            'Colonia'=>$request->Colonia,
            'Manzana'=>$request->Manzana,
            'MunicipioDelegacion'=>$request->MunicipioDelegacion,
            'Ciudad'=>$request->Ciudad,
            'CodigoPostal'=>$request->CodigoPostal,
            'Pais'=>$request->Pais,


        ]);
        $direccion->save();
        $contacto=Contacto::create([

            'id_direccion'=>$direccion->id,
            'Nombre'=>$request->Nombres,
            'ApellidoPaterno'=>$request->ApellidoMaterno,
            'ApellidoMaterno'=>$request->ApellidoMaterno,
            'TelefonoCasa'=>$request->TelefonoCasa,
            'TelefonoCel1'=>$request->TelefonoCel1,
            'TelefonoCel2'=>$request->TelefonoCel2,
            'TelefonoTrabajo'=>$request->TelefonoTrabajo,
            'TelefonoNextel'=>$request->Nextel,
            'CorreoPersonal'=>$request->CorreoPersonal1,
            'CorreoPersonal2'=>$request->CorreoPersonal2,
            'CorreoEmpresa'=>$request->CorreoEmpresa,
            'PuestoEmpresa'=>$request->PuestoEmpresa,

            ]);
        $contacto->save();
Session::flash('response','Nuevo Usuario guardado Satisfactoriamente');
Session::flash('usuarioNuevo',"Usuario Agregado :".$request->Nombres." ".$request->ApellidoPaterno." ".$request->ApellidoMaterno);
        return redirect('admin/user/crear') ;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         return $request;
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
        $user=User::where('id','=',$id)->with('direccion.contacto')->get();
        
        $request->session()->put('id_CapitalHumano',$user[0]['id']);
        $request->session()->put('id_Direccion',$user[0]['direccion'][0]['id']);
        $request->session()->put('id_Contacto',$user[0]['direccion'][0]['contacto']['id']);

        return view('Admin.User.WizardModificar',['user' => $user]);
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)  {

      $this->validator($request,[
              'Nombres'=>'required|max:250',
              'ApellidoPaterno'=>'required|max:250',
              'ApellidoMaterno'=>'required|max:250',
              'CURP'=>'required|max:250',
              'NoSeguroSocial'=>'required|max:250',
              'id_Trabajador'=>'required|unique:users',
              'TipoPermiso'=>'required',
              'Password'=>'required|min:6|confirmed',
              'Calle'=>'required|max:250',
              'NoExterior'=>'required|max:250',
              'NoInterior'=>'required|max:250',
              'Colonia'=>'required|max:250',
              'Manzana'=>'required|max:250',
              'MunicipioDelegacion'=>'required|max:250',
              'Ciudad'=>'required|max:250',
              'CodigoPostal'=>'required|max:250',
              'Pais'=>'required|max:250',
              'TelefonoCasa'=>'',
              'TelefonoCel1'=>'',
              'TelefonoCel2'=>'',
              'TelefonoTrabajo'=>'',
              'TelefonoNextel'=>'',
              'CorreoPersonal'=>'email',
              'CorreoPersonal2'=>'email',
              'CorreoEmpresa'=>'email',
              'PuestoEmpresa'=>'required|max:250',

        ]);

        $Password="";
        $TipoPermiso="";

       if($request->Password==$request->PasswordConfirm){
                        $Password=bcrypt($request->Password);
                            
                }
 
        $TipoPermiso=$required->TipoPermiso;

        $direccion=Direccion::find($request->session()->get('id_Direccion'))->first();

        $direccion->NoInterior=$request->NoInterior;
        $direccion->NoExterior=$request->NoExterior;
        $direccion->Colonia=$request->Colonia;
        $direccion->Manzana=$request->Manzana;
        $direccion->Ciudad=$request->Ciudad;
        $direccion->Calle=$request->Calle;
        $direccion->MunicipioDelegacion=$request->MunicipioDelegacion;
        $direccion->CodigoPostal=$request->CodigoPostal;
        $direccion->Pais=$request->Pais;
        $direccion->save();

        $user=User::find($request->session()->get('id_CapitalHumano'))->first();
        if($request->Password!=''){
             $user->remember_token="";
             $user->Password=$Password;
        }
        $user->apellidoMaterno=$request->ApellidoMaterno;
        $user->apellidoPaterno=$request->ApellidoPaterno;
        $user->nombres=$request->Nombres;
        $user->id_Trabajador=$request->id_Trabajador;
        $user->TipoPermiso=$TipoPermiso;
        $user->RFC=$request->RFC;
        $user->CURP=$request->CURP;        
        $user->NoSeguroSocial=$request->NoSeguroSocial;
        $user->save();


        $contacto=Contacto::where('id','=',$request->session()->get('id_Contacto'))->first();
        $contacto->ApellidoMaterno=$request->ApellidoMaterno;
        $contacto->ApellidoPaterno=$request->ApellidoPaterno;
        $contacto->Nombre=$request->Nombres;
        $contacto->TelefonoCasa=$request->TelefonoCasa;
        $contacto->TelefonoTrabajo=$request->TelefonoTrabajo;
        $contacto->TelefonoNextel=$request->Nextel;
        $contacto->TelefonoCel1=$request->TelefonoCel1;
        $contacto->TelefonoCel2=$request->TelefonoCel2;

        $contacto->PuestoEmpresa=$request->PuestoEmpresa;
        $contacto->CorreoEmpresa=$request->CorreoEmpresa;
        $contacto->CorreoPersonal=$request->CorreoPersonal1;
        $contacto->CorreoPersonal2=$request->CorreoPersonal2;
        $contacto->save();

        Session::flash('response','Nuevo Usuario Modificado Satisfactoriamente');
        Session::flash('usuarioModificado',"Usuario Modificado :".$user->nombres." ".$user->apellidoPaterno." ".$user->apellidoMaterno);
        
        return redirect('admin/user/modificar') ;
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $user=User::find($id);
    Session::flash('response','Usuario Eliminada Satisfactoriamente');
    Session::flash('usuarioEliminado',"Usuario Eliminado :".$user->nombres." ".$user->apellidoPaterno." ".$user->apellidoMaterno);
       $user->delete();
       return 'eliminar';
    }
/**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ViewCrear(){

         return view('Admin.User.Crear');
    }
      public function ViewModificar(){

         return view('Admin.User.Modificar');
    }
      public function ViewEliminar(){

         return view('Admin.User.Eliminar');
    }

    public function busquedaUser(Request $request){
        $palabra=$request->palabra;
        $response="";

        $users=DB::table('CapitalHumano')->where('nombres','like', "%".$palabra."%")
                    ->orWhere('apellidoMaterno','like', "%".$palabra."%")
                    ->orWhere('apellidoPaterno','like', "%".$palabra."%")
                    ->orWhere('CURP','like', "%".$palabra."%")
                    ->orWhere('NoSeguroSocial','like', "%".$palabra."%")
                    ->orWhere('id_Trabajador','like', "%".$palabra."%")                    
                    ->get();



                    if(count($users)>0){
                       $response.='
  <script src="'.asset('js/Usuario/ModificarUsuarios.js').'"></script>';
                    $response.='<table class="table table-striped projects">
                                        <thead>
                                          <tr>
                                            <th style="width: 5%"><h6 align="center">#</h6></th>
                                            <th style="width: 20%"><h6 align="left">Nombre</h6></th>

                                            <th style="width: 20%"><h6 align="center">Identidicador de Trabajador</h6></th>
                                            
                                            <th style="width: 15%"><h6 align="center">CURP</h6></th>
                                             <th style="width: 20%"><h6 align="center">Numero de Seguro Social</h6></th>
                                            <th style="width: 20%"><h6 align="center">'.$request->busqueda.'.</th>
                                          </tr>
                                        </thead>
                                        <tbody>';

                    foreach ($users as $usuario) {

                        $response.='    <tr  data-id="'.$usuario->id.'">
                                                <td align="center">#'.$usuario->id.'</td>
                                                <td>
                                                  <a class="'; 
                                                  $response.=($request->tipo=="Eliminar")?'Eliminar':'Modifica'; 


                                                  $response.=' data-id="'.$usuario->id.'">'.$usuario->nombres.'</a>
                                                  <br>
                                                  <small>'.$usuario->apellidoPaterno.' '.$usuario->apellidoMaterno.'</small>
                                                </td>
                                                <td align="center">
                                                '.$usuario->id_Trabajador.'
                                                </td>
                                                <td align="center"> 
                                                    '.$usuario->CURP.'
                                                </td>
                                                <td align="center"> 
                                                '.$usuario->NoSeguroSocial.'
                                                </td>
                                                <td align="center">'
                                                  ; 
                                                  $response.= ($request->tipo=="Eliminar")?'<button type="button" data-token="'.csrf_token().'" class="btn btn-danger btn-xs  Eliminar':'<button type="button" class="btn btn-success btn-xs Modifica';


                                                  $response.='"  data-id="'.$usuario->id.'">'.$request->tipo.'</button>
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
