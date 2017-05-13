<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CNKTCOTIZA</title>

    <!-- Bootstrap core CSS -->

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('fonts/css/font-awesome.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/jquery-ui.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/jquery-ui.css')}}" rel="stylesheet">
    <link href="{{asset('css/jquery-ui.theme.css')}}" rel="stylesheet"> 
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/maps/jquery-jvectormap-2.0.3.css')}}" />
    <link href="{{asset('css/icheck/flat/green.css')}}" rel="stylesheet" />
    <link href="{{asset('css/floatexamples.css')}}" rel="stylesheet" type="text/css" />



    <script src="{{asset('js/jquery.js')}}"></script>

    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <script src="{{asset('js/nprogress.js')}}"></script>

    <!--[if lt IE 9]>
    <script src="../assets/js/ie8-responsive-file-warning.js"></script>
    <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body class="nav-md">

    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="home" class="site_title"><i class="fa fa-home"></i> <span>Administración</span></a>
                    </div>
                    <div class="clearfix"></div>

                    
                    <!-- menu prile quick info -->
                    @if(!Auth::guest())
                    <div class="profile">
                        <div class="profile_pic">
                           <img src="{{ asset('images/img.jpg')}}" alt="..." class="img-circle profile_img">
                         </div>
                   
                        <div class="profile_info">
                            <span>Bienvenido</span>
                            <h2>{{Auth::user()->nombres}}</h2>
                          <!--  <h5> Tipo Usuario @if(Auth::user()->TipoPermiso==2) Administrador @else Cotizador @endif</h5>
                       --> </div>
                    </div>
                   
                      @else
                      <div class="profile">
                       <div class="profile_pic">
                            <img src="{{ asset('images/img.jpg')}}" alt="..." class="img-circle profile_img">
                        </div>
                    <div class="profile_info">
                            <span>Inicia Session</span>
                            <h2>Invitado</h2>
                           
                        </div>
                    </div>
                      
                    @endif
                    <!-- /menu prile quick info -->

                    <br />
  @if(!Auth::guest())
                    <!-- sidebar menu -->
     <br />

                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
<hr>
        <div class="menu_section">
                            @if(!Auth::guest())
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-home"></i> Cotizaciones <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none">
                                              <li><a href="{{url('admin/eliminar')}}">Eliminar </a>
                                             
                                              </li>
                                              <li><a href="{{url('admin/modificar')}}"> Modificar </a>
                                                
                                              </li>
                                                <li><a href="{{url('admin/actualizar')}}"> Actualizar </a>
                                                
                                              </li>
                                               <li><a href="{{url('cotiza/cotizacion')}}"> Crear </span></a>
                                                 
                                              </li>
                                     </ul>
                                </li>
                            </ul>
                            @endif
                                <!---->
          @if(Auth::user()->TipoPermiso==2 )
                            
                                   <ul class="nav side-menu">
                                          <li><a><i class="fa fa-support"></i> Productos <span class="fa fa-chevron-down"></span></a>
                                                  <ul class="nav child_menu">
                                                     <li><a href="{{url('admin/productos/modificar')}}"> Modificar </a>
                                                     </li>
                                                      <li><a>Eliminar <span class="fa fa-chevron-down"></span></a>
                                                          <ul class="nav child_menu" style="display: none">
                                                              <li><a href="{{url('admin/productos/eliminar')}}">Un producto</a>
                                                              </li>
                                                              <li><a href="{{url('admin/productos/eliminarMultiples')}}">Multiples productos</a>
                                                              </li>
                                                          </ul>
                                                      </li>
                                          
                                                       <li><a> Ingresar <span class="fa fa-chevron-down"></span></a>
                                                           <ul class="nav child_menu" style="display: none">
                                                              <li><a href="{{url('admin/productos/ingresar')}}">Un producto</a>
                                                              </li>
                                                              <li><a href="{{url('admin/productos/importar')}}">Multiples productos</a>
                                                              </li>
                                                          </ul>
                                                      </li>
                                                </ul>
                                          </li>
                                </ul>
                               <ul class="nav side-menu">
                                        <li><a><i class="fa fa-user"></i> Usuarios <span class="fa fa-chevron-down"></span></a>
                                                 <ul class="nav child_menu">
                                                            <li><a href="{{url('admin/user/eliminar')}}">Eliminar</span></a>
                                                              
                                                            </li>
                                                            <li><a href="{{url('admin/user/modificar')}}"> Modificar </a>
                                                              
                                                            </li>
                                                            
                                                             <li><a href="{{url('admin/user/crear')}}"> Ingresar</a>
                                                              
                                                            </li>
                                                 </ul>
                                           </li>
                                </ul>
                     @endif

                                  @if(Auth::user()->TipoPermiso==2||Auth::user()->TipoPermiso==1 ) 

                                  <ul class="nav side-menu">
                                  
                                <li><a><i class="fa fa-group"></i> Clientes <span class="fa fa-chevron-down"></span></a>
                                       
                                        <ul class="nav child_menu">
                                       @if(Auth::user()->TipoPermiso==2 )             
   
                                            <li><a href="{{url('admin/clientes/eliminar')}}">Eliminar</span></a>
                                              
                                            </li>
                                            <li><a href="{{url('admin/clientes/modificar')}}"> Modificar </a>
                                              
                                            </li>
                                            @endif

                                              @if(Auth::user()->TipoPermiso==2||Auth::user()->TipoPermiso==1 )  
                                             <li><a href="{{url('admin/clientes/crear')}}"> Ingresar</a>
                                              
                                            </li>
                                            @endif
                                </ul>
                                </li>
                                </ul>
                                @endif
                        </div>
                    
                     
                    </div>
                    <!-- /sidebar menu -->
