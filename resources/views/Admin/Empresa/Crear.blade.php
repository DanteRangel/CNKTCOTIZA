@extends('layouts.app')

@section('content')

<div class="container">
@if(Session::has('response') && Session::has('usuarioNuevo'))
<br>
<br>
<br>
<br>
    <div class="alert alert-success alert-dismissible fade in" role="alert" >
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button> {{Session::get('response')}}<br>
                  <strong>{{Session::get('usuarioNuevo')}}</strong>
                
                </div>
@endif

    <div class="row-fluid">
        <div class="col-md-12 col-xs-12 col-sm-12 center-block" > <h3><p align="center"> Crear Nuevo Cliente</p></h3></div>
    </div>

  <div class="row-fluid">
      <form action="{{ url('admin/user/UserController/create') }}"  role="form" method="GET" enctype="multipart/form-datanovalidate" class="form-horizontal form-span-left">
   

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
                                                 <input  type="text" name="Nombres" class="form-control" id="Nombres" placeholder="Nombres"    required>
                                              </div>
                                              </div>
                                              <div class="col-md-4 col-xs-12 col-sm-4">

                                              <div class="item form-group ">
                                                 <span for="ApellidoPaterno ">    Apellido Paterno </span>
                                                 <input type="text" name="ApellidoPaterno" class="form-control" placeholder="ApellidoPaterno" required>
                                              </div>
                                              </div>
                                                <div class="col-md-4 col-xs-12 col-sm-4">
                                              <div class="item form-group ">
                                                 <span for="ApellidoMaterno"> Apellido Materno </span>
                                                 <input type="text" name="ApellidoMaterno" class="form-control" placeholder="Apellido Materno"  required ="optional">
                                              </div>
                                            </div>
                                          </div><br>
                                          <div class="row-fluid">

                                            <div class="col-md-4 col-xs-12 col-sm-4">
                                              <div class="item form-group ">
                                                 <span for="CURP" >    CURP </span>

                                                 <input type="text" name="CURP" class="form-control" placeholder="CURP" required ="optional">
                                              </div>
                                            </div>
                                            <div class="col-md-4 col-xs-12 col-sm-4">
                                              
                                              <div class="item form-group ">
                                                 <span for="NoSeguroSocial ">    No. de Seguro Social </span>
                                                 <input   type="text" name="NoSeguroSocial" class="form-control" placeholder="Numero de Seguro Social"  required ="optional">
                                              </div>

                                            </div>
                                              <div class="col-md-4 col-xs-12 col-sm-4">
                                              <div class="item form-group ">
                                                 <span for="RFC">    RFC </span>

                                                 <input type="text" name="RFC" class="form-control" placeholder="RFC" required ="optional">
                                              </div>
                                            </div>
                                            
                                          </div>
                                          <br>


                                          <div class="row-fluid">


                                            <div class="col-md-4 col-xs-12 col-sm-4">
                                              
                                              <div class="item form-group ">
                                                 <span for="id_Trabajador ">    No. de Trabajador </span>
                                                 <input   type="text" name="id_Trabajador" class="form-control" placeholder="Numero de Trabajador  Podria ser el CURP" required>
                                              </div>

                                            </div>
                                              <div class="col-md-4 col-xs-12 col-sm-4" >
                                              
                                              <div class="item form-group ">
                                                 <span for="TipoPermiso ">Tipo de Permiso</span>
                                                <select id="TipoPermiso" class="form-control" name="TipoPermiso" onchange="AparcerElementos()">
                                                    
                                                    <option value="0" >Sin Permiso - Solo Empleado</option>
                                                    <option value="2">Permiso Administrador</option>
                                                    <option value="1">Permiso Cotizacion</option>
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
                                                   <input  type="tel" name="TelefonoCasa" class="form-control" placeholder="Lada-No.Tel      55-66751526" data-validate-length-range="8,20"required >
                                                </div>
                                                </div>
                                                <div class="col-md-4 col-xs-12 col-sm-4">

                                                <div class="item form-group ">
                                                   <span >    Telefono Celular(1) </span>
                                                   <input type="tel" name="TelefonoCel1" class="form-control" placeholder="Lada-No.Tel      55-66751526" data-validate-length-range="8,20" required>
                                                </div>
                                                </div>
                                                  <div class="col-md-4 col-xs-12 col-sm-4">
                                                <div class="item form-group ">
                                                   <span > Telefono Celular(2)</span>
                                                   <input type="tel" name="TelefonoCel2" class="form-control" placeholder="Lada-No.Tel      55-66751526" data-validate-length-range="8,20" required>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row-fluid">

                                              <div class="col-md-4 col-xs-12 col-sm-4">
                                                <div class="item form-group">
                                                   <span >    Telefono Trabajo </span>

                                                   <input type="tel" id ="telephone" name="TelefonoTrabajo" class="form-control" placeholder="Lada-No.Tel      55-66751526" data-validate-length-range="8,20"required >
                                                </div>
                                              </div>
                                              <div class="col-md-4 col-xs-12 col-sm-4">
                                                
                                                <div class="item form-group ">
                                                   <span >   Nextel</span>
                                                   <input   type="tel" name="Nextel" class="form-control" placeholder="Nextel  Lada-No.Tel      55-66751526" data-validate-length-range="8,20"required>
                                                </div>

                                              </div>
                                               <div class="col-md-4 col-xs-12 col-sm-4">
                                                
                                                <div class="item form-group ">
                                                   <span >   Puesto en la Empresa</span>
                                                   <input   type="text" name="PuestoEmpresa" class="form-control" placeholder="Contador ..." required>
                                                </div>

                                              </div>
                                            </div>
                                         
                                            <div class="row-fluid">
                                                <div class="col-md-4 col-xs-12 col-sm-4">    
                                                     <div class="item form-group ">
                                                   <span >Correo Empresa</span>
                                                   <input  type="email" name="CorreoEmpresa" class="form-control" placeholder="Correo Empresa" required>
                                                </div>
                                                </div>
                                                <div class="col-md-4 col-xs-12 col-sm-4">

                                                <div class="item form-group ">
                                                   <span >    Correo Personal </span>
                                                   <input type="email" name="CorreoPersonal1" class="form-control" placeholder="Correo Personal 1"  required>
                                                </div>
                                                </div>
                                                  <div class="col-md-4 col-xs-12 col-sm-4">
                                                <div class="item form-group ">
                                                   <span > Correo Personal 2</span>
                                                   <input type="confirm_email" name="CorreoPersonal2" class="form-control" placeholder="Correo Personal " required>
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
                                         <input  type="text" name="Calle" class="form-control" placeholder="Calle" required >
                                      </div>
                                      </div>
                                      <div class="col-md-4 col-xs-12 col-sm-4">

                                      <div class="item form-group">
                                         <span >    No. Exterior</span>
                                         <input type="number" name="NoExterior" class="form-control" placeholder="No. Exterior" required >
                                      </div>
                                      </div>
                                        <div class="col-md-4 col-xs-12 col-sm-4">
                                      <div class="item form-group">
                                         <span > No.Interior</span>
                                         <input type="number" name="NoInterior" class="form-control"  placeholder="No. Interior" required>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row-fluid">

                                    <div class="col-md-4 col-xs-12 col-sm-4">
                                      <div class="item form-group">
                                         <span >   Colonia</span>

                                         <input type="text" name="Colonia" class="form-control" placeholder="Colonia" required >
                                      </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12 col-sm-4">
                                      
                                      <div class="item form-group">
                                         <span>   Manzana</span>
                                         <input   type="number" name="Manzana" class="form-control" placeholder="Manzana (Opcional)" optional>
                                      </div>

                                    </div>
                                  </div>
                                 
                                  <div class="row-fluid">
                                      <div class="col-md-4 col-xs-12 col-sm-4">    
                                           <div class="item form-group">
                                         <span >Delegacion</span>
                                         <input  type="text" name="MunicipioDelegacion" class="form-control" placeholder="Delegacio ó Municipio" required>
                                      </div>
                                      </div>
                                      <div class="col-md-4 col-xs-12 col-sm-4">

                                      <div class="item form-group">
                                         <span >    Ciudad </span>
                                         <input type="text" name="Ciudad" class="form-control" placeholder="Ciudad" required>
                                      </div>
                                      </div>
                                        <div class="col-md-4 col-xs-12 col-sm-4">
                                      <div class="item form-group">
                                         <span > Codigo Postal</span>
                                         <input type="number" name="CodigoPostal" class="form-control" placeholder="Codigo Postal "  data-validate-minmax="0,99999" required="optional">
                                      </div>
                                    </div>
                                  </div>
                                  <!---->
                                    
                                  <div class="row-fluid">

                                      <div class="col-md-4 col-xs-12 col-sm-4">
                                      <div class="item form-group">
                                         <span > Pais</span>
                                         <input type="text" name="Pais" class="form-control" placeholder="Pais " >
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

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

@endsection

 @section('js')
  <script src="{{asset('js/bootstrap.min.js')}}"></script>

  <!-- bootstrap progress js -->
  <script src="{{asset('js/progressbar/bootstrap-progressbar.min.js')}}"></script>
  <script src="{{asset('js/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <!-- icheck -->
  <script src="{{asset('js/icheck/icheck.min.js')}}"></script>

  <script src="{{asset('js/custom.js')}}"></script>
  <!-- form wizard -->
  <script type="text/javascript" src="{{asset('js/wizard/jquery.smartWizard.js')}}"></script>
  <!-- pace -->
  <script src="{{asset('js/pace/pace.min.js')}}"></script>
   <script src="{{asset('js/Empresa/CrearEmpresa.js')}}"></script>
  <script type="text/javascript">
     $(document).ready(function() {
      // Smart Wizard
      $('#wizard').smartWizard();

      function onFinishCallback() {
        $('#wizard').smartWizard('showMessage', 'Finish Clicked');
       
      }
$('#wizard').smartWizard({onLeaveStep:leaveAStepCallback,
                                  onFinish:onFinishCallback});
 
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


  </script>


  @endsection
 