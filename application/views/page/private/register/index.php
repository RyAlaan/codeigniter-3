<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"
						><i class="fas fa-bars"></i
					></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="index3.html" class="nav-link">Home</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="#" class="nav-link">Contact</a>
				</li>
			</ul>

			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<!-- Navbar Search -->
				<li class="nav-item">
					<a
						class="nav-link"
						data-widget="navbar-search"
						href="#"
						role="button"
					>
						<i class="fas fa-search"></i>
					</a>
					<div class="navbar-search-block">
						<form class="form-inline">
							<div class="input-group input-group-sm">
								<input
									class="form-control form-control-navbar"
									type="search"
									placeholder="Search"
									aria-label="Search"
								/>
								<div class="input-group-append">
									<button class="btn btn-navbar" type="submit">
										<i class="fas fa-search"></i>
									</button>
									<button
										class="btn btn-navbar"
										type="button"
										data-widget="navbar-search"
									>
										<i class="fas fa-times"></i>
									</button>
								</div>
							</div>
						</form>
					</div>
				</li>

				<!-- Messages Dropdown Menu -->
				<li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="far fa-comments"></i>
						<span class="badge badge-danger navbar-badge">3</span>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<a href="#" class="dropdown-item">
							<!-- Message Start -->
							<div class="media">
								<img
									src="<?= base_url('assets/adminlte/') ?>dist/img/user1-128x128.jpg"
									alt="User Avatar"
									class="img-size-50 mr-3 img-circle"
								/>
								<div class="media-body">
									<h3 class="dropdown-item-title">
										Brad Diesel
										<span class="float-right text-sm text-danger"
											><i class="fas fa-star"></i
										></span>
									</h3>
									<p class="text-sm">Call me whenever you can...</p>
									<p class="text-sm text-muted">
										<i class="far fa-clock mr-1"></i> 4 Hours Ago
									</p>
								</div>
							</div>
							<!-- Message End -->
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<!-- Message Start -->
							<div class="media">
								<img
									src="<?= base_url('assets/adminlte/') ?>dist/img/user8-128x128.jpg"
									alt="User Avatar"
									class="img-size-50 img-circle mr-3"
								/>
								<div class="media-body">
									<h3 class="dropdown-item-title">
										John Pierce
										<span class="float-right text-sm text-muted"
											><i class="fas fa-star"></i
										></span>
									</h3>
									<p class="text-sm">I got your message bro</p>
									<p class="text-sm text-muted">
										<i class="far fa-clock mr-1"></i> 4 Hours Ago
									</p>
								</div>
							</div>
							<!-- Message End -->
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<!-- Message Start -->
							<div class="media">
								<img
									src="<?= base_url('assets/adminlte/') ?>dist/img/user3-128x128.jpg"
									alt="User Avatar"
									class="img-size-50 img-circle mr-3"
								/>
								<div class="media-body">
									<h3 class="dropdown-item-title">
										Nora Silvester
										<span class="float-right text-sm text-warning"
											><i class="fas fa-star"></i
										></span>
									</h3>
									<p class="text-sm">The subject goes here</p>
									<p class="text-sm text-muted">
										<i class="far fa-clock mr-1"></i> 4 Hours Ago
									</p>
								</div>
							</div>
							<!-- Message End -->
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item dropdown-footer"
							>See All Messages</a
						>
					</div>
				</li>
				<!-- Notifications Dropdown Menu -->
				<li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="far fa-bell"></i>
						<span class="badge badge-warning navbar-badge">15</span>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<span class="dropdown-item dropdown-header"
							>15 Notifications</span
						>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-envelope mr-2"></i> 4 new messages
							<span class="float-right text-muted text-sm">3 mins</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-users mr-2"></i> 8 friend requests
							<span class="float-right text-muted text-sm">12 hours</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-file mr-2"></i> 3 new reports
							<span class="float-right text-muted text-sm">2 days</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item dropdown-footer"
							>See All Notifications</a
						>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-widget="fullscreen" href="#" role="button">
						<i class="fas fa-expand-arrows-alt"></i>
					</a>
				</li>
				<li class="nav-item">
					<a
						class="nav-link"
						data-widget="control-sidebar"
						data-controlsidebar-slide="true"
						href="#"
						role="button"
					>
						<i class="fas fa-th-large"></i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<?php $this->load->view('layout/adminlte/sidebar') ?>


		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
						<h1 class="m-0">Halaman Data Pendaftar</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url('admin');?>">Dasboard</a></li>
						<li class="breadcrumb-item active">Data Pendaftar</li>
						</ol>
					</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<section class="content">
			
				<!-- Main row -->
				<div class="row">
					<!-- Left col -->
					<section class="col-lg-12 connectedSortable">
						<!-- Custom tabs (Charts with tabs)-->
						<div class="card">
							<div class="card-header d-flex flex-row align-items-center justify-content-between">
								<h3 class="card-title mb-0">
								Data Tabel Pendaftar
								</h3>
								<a class="btn btn-primary ml-auto" href="<?= base_url('/RegisterController/generatePDF') ?>">Cetak PDF</a>
							</div><!-- /.card-header -->
							<div class="card-body">
								<div class="tab-content p-0">
									<table class="table table-responsive-md">
										<thead class="thead-dark">
											<tr>
												<th>#</th>
												<th>bidang lomba</th>
												<th>sekolah</th>
												<th>nama siswa</th>
												<th>nama guru</th>
												<th>status</th>
												<th>file bukti</th>
												<th class="text-center">action</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($registrations as $key => $data)  :?>
												<tr>
													<td><?= $data->id_reg ?></td>
													<td><?= $data->bidang_lomba ?></td>
													<td><?= $data->asal_sekolah ?></td>
													<td><?= $data->nama_siswa ?></td>
													<td><?= $data->nama_guru ?></td>
													<td><?= $data->validasi == 1 ? "belum valid" : "valid" ?></td>
													<td><a href="<?= base_url( '/assets/uploads/' . $data->file_bukti) ?>">file bukti</a></td>
													<td>
														<ul class="navbar-nav">
															<li class="nav-item dropdown">
																<a href="#" class="nav-link dropdown-toggle text-dark" id="actionDropdown" data-toggle="dropdown">Action</a>
																<div class="dropdown-menu" aria-labelledby="actionDropdown">
																	<a class="text-dark dropdown-item" href="<?= base_url('/dashboard/data-pendaftar/' . $data->id_reg) ?>">Detail</a>
																	<a class="text-dark dropdown-item" href="<?= base_url('/dashboard/data-pendaftar/edit/' . $data->id_reg ) ?>">Edit</a>
																	<form action="<?= base_url('/RegisterController/confirm/' . $data->id_reg) ?>" method="post">
																		<input type="text" name="_method" value="POST" hidden>
																		<button type="submit" class="btn">Confirm</button>
																	</form>
																	<form action="<?= base_url('/RegisterController/delete/' . $data->id_reg) ?>" method="post">
																		<input type="text" name="_method" value="DELETE" hidden>
																		<button type="submit" class="btn">Delete</button>
																	</form>
																</div>
															</li>
														</ul>
													</td>
												</tr>
											<?php endforeach ?>
										</tbody>
									</table>
								</ta>
							</div><!-- /.card-body -->
						</div>
					
					</section>
					<!-- /.Left col -->
				</div>
				<!-- /.container-fluid -->
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer">
			<strong
				>Copyright &copy; 2014-2021
				<a href="https://adminlte.io">AdminLTE.io</a>.</strong
			>
			All rights reserved.
			<div class="float-right d-none d-sm-inline-block">
				<b>Version</b> 3.2.0
			</div>
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->