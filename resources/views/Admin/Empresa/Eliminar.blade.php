@extends('layouts.app')

@section('content')
<div class="container">
  @if(Session::has('response') && Session::has('usuarioEliminado'))
  
  <br>
  <br>
  <br>
  <br>
    <div class="alert alert-success alert-dismissible fade in" role="alert" >
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button> {{Session::get('response')}}<br>
                  <strong>{{Session::get('usuarioEliminado')}}</strong>
                
                </div>
@endif
    <div class="row-fluid">
        
<div class="col-xs-12 form-group  top_search">
					<div class="row-fluid" align="center"><h3>Eliminar Clientes</h3></div>
                  <div class="input-group">
                    <input type="text" class="form-control" id="searchUser" placeholder="Buscar Usuario...">
                  <span class="input-group-btn"><button class="btn btn-default">Buscar</button></span>
                  </div>
                </div>
       
    </div>
<div class="row-fluid">
    <div id="resultados" class="row-fluid">
      </div>
      
    </div>

      <div id="dialogeliminar" title="¿Desea Eliminar al Usuario?" style="display:none;">
    <p>¿Deseas Eliminar al ususario?</p>
    
</div>
</div>

@endsection
@section('js')

  <script src="{{asset('js/Empresa/ModificarEmpresa.js')}}"></script>
@endsection

