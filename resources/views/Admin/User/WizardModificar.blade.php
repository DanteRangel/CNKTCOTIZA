<?php 
$usuario=$user[0];
$direccion=$user[0]['direccion'][0];
$contacto=$user[0]['direccion'][0]['contacto'];
//echo $direccion."<br>";
//echo $contacto."<br>";

?>

  <script type="text/javascript" src="{{asset('js/wizard/jquery.smartWizard.js')}}"></script>
  <!-- pace -->
  <script src="{{asset('js/pace/pace.min.js')}}"></script>
   <script src="{{asset('js/Usuario/CrearUsuarios.js')}}"></script>
  <script type="text/javascript">
     $(document).ready(function() {
      // Smart Wizard
      $('#wizard').smartWizard();

$('#wizard').smartWizard({onLeaveStep:leaveAStepCallback,
                                  onFinish:onFinishCallback});

      function onFinishCallback() {

       
             $('#wizard').smartWizard('showMessage', 'Finish Clicked');
       
      }


 

 
      function leaveAStepCallback(obj){



        var step_num= obj.attr('rel'); // get the current step number

        return validateSteps(step_num); // return false to stay on step and true to continue navigation 
      }
      
      function onFinishCallback(){
       if(validateAllSteps()){
        
       }
      }
      
      // Your Step validation logic
      function validateSteps(stepnumber){
        var isStepValid = true;
        // validate step 1
        if(stepnumber == 1){
          // Your step validation logic
          // set isStepValid = false if has errors
          if($('form')
      .on('blur', 'input.required, input.optional, select.required', validator.checkField)
      .on('change', 'select.required', validator.checkField)
      .on('keypress', 'input[required][pattern]', validator.keypress)){
            isStepValid=false;
          }else{
            isStepValid=true;
          }
        }
        // ...      
      }
      function validateAllSteps(){
        var isStepValid = true;
        // all step validation logic     
        return isStepValid;
      }    

  

  

    });
  </script>
    <script>
    // initialize the validator function
    validator.message['date'] = 'not a real date';

    // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
    $('form')
      .on('blur', 'input[required], input.optional, select.required', validator.checkField)
      .on('change', 'select.required', validator.checkField)
      .on('keypress', 'input[required][pattern]', validator.keypress);

    $('.multi.required')
      .on('keyup blur', 'input', function() {
        validator.checkField.apply($(this).siblings().last()[0]);
      });

