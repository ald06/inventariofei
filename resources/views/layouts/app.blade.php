<!DOCTYPE html>
<html ang="{{ app()->getLocale() }}">
<head>
	<link rel="shortcut icon" href="{{asset('img/sevlogo.png')}}" alt="DAPE">
	<meta charset="utf-8">
	<title>FEI</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=8" />
	<link rel="stylesheet" type="text/css" href="{{asset ('css/font-neosans.css')}}">
  {{-- <link rel="stylesheet" type="text/css" href="{{asset ('css/app.css')}}"> --}}
  <!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/totop.css') }}"> <!-- Gem style -->
  <link type="text/css" href="{{ asset('hover/css/hover.css')}}" rel="stylesheet" media="all">
	{{-- estilos --}}
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	{{-- Font Awesome --}}
  <link rel="stylesheet" type="text/css" href="{{url('@fortawesome/fontawesome-free/css/all.css ')}}" >
  {{-- Theme style --}}
	<link rel="stylesheet" type="text/css" href="{{ asset('design/dist/css/adminlte.min.css') }}">
	<!-- Theme style -->
	<link rel="stylesheet" type="text/css" href="{{asset ('css/sweetalert.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/select2/select2.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/estilos.css') }}">
	<link rel="stylesheet" type="text/css"href="{{ asset('css/theme-jquery-validation.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{asset ('plugins/sweetAlert2/dist/sweetalert2.min.css')}}">
  <script src="{{ asset('js/popper.min.js')}}" ></script>
	<!-- test input file -->

	<!-- end test input file -->
	{{-- links para css importado --}}
	@yield('links')
	{{-- css para css en el archivo --}}
  @yield('css')
  <style>

/* width */
::-webkit-scrollbar {
    width: 8px;
}

/* Track */
::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px grey;
    border-radius: 10px;
}

/* Handle */
::-webkit-scrollbar-thumb {
    background: #bdbdbd;
    border-radius: 15px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #bdbdbdb0;
}
.select2 {
width:100%!important;
}

		.brand-image {
			max-height: 40px;
		}

                  .boton{
                    display: none;
                    width:50px;
                    height:50px;
                    background-color:rgba(52, 58, 64, 0.5);

                    /*margin: 5px;*/
                    padding:5px;
                    -webkit-border-radius: 5px;
                    -moz-border-radius: 50px;
                    /*border-radius: 50px;*/
                    font-size:11px;
                    line-height:32px;
                    text-transform: uppercase;
                    float:left;

                    text-align: center;
                    overflow: hidden;
                    position: fixed;
                    bottom: 3px;
                    right: 15px;
                    font-size: 1em;
                    text-decoration: none;
                    z-index: 99;
                  }
                  .boton:hover{
                    opacity: 0.50;

                    filter:alpha (opacity=50);
                  }
                  textarea{
  text-transform: uppercase;
}
/*input[type=text]{
  text-transform: uppercase;
}*/
select{
 text-transform: uppercase;
}
.select2-search__field{
 text-transform: uppercase;
}
section{
	background: rgba(225, 226, 225, 212);
}
.keyboard-Key {
    background: #f5f3f8;
    padding: 2px 8px;
    font-size: 13px;
    font-weight: 400;
    min-width: 24px;
    height: 27px;
    margin: 0 2px;
    border-radius: 5px;
    color: #2c2d30;
    border: 1.3px solid #919193;
    box-shadow: 0 1.3px 0 #adadad;
    text-shadow: none;
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    line-height: 21px;
}

</style>
</head>

