<aside class="main-sidebar  elevation-4 barra-izquierda" style="background-color:rgb(50, 49, 49)" id="barra">
	<!-- Brand Logo -->
	<a href="{{url('/')}}" class="brand-link hvr-icon-grow" style="position:relative; z-index:-1;">
		<img src="{{asset('img/fei.png')}}" alt="Logo" height="" class="hvr-icon brand-image img-circle elevation-3 mr-5">
		<span class="navselement brand-text font-weight-light"> <b class="font-weight-bold" style="font-size:25px;color:rgb(41, 43, 200);">SIFEI</b> </span>
	</a>
	<!-- Sidebar -->
	<div class="sidebar font-weight-light">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-1 mb-1 d-flex hvr-icon-spin">
			<div class="image ">
				<i class="fa fa-user-circle hvr-icon" aria-hidden="true" style="color:white; font-size:33px;"></i>
			</div>
			<div class="info d-block">
				<small>usuario</small>
			</div>
		</div>
		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item has-treeview ">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-folder-minus"></i>
						<p>
							Hardware
							<i class="right fa fa-angle-left "></i>
						</p>
					</a>
				</li>
					<li class="nav-item has-treeview ">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-folder-minus"></i>
							<p>
								Software
								<i class="right fa fa-angle-left "></i>
							</p>
						</a>
						<ul class="nav nav-treeview submenu">
							<li class="nav-item submenuitem">
								<a href="{{ url('/primariasdocentes') }}" class="nav-link"><i class="fas fa-building nav-icon submenuitem"></i>
									<p class="submenuitem">Consulta</p>
								</a>
							</li>
						</ul>
						<li class="nav-item has-treeview ">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-folder-minus"></i>
								<p>
									Reparacion de equipos
									<i class="right fa fa-angle-left "></i>
								</p>
							</a>
							<ul class="nav nav-treeview submenu">
								<li class="nav-item submenuitem">
									<a href="{{ url('/primariasdocentes') }}" class="nav-link"><i class="fas fa-building nav-icon submenuitem"></i>
										<p class="submenuitem">Registro</p>
									</a>
								</li>
							</ul>

		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