@endif
                    <!-- /menu footer buttons -->
              
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>
                            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
              
                <ul class="nav navbar-nav">
                               </ul>

         
                  <ul class="nav navbar-nav">

     
  
          </ul>
       
     <!-- Right Side Of Navbar -->


            <ul class="nav navbar-nav navbar-right">
   @if(!Auth::guest())

                   
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-user">  {{ Auth::user()->nombres }}  </i>
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
        
                  <li><a href="{{ url('logout')}}"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesion</a>
                  </li>
                </ul>
              </li>
               <li></li>

         
   
      <li><a href="#">Generador PDF</a></li>

      <li><a href="#">Gestion de Cotizaciones</a></li>
     
            <li ><a  href="{{ url('cotiza') }}">Cotizador</a></li>


          
                         <li><a href="{{ url('/home') }}">CNKTCOTIZA</a></li>

   @endif


@if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Iniciar Sesion</a></li>

                 <li><a href="{{ url('/home') }}">CNKTCOTIZA</a></li>
                           @else
                         
        
 @endif
              <!--<li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">6</span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                  <li>
                    <a>
                      <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <div class="text-center">
                      <a href="inbox.html">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>-->

            </ul>
              
            </div>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->


            <!-- page content -->
            <div class="right_col" role="main">

                <div class="row-fluid">
                                    @yield('content')

                         

                </div>
                <br />

                <!-- footer content -->

                
  <nav class="navbar  navbar-fixed-bottom" role="navigation">
                  <div class="row center-block" align="center">
          Plataforma elaborada por  <a href=" " > Urgentic's Developers </a>
            <br><a href="">Términos y condiciones uso</a> <a href="">Aviso de Privacidad</a> Todos los derechos reservados
        </div>
                    <div class="clearfix"></div>
                </nav>
                <!-- /footer content -->
            </div>
            <!-- /page content -->

        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <!-- gauge js -->
    <script type="text/javascript" src="{{asset('js/gauge/gauge.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/gauge/gauge_demo.js')}}"></script>
    <!-- chart js -->
    <script src="{{asset('js/chartjs/chart.min.js')}}"></script>
    <!-- bootstrap progress js -->
    <script src="{{asset('js/progressbar/bootstrap-progressbar.min.js')}}"></script>
    <script src="{{asset('js/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <!-- icheck -->
    <script src="{{asset('js/icheck/icheck.min.js')}}"></script>
    <!-- daterangepicker -->
    <script type="text/javascript" src="{{asset('js/moment/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/datepicker/daterangepicker.js')}}"></script>

    <script src="{{asset('js/custom.js')}}"></script>

    <!-- flot js -->
    <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
    <script type="text/javascript" src="{{asset('js/flot/jquery.flot.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/flot/jquery.flot.pie.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/flot/jquery.flot.orderBars.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/flot/jquery.flot.time.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/flot/date.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/flot/jquery.flot.spline.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/flot/jquery.flot.stack.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/flot/curvedLines.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/flot/jquery.flot.resize.js')}}"></script>

    <!-- worldmap -->
    <script type="text/javascript" src="{{asset('js/maps/jquery-jvectormap-2.0.3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/maps/gdp-data.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/maps/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/maps/jquery-jvectormap-us-aea-en.js')}}"></script>
    <!-- pace -->
    <script src="{{asset('js/pace/pace.min.js')}}"></script>

    <!-- skycons -->
    <script src="{{asset('js/skycons/skycons.min.js')}}"></script>
    <!-- /datepicker -->
    <!-- /footer content -->

    <!-- /validador form-->
    
   <script src="{{asset('js/validator/validator.js')}}"></script>
 @yield('js')
 
</body>

</html>