<body class="hold-transition sidebar-mini sidebar-collapse pr-0 fontResp">
	<div class="wrapper">
	<!-- Navbar -->
	@include('layouts.navbar')
	<!-- /.navbar -->

	<!-- Main Sidebar Container -->
	@include('layouts.sidebar')

 

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper" style="background-color: rgba(225, 226, 225, 212);">
	<!-- Content Header (Page header) -->

		<!-- Main content -->
    
    

		<section class="content pt-1">
    
			<div class="container-fluid p-0">
		 		@if(Session::has('primer_mensaje'))
         	<script type="text/javascript">
           	$(document).ready(function() {
            	swal({
                title: "{{Session::get('primer_mensaje')}}",
                text: "@if(Session::has('segundo_mensaje')){{Session::get('segundo_mensaje')}} @endif",
                type: "success",
                confirmButtonText: "Aceptar",
                confirmButtonColor: "#424242",
                closeOnConfirm: true
            	});
							setTimeout(function(){
								$('select').not('select.select2-hidden-accessible').select2();
							}, 2000);

            });
         	</script>

         	{{Session::forget('primer_mensaje')}}
         	{{Session::forget('segundo_mensaje')}}
        @endif
       	@if(Session::has('errors'))
         	<script type="text/javascript">
           	$(document).ready(function() {
            	swal({
                title: "{{Session::get('Error de datos')}}",
                text: "@foreach($errors->all() as $error) {{ $error }}\n @endforeach",
                type: "error",
                confirmButtonText: "Aceptar",
                confirmButtonColor: "#424242",
                closeOnConfirm: true
            	});
            });
           </script>
           {{Session::forget('errors')}}
        @endif






				@yield('content')

        <div class="modal fade " id="logoutmodal" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered justify-content-center" role="document">
                <div class="modal-content rounded col-md-12 px-0">
                  <div class="modal-header justify-content-center bg-light"><h4> <i class="fa fa-power-off"></i><strong> Salir</strong></h4></div>
                  <div class="modal-body text-center bg-dark">
                    <h5><i class="fa fa-sign-out"></i> ¿Está seguro que desea cerrar sesión?</h5>
                  </div>
                  <div class="modal-footer bg-light">
                    <a class="btn btn-secondary col " data-dismiss="modal" >Cancelar</a>
                    <a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="btn btn-secondary col">Salir</a>
                  </div>
                    <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
              </div>
            </div>
			</div>
      <!--/. container-fluid -->
		</section>

  

		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

	<!-- Control Sidebar (a secondary optional sidebar) -->
	{{-- @include('template.partials.sidebar2') --}}
	<!-- /.control-sidebar -->

	<!-- Main Footer -->
	{{-- @include('layouts.footer') --}}
</div>
<!-- ./wrapper -->
    {{-- <a href="#0" class="cd-top" >Top</a> --}}


{{-- JS --}}
{{-- @routes is used to import named routes from ziggy -> to make dinamical routes as ROUTE HELPER on laravel --}}
@routes
{{-- ziggy is a package you must install...it's not included with laravel aplo --}}
<script src="{{ asset ('js/app.js')}}"></script>
<script src="{{ asset ('admin-lte/dist/js/adminlte.min.js')}}"></script>

<script src="{{asset ('js/sweetalert.min.js')}}"></script>
<script src="{{ asset('design/plugins/select2/select2.min.js')}}" ></script>
<script src="{{ asset('js/toastr.min.js')}}" ></script>
<script src="{{ asset('js/jquery.form-validator.min.js')}}" ></script>
{{-- <script src="{{ asset('js/bootstrap.min.js')}}" ></script> --}}
<!-- REQUIRED SCRIPTS -->
<script src="{{ asset('design/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('design/dist/js/adminlte.js') }}"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('design/dist/js/demo.js') }}"></script>
<!-- ChartJS 1.0.1 -->
{{-- <script src="{{ asset('design/plugins/chartjs/Chart.min.js') }}"></script> --}}
<script src="{{ asset('js/main.js')}}"></script>

{{--Cerrar sesión por inactividad--}}
<script src="{{ asset('js/idle-timer.min.js')}}"></script>
{{-- sweetalert2 --}}
<script src="{{ asset ('plugins/sweetAlert2/dist/sweetalert2.all.min.js')}}"></script>

<script>
	$(function() {
		@if(Session::has('message'))
	    Swal.fire({
	      title: '{{ Session::get('message') }}',
	      html: '',
	      icon: 'success',
	      confirmButtonText: 'Aceptar'
	    })
	  @endif
	  @if($errors->any())
	    Swal.fire({
	      title: 'Error',
	      html: '@foreach($errors->all() as $error) <li>{!! $error !!}</li> @endforeach',
	      icon: 'error',
	      confirmButtonText: 'Aceptar'
	    })
	  @endif
	});
  // $(function() {
  //   // Set idle time
  //   $( document ).idleTimer( 1500000 );
	// });

// $(function() {
//     $( document ).on( "idle.idleTimer", function(e, event, elem, obj){
//         console.log('FUERA!!!!');
//         var formi = $(this).find('#logout-form');
//         e.preventDefault();
//         history.replaceState("", "", "{{url('/logout')}}");
//         history.pushState(null, null, document.URL);
//         window.addEventListener('popstate', function () {
//         history.pushState(null, null, document.URL);
//         });
//         swal({
//                 title: "Sesión expirada por inactividad",
//                 text: "Por tu seguridad, se ha cerrado la sesión",
//                 type: "warning",
//                 confirmButtonText: "Aceptar",
//                 confirmButtonColor: "#424242",
//                 closeOnConfirm: true,
//                 allowEscapeKey : false,
//                 allowOutsideClick: false
//             }, function (isContinuar) {
//             if (isContinuar) {
//                $(formi).submit();
//             }
//          });
//     });
// });
</script>
{{--Fin cerrar sesion por inactividad--}}

@yield('scripts')

</body>
</html>