//action="{{ url('admin/user/UserController/{'.$usuario['id'].'}') }}"
  </script>

  <div class="row-fluid center-block">
      <form  action="{{ url('admin/user/UserController/'.$usuario['id'].'') }}"  method="POST"  class="form-horizontal form-span-left" >
   <input type="hidden" name="_method"  value="PUT">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
 <div id="wizard" class="form_wizard wizard_horizontal">
                    <ul class="wizard_steps anchor">
                      <li>
                        <a href="#step-1" class="selected" isdone="1" rel="1">
                          <span class="step_no">1</span>
                          <span class="step_descr">
                                            Paso 1<br>
                                            <small>Datos Personales</small>
                                        </span>
                        </a>
                      </li>
                      <li>
                        <a href="#step-2" class="disabled" isdone="0" rel="2">
                          <span class="step_no">2</span>
                          <span class="step_descr">
                                            Paso 2<br>
                                            <small>Datos de Referencia</small>
                                        </span>
                        </a>
                      </li>
                      <li>
                        <a href="#step-3" class="disabled" isdone="0" rel="3">
                          <span class="step_no">3</span>
                          <span class="step_descr">
                                            Paso 3<br>
                                            <small>Dirección</small>
                                        </span>
                        </a>
                      </li>
                    
                    </ul>
                    
                    
                    
            
                    <div id="step-1" class="wizard_content" style="display: block;">
                  


                                              <span class="span3"><h2 style="color:gray">Datos Personales <small> ---</small></h2></span>
                                              <div class="row-fluid">
                                              <div class="col-md-4 col-xs-12 col-sm-4">    
                                                   <div class="item form-group ">
                                                 <span for="Nombres">Nombres</span>
                                                 <input  type="text" name="Nombres" class="form-control" id="Nombres" placeholder="Nombres" value="{{ $usuario['nombres'] }}"    required>
                                              </div>
                                              </div>
                                              <div class="col-md-4 col-xs-12 col-sm-4">

                                              <div class="item form-group ">
                                                 <span for="ApellidoPaterno ">    Apellido Paterno </span>
                                                 <input type="text" name="ApellidoPaterno" class="form-control" placeholder="ApellidoPaterno" value="{{ $usuario['apellidoPaterno'] }}" required>
                                              </div>
                                              </div>
                                                <div class="col-md-4 col-xs-12 col-sm-4">
                                              <div class="item form-group ">
                                                 <span for="ApellidoMaterno"> Apellido Materno </span>
                                                 <input type="text" name="ApellidoMaterno" class="form-control" placeholder="Apellido Materno" value="{{ $usuario['apellidoMaterno'] }}" required ="optional">
                                              </div>
                                            </div>
                                          </div><br>
                                          <div class="row-fluid">

                                            <div class="col-md-4 col-xs-12 col-sm-4">
                                              <div class="item form-group ">
                                                 <span for="CURP" >    CURP </span>

                                                 <input type="text" name="CURP" class="form-control" placeholder="CURP" value="{{ $usuario['CURP'] }}" required ="optional">
                                              </div>
                                            </div>
                                            <div class="col-md-4 col-xs-12 col-sm-4">
                                              
                                              <div class="item form-group ">
                                                 <span for="NoSeguroSocial ">    No. de Seguro Social </span>
                                                 <input   type="text" name="NoSeguroSocial" class="form-control" placeholder="Numero de Seguro Social" value="{{ $usuario['NoSeguroSocial'] }}" required ="optional">
                                              </div>

                                            </div>
                                              <div class="col-md-4 col-xs-12 col-sm-4">
                                              <div class="item form-group ">
                                                 <span for="RFC">    RFC </span>

                                                 <input type="text" name="RFC" class="form-control" placeholder="RFC" value="{{ $usuario['RFC'] }}" required ="optional">
                                              </div>
                                            </div>
                                            
                                          </div>
                                          <br>


                                          <div class="row-fluid">


                                            <div class="col-md-4 col-xs-12 col-sm-4">
                                              
                                              <div class="item form-group ">
                                                 <span for="id_Trabajador ">    No. de Trabajador </span>
                                                 <input   type="text" name="id_Trabajador" class="form-control" placeholder="Numero de Trabajador  Podria ser el CURP" value="{{ $usuario['id_Trabajador'] }}" required>
                                              </div>

                                            </div>
                                              <div class="col-md-4 col-xs-12 col-sm-4" >
                                              
                                              <div class="item form-group ">
                                                 <span for="TipoPermiso ">Tipo de Permiso</span>
                                                <select id="TipoPermiso" class="form-control" name="TipoPermiso" onchange="AparcerElementos()">
                                                    
                                                    <option {{ ($usuario['TipoPermiso']!=1 ||$usuario['TipoPermiso']!=1 )? 'selected':''}}>Sin Permiso - Solo Empleado</option>
                                                    <option {{ ($usuario['TipoPermiso']==2  )? 'selected':''}}>Permiso Administrador</option>
                                                    <option {{ ($usuario['TipoPermiso']==1 )? 'selected':''}}>Permiso Cotizacion</option>
                                                </select>
                                              </div>
                                            </div>
                                            </div>
                                         <div id="password" class="row-fluid"  style="display:none;">
                                            <div class="col-md-4 col-xs-12 col-sm-4">
                                              <div class="item form-group ">
                                                 <span for="Password"> Password </span>
                                                 <input type="password" name="Password" id="Password1"class="form-control" placeholder="Password" data-validate-length="5,50" required >
                                              </div>
                                            </div>
                                               <div id="PasswordConfirmDIV" class="col-md-4 col-xs-12 col-sm-4">
                                              <div class="item form-group ">
                                                 <span for="Password"> Confirma Password </span>
                                                 <input type="password" id="PasswordConfirm" name="PasswordConfirm" class="form-control" data-validate-linked="Password" required >
                                              </div>
                                            </div>


                                          
                                          </div>



             </div>
                <div id="step-2" class="wizard_content" style="display: none;">
              
                                           <div class="row-fluid">
                                              <!---->

                                                <div class="col-md-4 col-xs-12 col-sm-4">    
                                                     <div class="item form-group ">
                                                   <span >Telefono Casa</span>
                                                   <input  type="tel" name="TelefonoCasa" class="form-control" placeholder="Lada-No.Tel      55-66751526" data-validate-length-range="8,20" value="{{$contacto->TelefonoCasa}}"required >
                                                </div>
                                                </div>
                                                <div class="col-md-4 col-xs-12 col-sm-4">

                                                <div class="item form-group ">
                                                   <span >    Telefono Celular(1) </span>
                                                   <input type="tel" name="TelefonoCel1" class="form-control" placeholder="Lada-No.Tel      55-66751526" data-validate-length-range="8,20" value="{{$contacto->TelefonoCel1}}" required>
                                                </div>
                                                </div>
                                                  <div class="col-md-4 col-xs-12 col-sm-4">
                                                <div class="item form-group ">
                                                   <span > Telefono Celular(2)</span>
                                                   <input type="tel" name="TelefonoCel2" class="form-control" placeholder="Lada-No.Tel      55-66751526" data-validate-length-range="8,20" required value="{{$contacto->TelefonoCel2}}">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row-fluid">

                                              <div class="col-md-4 col-xs-12 col-sm-4">
                                                <div class="item form-group">
                                                   <span >    Telefono Trabajo </span>

                                                   <input type="tel" id ="telephone" name="TelefonoTrabajo" class="form-control" placeholder="Lada-No.Tel      55-66751526" data-validate-length-range="8,20" value="{{$contacto->TelefonoTrabajo}}" required >
                                                </div>
                                              </div>
                                              <div class="col-md-4 col-xs-12 col-sm-4">
                                                
                                                <div class="item form-group ">
                                                   <span >   Nextel</span>
                                                   <input   type="tel" name="Nextel" class="form-control" placeholder="Nextel  Lada-No.Tel      55-66751526" data-validate-length-range="8,20" value="{{$contacto->TelefonoNextel}}"required>
                                                </div>

                                              </div>
                                               <div class="col-md-4 col-xs-12 col-sm-4">
                                                
                                                <div class="item form-group ">
                                                   <span >   Puesto en la Empresa</span>
                                                   <input   type="text" name="PuestoEmpresa" class="form-control" placeholder="Contador ..." value="{{$contacto->PuestoEmpresa}}"required>
                                                </div>

                                              </div>
                                            </div>
                                         
                                            <div class="row-fluid">
                                                <div class="col-md-4 col-xs-12 col-sm-4">    
                                                     <div class="item form-group ">
                                                   <span >Correo Empresa</span>
                                                   <input  type="email" name="CorreoEmpresa" class="form-control" placeholder="Correo Empresa" value="{{$contacto->CorreoEmpresa}}" required>
                                                </div>
                                                </div>
                                                <div class="col-md-4 col-xs-12 col-sm-4">

                                                <div class="item form-group ">
                                                   <span >    Correo Personal </span>
                                                   <input type="email" name="CorreoPersonal1" class="form-control" placeholder="Correo Personal 1" value="{{$contacto->CorreoPersonal}}" required>
                                                </div>
                                                </div>
                                                  <div class="col-md-4 col-xs-12 col-sm-4">
                                                <div class="item form-group ">
                                                   <span > Correo Personal 2</span>
                                                   <input type="confirm_email" name="CorreoPersonal2" class="form-control" placeholder="Correo Personal " value="{{$contacto->CorreoPersonal2}}"required>
                                                </div>
                                              </div>
                                            </div><br>
                                           
                   
                    </div>
                    <div id="step-3" class="wizard_content" style="display: none;">


                                      <span class="span3"><h2 style="color:gray">Datos de Referencia<small>  Telefonos y Correos Electronicos</small></h2></span>

                                <div class="row-fluid">
                                    <!---->

                                      <div class="col-md-4 col-xs-12 col-sm-4">    
                                           <div class="item form-group">
                                         <span >Calle </span>
                                         <input  type="text" name="Calle" class="form-control" placeholder="Calle" value="{{$direccion->Calle}}" required >
                                      </div>
                                      </div>
                                      <div class="col-md-4 col-xs-12 col-sm-4">

                                      <div class="item form-group">
                                         <span >    No. Exterior</span>
                                         <input type="number" name="NoExterior" class="form-control" placeholder="No. Exterior"value="{{$direccion->NoExterior}}" required >
                                      </div>
                                      </div>
                                        <div class="col-md-4 col-xs-12 col-sm-4">
                                      <div class="item form-group">
                                         <span > No.Interior</span>
                                         <input type="number" name="NoInterior" class="form-control"  placeholder="No. Interior" value="{{$direccion->NoInterior}}" required>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row-fluid">

                                    <div class="col-md-4 col-xs-12 col-sm-4">
                                      <div class="item form-group">
                                         <span >   Colonia</span>

                                         <input type="text" name="Colonia" class="form-control" placeholder="Colonia" value="{{$direccion->Colonia}}" required >
                                      </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12 col-sm-4">
                                      
                                      <div class="item form-group">
                                         <span>   Manzana</span>
                                         <input   type="number" name="Manzana" class="form-control" placeholder="Manzana (Opcional)"  value="{{$direccion->Manzana}}"optional>
                                      </div>

                                    </div>
                                  </div>
                                 
                                  <div class="row-fluid">
                                      <div class="col-md-4 col-xs-12 col-sm-4">    
                                           <div class="item form-group">
                                         <span >Delegacion</span>
                                         <input  type="text" name="MunicipioDelegacion" class="form-control" placeholder="Delegacio ó Municipio" value="{{$direccion->MunicipioDelegacion}}"required>
                                      </div>
                                      </div>
                                      <div class="col-md-4 col-xs-12 col-sm-4">

                                      <div class="item form-group">
                                         <span >    Ciudad </span>
                                         <input type="text" name="Ciudad" class="form-control" placeholder="Ciudad" value="{{$direccion->Ciudad}}" required>
                                      </div>
                                      </div>
                                        <div class="col-md-4 col-xs-12 col-sm-4">
                                      <div class="item form-group">
                                         <span > Codigo Postal</span>
                                         <input type="number" name="CodigoPostal" class="form-control" placeholder="Codigo Postal " value="{{$direccion->CodigoPostal}}" data-validate-minmax="0,99999" required="optional">
                                      </div>
                                    </div>
                                  </div>
                                  <!---->
                                    
                                  <div class="row-fluid">

                                      <div class="col-md-4 col-xs-12 col-sm-4">
                                      <div class="item form-group">
                                         <span > Pais</span>
                                         <input type="text" name="Pais" class="form-control" value="{{$direccion->Pais}}" placeholder="Pais " >
                                      </div>
                                    </div>

                                    <div class="col-md-2">
                                      
                                      <h4><p align="left" style="color:#d9534f">*<small style="color:#d9534f">Campos Obligatorios</small></p></h4>
                                    </div>
                                    </div>
                                
         </div>
       
                             
                 
                  
  </div>
</form>
</div>