@extends('layouts.app')

@section('content')
<div class="container" style="heigth:100%">
  @if(Session::has('response') && Session::has('usuarioModificado'))

  <br>
  <br>
  <br>
  <br>
    <div class="alert alert-success alert-dismissible fade in" role="alert" >
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button> {{Session::get('response')}}<br>
                  <strong>{{Session::get('usuarioModificado')}}</strong>
                
                </div>
@endif
    <div class="row-fluid">
        
<div class="col-xs-12 form-group  top_search">
					<div class="row-fluid" align="center"><h3>Modificar Cliente</h3></div>
                  <div class="input-group">
                    <input type="text" class="form-control" id="searchUser" placeholder="Buscar Usuario...">
                  <span class="input-group-btn"><button class="btn btn-default">Buscar</button></span>
                  </div>
                </div>
       
    </div>
<div class="row-fluid">
    <div id="resultados" class="row-fluid">
      </div>
      <div class="row-fluid">
      <div id="contenedor"></div>
      
    	</div>

    </div>
        <div id="dialogmodificar" title="¿Desea modificar al Usuario?" style="display:none;">
    <p>¿Deseas modificar al ususario?</p>
    
</div>
</div>
@endsection
@section('js')

  <script src="{{asset('js/Empresa/ModificarEmpresa.js')}}"></script>
@endsection