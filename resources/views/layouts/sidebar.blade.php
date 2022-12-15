

<aside class="main-sidebar  elevation-4 barra-izquierda" style="background-color:rgb(50, 49, 49)" id="barra">
	<!-- Brand Logo -->
	<a href="{{url('/home')}}" class="brand-link hvr-icon-grow" style="position:relative; z-index:-1;">
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
				<small>Bienvenid@ {{ auth()->user()->name }}</small>
			</div>
		</div>
		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				
					<li class="nav-item has-treeview ">
						<a href="#" class="nav-link ">
							<i class="fa-solid fas fa-desktop"></i>			
							<p>
								Hardware
								<i class="right fa fa-angle-left "></i>
							</p>
						</a>
						<ul class="nav nav-treeview submenu">
								<li class="nav-item submenuitem">
									<a href="{{ url('/hardware') }}" class="nav-link"><i class="fa-solid fas fa-folder-plus"></i>
										<p class="submenuitem">Registros</p>
									</a>
								</li>
							</ul>
					</li>
				
				
				<li class="nav-item has-treeview ">
					<a href="#" class="nav-link">
						<i class="fa-solid fas fa-compact-disc"></i>
							<p>
								Software
								<i class="right fa fa-angle-left "></i>
							</p>
						</a>
						<ul class="nav nav-treeview submenu">
							<li class="nav-item submenuitem">
								<a href="{{ url('/hardware') }}" class="nav-link"><i class="fa-solid fas fa-folder-plus"></i>
									<p class="submenuitem">Registros</p>
								</a>
							</li>
						</ul>
				<li class="nav-item has-treeview ">
							<a href="#" class="nav-link">
								<i class="fa-solid fas fa-wrench"></i>
								<p>
									Reparacion de equipos
									<i class="right fa fa-angle-left "></i>
								</p>
							</a>
							<ul class="nav nav-treeview submenu">
								<li class="nav-item submenuitem">
									<a href="{{ url('/') }}" class="nav-link"><i class="fa-solid fas fa-folder-plus"></i>
										<p class="submenuitem">Registros</p>
									</a>
								</li>
							</ul>
				<li class="nav-item has-treeview ">
					<a href="#" class="nav-link">
					<i class="fa-solid fas fa-user-tie"></i>
						<p>
							Personal
							<i class="right fa fa-angle-left "></i>
						</p>
					</a>
					<ul class="nav nav-treeview submenu">
								<li class="nav-item submenuitem">
									<a href="{{ url('/responsable') }}" class="nav-link"><i class="fa-solid fas fa-folder-plus"></i>
										<p class="submenuitem">Responsables</p>
									</a>
								</li>
								<li class="nav-item submenuitem">
									<a href="{{ url('/users') }}" class="nav-link"><i class="fa-solid fas fa-folder-plus"></i>
										<p class="submenuitem">Usuarios</p>
									</a>
								</li>
							</ul>
				</li>
				<li class="nav-item has-treeview ">
						<a href="#" class="nav-link">
							<i class="fa-solid fas fa-window-restore"></i>
							<p>
								Catalogos
								<i class="right fa fa-angle-left "></i>
							</p>
						</a>
					<ul class="nav nav-treeview submenu">
						<li class="nav-item submenuitem">
							<a href="{{ url('/tiposhardware') }}" class="nav-link"><i class="fa-solid fas fa-list"></i>
								<p class="submenuitem">Hardware</p>
							</a>
						</li>
					</ul>
						<ul class="nav nav-treeview submenu">
									<li class="nav-item submenuitem">
										<a href="{{ url('/ubicacion') }}" class="nav-link"><i class="fa-solid fas fa-location-arrow"></i>
											<p class="submenuitem">Ubicaciones</p>
										</a>
									</li>
								</ul>
								<ul class="nav nav-treeview submenu">
						<li class="nav-item submenuitem">
							<a href="{{ url('/tiposadquisicion') }}" class="nav-link"><i class="fa-solid fas fa-money-bill"></i>
								<p class="submenuitem">Adquisiciones</p>
							</a>
						</li>
					</ul>
				</li>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
