<nav class="main-header navbar navbar-expand border-bottom" style="background-color:rgb(50, 49, 49)">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link navselement" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
		</li>
	</ul>
	<ul class="my-0">
		<a class="text-white"> Sistema de inventario </a>
	</ul>
	<!-- Right navbar links -->
	<ul class="navbar-nav ml-auto">
	{{-- <li class="nav-item " data-toggle="tooltip" data-placement="bottom" title="Atajos de teclado">
        <a title="Atajos de teclado" class="btn  text-white mt-1 btn-sm d-none d-sm-block" data-toggle="modal" data-target="#ModalShortCut" ><i class="fas fa-question-circle"></i></a>
	</li> --}}
      {{-- <div id="app">
        <notification :userid="{{auth()->id()}}" :unreads="{{auth()->user()->unreadNotificationsLimit}}" :userids="'{{asset('sounds/notificationSound.wav')}} ' " userol="{{session()->get('rol')}}"></notification>
      </div> --}}

			<!-- notification -->
			{{-- <li class="nav-item dropdown no-arrow mx-1">
					<a class="btn dropdown-toggle text-white" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-bell fa-fw"></i>
							<!-- Counter - Alerts -->
							<span class="badge badge-danger badge-counter">3+</span>
					</a>
					<!-- Dropdown - Alerts -->
					<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
							<h6 class="dropdown-header">
									Notificaciones
							</h6>
							<a class="dropdown-item d-flex align-items-center" href="#">
									<div class="mr-3">
											<div class="icon-circle bg-primary">
													<i class="fas fa-file-alt text-white"></i>
											</div>
									</div>
									<div>
											<div class="small text-gray-500">Agosto 12, 2019</div>
											<span class="font-weight-bold">Nuevo Trámite Generado</span>
									</div>
							</a>
							<a class="dropdown-item d-flex align-items-center" href="#">
									<div class="mr-3">
											<div class="icon-circle bg-success">
													<i class="fas fa-donate text-white"></i>
											</div>
									</div>
									<div>
											<div class="small text-gray-500">Agosto 7, 2019</div>
											Se generó un reporte de trámites
									</div>
							</a>
							<a class="dropdown-item d-flex align-items-center" href="#">
									<div class="mr-3">
											<div class="icon-circle bg-warning">
													<i class="fas fa-exclamation-triangle text-white"></i>
											</div>
									</div>
									<div>
											<div class="small text-gray-500">Agosto 2, 2019</div>
											Alerta de usuarios con baja productividad.
									</div>
							</a>
							<a class="dropdown-item text-center small text-gray-500" href="#">Ver todo</a>
					</div> --}}
			</li>
			{{-- notification --}}
		<li class="nav-item " data-toggle="tooltip" data-placement="bottom" title="Cerrar sesión">
			<a title="Salir" class="btn  text-white mt-1 btn-sm" data-toggle="modal" data-target="#logoutmodal" ><i class="fas fa-power-off fa-fw fa-lg"></i></a>
		</li>

	</ul>
</nav>
