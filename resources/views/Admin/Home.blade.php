@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        
                  <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title"> Breve explicación del caso de uso Cotizaciones
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">


                  <div class="" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Crar </a>
                      </li>
                      <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Actualizar</a>
                      </li>
                      <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Modificar</a>
                      </li>
                      <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Eliminar</a>
                      </li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                      <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                      
<div class="row">
		<div class="col-md-10">
			  <p>Crear una nueva cotización. En esta sección tú podrás hacer una cotización a través de un carrito de compra, visualizaras el producto, así como su descripción precio e importe. Finalmente podrás guardar esta cotización. </p>
                 </div>

                <div class="col-md-2 center-block">
                	
	       <a href="{{url('cotiza/cotizacion')}}"class="btn btn-default" >Ir</a>
                </div> 
                 </div>
                 
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                      	<div class="col-md-10">
			   <p> Actualizar cotización. En esta sección tú podrás actualizar el precio de los productos de la cotización a través del descuento adicional que se le pudiera realizar a cada cotización.
                       </p>   </div>

                <div class="col-md-2 center-block">
                	
	       <a href="{{url('cotiza/actualizar')}}"class="btn btn-default" >Ir</a>
                </div> 
                       </div>
                      <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                         	<div class="col-md-10">
			   <p>Modificar cotización. En esta sección tu podrás realizar modificaciones a las cotizaciones de manera que puedes agregar nuevos productos, modificar la cantidad de productos por partida, eliminar productos, eliminar instalaciones y hacer un descuento adicional.     </p>   </div>

                <div class="col-md-2 center-block">
                	
	       <a href="{{url('cotiza/modificar')}}"class="btn btn-default" >Ir</a>
                </div> 
                      </div>
                       <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
                       	<div class="col-md-10">
			   <p>Eliminar cotización. En esta sección tu puedes eliminar una cotización es importante mencionar, que se eliminará de forma permanente, por lo consiguiente es requerido preguntar ¿Estás seguro que quieres borrar una cotización?
               </div> <div class="col-md-2 center-block">
                	
	       <a href="{{url('cotiza/eliminar')}}"class="btn btn-default" >Ir</a>
                </div> 
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
                              <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title"> Breve explicación del caso de uso Productos
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">


                  <div class="" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#b_productos" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Crar </a>
                      </li>
                      <li role="presentation" class=""><a href="#b_productos1" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Actualizar</a>
                      </li>
                      <li role="presentation" class=""><a href="#b_productos2" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Modificar</a>
                      </li>
                      <li role="presentation" class=""><a href="#b_productos3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Eliminar</a>
                      </li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                      <div role="tabpanel" class="tab-pane fade active in" id="b_productos" aria-labelledby="home-tab">

                 
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="b_productos1" aria-labelledby="profile-tab">
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="b_productos2" aria-labelledby="profile-tab">
                      
                      </div>
                       <div role="tabpanel" class="tab-pane fade" id="b_productos3" aria-labelledby="profile-tab">
                       
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
                              <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_title"> Breve explicación del caso de uso Clientes
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">


                  <div class="" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Crar </a>
                      </li> 
                      <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Modificar</a>
                      </li>
                      <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Eliminar</a>
                      </li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                      <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                      
<div class="row">
		<div class="col-md-10">
			  <p>Crea una nueva cotización </p>
                 </div>

                <div class="col-md-2 center-block">
                	
	       <button class="btn btn-default" >Ir</button>
                </div> 
                 </div>
                 
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                        <p> Actualiza @if(Auth::user()->TipoPermiso==1) tus cotizaciones @else todas las cotizaciones @endif que desees.</p>
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                        <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                          booth letterpress, commodo enim craft beer mlkshk </p>
                      </div>
                    
                    </div>
                  </div>

                </div>
              </div>
            </div>
       
    </div>
</div>
@endsection
