<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="<?= base_url('/') ?>" class="brand-link">
		<img
			src="<?= base_url('assets/adminlte/') ?>dist/img/AdminLTELogo.png"
			alt="AdminLTE Logo"
			class="brand-image img-circle elevation-3"
			style="opacity: 0.8"
		/>
		<span class="brand-text font-weight-light">AdminLTE 3</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar Menu -->
		<nav class="mt-2">	
			<ul
				class="nav nav-pills nav-sidebar flex-column"
				data-widget="treeview"
				role="menu"
				data-accordion="false"
			>
				<!-- Add icons to the links using the .nav-icon classwith font-awesome or any other icon font library -->
				<li class="nav-item">
					<a href="<?= base_url('/dashboard') ?>" class="nav-link">
					<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('/dashboard/data-pendaftar') ?>" class="nav-link">
						<i class="nav-icon fas fa-th"></i>
						<p>
							Data Pendaftar
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('/index.php/validasi') ?>" class="nav-link">
						<i class="nav-icon fas fa-copy"></i>
						<p>
							Validasi data
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<? base_url('/validasi/peserta') ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Validasi data peserta</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<? base_url('/validasi/akun') ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Validasi akun</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-chart-pie"></i>
						<p>
							Data Akun
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="pages/charts/chartjs.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Data akun siswa</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/charts/flot.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Data akun pendamping</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-tree"></i>
						<p>
							UI Elements
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="pages/UI/general.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>General</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/UI/icons.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Icons</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/UI/buttons.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Buttons</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/UI/sliders.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Sliders</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/UI/modals.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Modals & Alerts</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/UI/navbar.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Navbar & Tabs</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/UI/timeline.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Timeline</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pages/UI/ribbons.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Ribbons</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-header">AKUN</li>
				<li class="nav-item">
					<a href="<?= base_url('/AuthController/handleLogout') ?>" class="nav-link">
						<i class="nav-icon far fa-image"></i>
						<p>Logout</p>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>