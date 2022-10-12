<aside class="main-sidebar  elevation-4 barra-izquierda" style="background-color:rgb(50, 49, 49)" id="barra">
	<!-- Brand Logo -->
	<a href="{{url('/')}}" class="brand-link hvr-icon-grow" style="position:relative; z-index:-1;">
		<img src="{{asset('img/fei.png')}}" alt="Logo" height="" class="hvr-icon brand-image img-circle elevation-3 mr-5">
		<span class="navselement brand-text font-weight-light"> <b class="font-weight-bold" style="font-size:25px;color:rgb(24, 89, 232);">SIFEI</b> </span>
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
							Preescolar
							<i class="right fa fa-angle-left "></i>
						</p>
					</a>
					<ul class="nav nav-treeview submenu">
						<li class="nav-item submenuitem">
							<a href="{{ url('/preescolardocentes') }}" class="nav-link"><i class="fas fa-building nav-icon submenuitem"></i>
								<p class="submenuitem">Docentes</p>
							</a>
						</li>
					</ul>
					<ul class="nav nav-treeview submenu">
						<li class="nav-item submenuitem">
							<a href="{{ url('/preescolardirectivos') }}" class="nav-link"><i class="fas fa-address-card nav-icon submenuitem"></i>
								<p class="submenuitem">Directivos</p>
							</a>
						</li>
					</ul>
					<ul class="nav nav-treeview submenu">
						<li class="nav-item submenuitem">
							<a href="{{ url('/preescolarsubdirectores') }}" class="nav-link"><i class="fas fa-book-reader nav-icon submenuitem"></i>
								<p class="submenuitem">Subdirector</p>
							</a>
						</li>
					</ul>
					<ul class="nav nav-treeview submenu">
						<li class="nav-item submenuitem">
							<a href="{{ url('/preescolarinspectores') }}" class="nav-link"><i class="fas fa-book-reader nav-icon submenuitem"></i>
								<p class="submenuitem">Inspector/Supervisor</p>
							</a>
						</li>
					</ul>
				</li>
					<li class="nav-item has-treeview ">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-folder-minus"></i>
							<p>
								Primaria
								<i class="right fa fa-angle-left "></i>
							</p>
						</a>
						<ul class="nav nav-treeview submenu">
							<li class="nav-item submenuitem">
								<a href="{{ url('/primariasdocentes') }}" class="nav-link"><i class="fas fa-building nav-icon submenuitem"></i>
									<p class="submenuitem">Docentes</p>
								</a>
							</li>
						</ul>
						<ul class="nav nav-treeview submenu">
							<li class="nav-item submenuitem">
								<a href="{{ url('/primariasdirectivos') }}" class="nav-link"><i class="fas fa-address-card nav-icon submenuitem"></i>
									<p class="submenuitem">Directivos</p>
								</a>
							</li>
						</ul>
						<ul class="nav nav-treeview submenu">
							<li class="nav-item submenuitem">
								<a href="{{ url('/primariassubdirectores') }}" class="nav-link"><i class="fas fa-book-reader nav-icon submenuitem"></i>
									<p class="submenuitem">Subdirector</p>
								</a>
							</li>
						</ul>
						<ul class="nav nav-treeview submenu">
							<li class="nav-item submenuitem">
								<a href="{{ url('/primariasinspectores') }}" class="nav-link"><i class="fas fa-book-reader nav-icon submenuitem"></i>
									<p class="submenuitem">Inspector/Supervisor</p>
								</a>
							</li>
						</ul>
					</li>

						<ul class="nav nav-treeview submenu">
							<li class="nav-item submenuitem">
								<a href="{{ url('/preescolarinspectores') }}" class="nav-link"><i class="fas fa-book-reader nav-icon submenuitem"></i>
									<p class="submenuitem">Inspector/Supervisor</p>
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item has-treeview ">
						<a href="#" class="nav-link">
							<i class="nav-icon fas fa-folder-minus"></i>
							<p>
								Telescundarias
								<i class="right fa fa-angle-left "></i>
							</p>
						</a>
						<ul class="nav nav-treeview submenu">
							<li class="nav-item submenuitem">
								<a href="{{ url('/telesecundariasdocentes') }}" class="nav-link"><i class="fas fa-building nav-icon submenuitem"></i>
									<p class="submenuitem">Docentes</p>
								</a>
							</li>
						</ul>
						<ul class="nav nav-treeview submenu">
							<li class="nav-item submenuitem">
								<a href="{{ url('/telesecundariasdirectivos') }}" class="nav-link"><i class="fas fa-address-card nav-icon submenuitem"></i>
									<p class="submenuitem">Directivos</p>
								</a>
							</li>
						</ul>
						<ul class="nav nav-treeview submenu">
							<li class="nav-item submenuitem">
								<a href="{{ url('/telesecundariassubdirectores') }}" class="nav-link"><i class="fas fa-book-reader nav-icon submenuitem"></i>
									<p class="submenuitem">Subdirector</p>
								</a>
							</li>
						</ul>
						<ul class="nav nav-treeview submenu">
							<li class="nav-item submenuitem">
								<a href="{{ url('/telesecundariasinspectores') }}" class="nav-link"><i class="fas fa-book-reader nav-icon submenuitem"></i>
									<p class="submenuitem">Inspector/Supervisor</p>
								</a>
							</li>
						</ul>
						<li class="nav-item has-treeview ">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-folder-minus"></i>
								<p>
									Fisica
									<i class="right fa fa-angle-left "></i>
								</p>
							</a>
							<ul class="nav nav-treeview submenu">
								<li class="nav-item submenuitem">
									<a href="{{ url('/fisicadocentes') }}" class="nav-link"><i class="fas fa-building nav-icon submenuitem"></i>
										<p class="submenuitem">Docentes</p>
									</a>
								</li>
							</ul>
							<ul class="nav nav-treeview submenu">
								<li class="nav-item submenuitem">
									<a href="{{ url('/fisicadirectivos') }}" class="nav-link"><i class="fas fa-address-card nav-icon submenuitem"></i>
										<p class="submenuitem">Directivos</p>
									</a>
								</li>
							</ul>
							<ul class="nav nav-treeview submenu">
								<li class="nav-item submenuitem">
									<a href="{{ url('/fisicasubdirectores') }}" class="nav-link"><i class="fas fa-book-reader nav-icon submenuitem"></i>
										<p class="submenuitem">Subdirector</p>
									</a>
								</li>
							</ul>
							<ul class="nav nav-treeview submenu">
								<li class="nav-item submenuitem">
									<a href="{{ url('/fisicainspectores') }}" class="nav-link"><i class="fas fa-book-reader nav-icon submenuitem"></i>
										<p class="submenuitem">Inspector/Supervisor</p>
									</a>
								</li>
							</ul>
							<li class="nav-item has-treeview ">
								<a href="#" class="nav-link">
									<i class="nav-icon fas fa-folder-minus"></i>
									<p>Especial
										<i class="right fa fa-angle-left "></i>
									</p>
								</a>
								<ul class="nav nav-treeview submenu">
									<li class="nav-item submenuitem">
										<a href="{{ url('/especialdocentes') }}" class="nav-link"><i class="fas fa-building nav-icon submenuitem"></i>
											<p class="submenuitem">Docentes</p>
										</a>
									</li>
								</ul>
								<ul class="nav nav-treeview submenu">
									<li class="nav-item submenuitem">
										<a href="{{ url('/especialdirectivos') }}" class="nav-link"><i class="fas fa-address-card nav-icon submenuitem"></i>
											<p class="submenuitem">Directivos</p>
										</a>
									</li>
								</ul>
								<ul class="nav nav-treeview submenu">
									<li class="nav-item submenuitem">
										<a href="{{ url('/especialsubdirectores') }}" class="nav-link"><i class="fas fa-book-reader nav-icon submenuitem"></i>
											<p class="submenuitem">Subdirector</p>
										</a>
									</li>
								</ul>
								<ul class="nav nav-treeview submenu">
									<li class="nav-item submenuitem">
										<a href="{{ url('/especialinspectores') }}" class="nav-link"><i class="fas fa-book-reader nav-icon submenuitem"></i>
											<p class="submenuitem">Inspector/Supervisor</p>
										</a>
									</li>
								</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
