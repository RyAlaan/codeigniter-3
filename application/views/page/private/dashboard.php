<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>AdminLTE 3 | Dashboard</title>

		<!-- Google Font: Source Sans Pro -->
		<link
			rel="stylesheet"
			href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
		/>
		<!-- Font Awesome -->
		<link rel="stylesheet" href="<?= base_url('assets/adminlte/') ?>plugins/fontawesome-free/css/all.min.css" />
		<!-- Ionicons -->
		<link
			rel="stylesheet"
			href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
		/>
		<!-- Tempusdominus Bootstrap 4 -->
		<link
			rel="stylesheet"
			href="<?= base_url('assets/adminlte/') ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"
		/>
		<!-- iCheck -->
		<link
			rel="stylesheet"
			href="<?= base_url('assets/adminlte/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css"
		/>
		<!-- JQVMap -->
		<link rel="stylesheet" href="<?= base_url('assets/adminlte/') ?>plugins/jqvmap/jqvmap.min.css" />
		<!-- Theme style -->
		<link rel="stylesheet" href="<?= base_url('assets/adminlte/') ?>dist/css/adminlte.min.css?v=3.2.0" />
		<!-- overlayScrollbars -->
		<link
			rel="stylesheet"
			href="<?= base_url('assets/adminlte/') ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css"
		/>
		<!-- Daterange picker -->
		<link rel="stylesheet" href="<?= base_url('assets/adminlte/') ?>plugins/daterangepicker/daterangepicker.css" />
		<!-- summernote -->
		<link rel="stylesheet" href="<?= base_url('assets/adminlte/') ?>plugins/summernote/summernote-bs4.min.css" />
		<script data-cfasync="false" nonce="d20d0027-326e-4a6d-890a-2435870dc0cd">
			try {
				(function (w, d) {
					!(function (a, b, c, d) {
						if (a.zaraz) console.error("zaraz is loaded twice");
						else {
							a[c] = a[c] || {};
							a[c].executed = [];
							a.zaraz = { deferred: [], listeners: [] };
							a.zaraz._v = "5848";
							a.zaraz._n = "d20d0027-326e-4a6d-890a-2435870dc0cd";
							a.zaraz.q = [];
							a.zaraz._f = function (e) {
								return async function () {
									var f = Array.prototype.slice.call(arguments);
									a.zaraz.q.push({ m: e, a: f });
								};
							};
							for (const g of ["track", "set", "debug"])
								a.zaraz[g] = a.zaraz._f(g);
							a.zaraz.init = () => {
								var h = b.getElementsByTagName(d)[0],
									i = b.createElement(d),
									j = b.getElementsByTagName("title")[0];
								j && (a[c].t = b.getElementsByTagName("title")[0].text);
								a[c].x = Math.random();
								a[c].w = a.screen.width;
								a[c].h = a.screen.height;
								a[c].j = a.innerHeight;
								a[c].e = a.innerWidth;
								a[c].l = a.location.href;
								a[c].r = b.referrer;
								a[c].k = a.screen.colorDepth;
								a[c].n = b.characterSet;
								a[c].o = new Date().getTimezoneOffset();
								if (a.dataLayer)
									for (const k of Object.entries(
										Object.entries(dataLayer).reduce(
											(l, m) => ({ ...l[1], ...m[1] }),
											{}
										)
									))
										zaraz.set(k[0], k[1], { scope: "page" });
								a[c].q = [];
								for (; a.zaraz.q.length; ) {
									const n = a.zaraz.q.shift();
									a[c].q.push(n);
								}
								i.defer = !0;
								for (const o of [localStorage, sessionStorage])
									Object.keys(o || {})
										.filter((q) => q.startsWith("_zaraz_"))
										.forEach((p) => {
											try {
												a[c]["z_" + p.slice(7)] = JSON.parse(o.getItem(p));
											} catch {
												a[c]["z_" + p.slice(7)] = o.getItem(p);
											}
										});
								i.referrerPolicy = "origin";
								i.src =
									"/cdn-cgi/zaraz/s.js?z=" +
									btoa(encodeURIComponent(JSON.stringify(a[c])));
								h.parentNode.insertBefore(i, h);
							};
							["complete", "interactive"].includes(b.readyState)
								? zaraz.init()
								: a.addEventListener("DOMContentLoaded", zaraz.init);
						}
					})(w, d, "zarazData", "script");
					window.zaraz._p = async (bs) =>
						new Promise((bt) => {
							if (bs) {
								bs.e &&
									bs.e.forEach((bu) => {
										try {
											const bv = d.querySelector("script[nonce]"),
												bw = bv?.nonce || bv?.getAttribute("nonce"),
												bx = d.createElement("script");
											bw && (bx.nonce = bw);
											bx.innerHTML = bu;
											bx.onload = () => {
												d.head.removeChild(bx);
											};
											d.head.appendChild(bx);
										} catch (by) {
											console.error(`Error executing script: ${bu}\n`, by);
										}
									});
								Promise.allSettled(
									(bs.f || []).map((bz) => fetch(bz[0], bz[1]))
								);
							}
							bt();
						});
					zaraz._p({ e: ["(function(w,d){})(window,document)"] });
				})(window, document);
			} catch (e) {
				throw (fetch("/cdn-cgi/zaraz/t"), e);
			}
		</script>
	</head>
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
								<h1 class="m-0">Dashboard</h1>
							</div>
							<!-- /.col -->
							<div class="col-sm-6">
								<ol class="breadcrumb float-sm-right">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active">Dashboard v1</li>
								</ol>
							</div>
							<!-- /.col -->
						</div>
						<!-- /.row -->
					</div>
					<!-- /.container-fluid -->
				</div>
				<!-- /.content-header -->

				<!-- Main content -->
				<section class="content">
					<div class="container-fluid">
						<!-- Small boxes (Stat box) -->
						<div class="row">
							<div class="col-lg-3 col-6">
								<!-- small box -->
								<div class="small-box bg-info">
									<div class="inner">
										<h3><?= $validDataCount ?></h3>

										<p>Jumlah Peserta</p>
									</div>
									<div class="icon">
										<i class="ion ion-bag"></i>
									</div>
									<a href="#" class="small-box-footer"
										>More info <i class="fas fa-arrow-circle-right"></i
									></a>
								</div>
							</div>
							<!-- ./col -->
							<div class="col-lg-3 col-6">
								<!-- small box -->
								<div class="small-box bg-success">
									<div class="inner">
										<h3><?= $persentasi ?><sup style="font-size: 20px">%</sup></h3>
										<p>Persentasi</p>
									</div>
									<div class="icon">
										<i class="ion ion-stats-bars"></i>
									</div>
									<a href="#" class="small-box-footer"
										>More info <i class="fas fa-arrow-circle-right"></i
									></a>
								</div>
							</div>
							<!-- ./col -->
							<div class="col-lg-3 col-6">
								<!-- small box -->
								<div class="small-box bg-warning">
									<div class="inner">
										<h3><?= $registrationsCount ?></h3>
										<p>Registrasi user</p>
									</div>
									<div class="icon">
										<i class="ion ion-person-add"></i>
									</div>
									<a href="#" class="small-box-footer"
										>More info <i class="fas fa-arrow-circle-right"></i
									></a>
								</div>
							</div>
							<!-- ./col -->
							<div class="col-lg-3 col-6">
								<!-- small box -->
								<div class="small-box bg-danger">
									<div class="inner">
										<h3>65</h3>

										<p>Validasi data</p>
									</div>
									<div class="icon">
										<i class="ion ion-pie-graph"></i>
									</div>
									<a href="#" class="small-box-footer"
										>More info <i class="fas fa-arrow-circle-right"></i
									></a>
								</div>
							</div>
							<!-- ./col -->
						</div>
						<!-- /.row -->
						
						

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

		<!-- jQuery -->
		<script src="<?= base_url('assets/adminlte/') ?>plugins/jquery/jquery.min.js"></script>
		<!-- jQuery UI 1.11.4 -->
		<script src="<?= base_url('assets/adminlte/') ?>plugins/jquery-ui/jquery-ui.min.js"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
			$.widget.bridge("uibutton", $.ui.button);
		</script>
		<!-- Bootstrap 4 -->
		<script src="<?= base_url('assets/adminlte/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- ChartJS -->
		<script src="<?= base_url('assets/adminlte/') ?>plugins/chart.js/Chart.min.js"></script>
		<!-- Sparkline -->
		<script src="<?= base_url('assets/adminlte/') ?>plugins/sparklines/sparkline.js"></script>
		<!-- JQVMap -->
		<script src="<?= base_url('assets/adminlte/') ?>plugins/jqvmap/jquery.vmap.min.js"></script>
		<script src="<?= base_url('assets/adminlte/') ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
		<!-- jQuery Knob Chart -->
		<script src="<?= base_url('assets/adminlte/') ?>plugins/jquery-knob/jquery.knob.min.js"></script>
		<!-- daterangepicker -->
		<script src="<?= base_url('assets/adminlte/') ?>plugins/moment/moment.min.js"></script>
		<script src="<?= base_url('assets/adminlte/') ?>plugins/daterangepicker/daterangepicker.js"></script>
		<!-- Tempusdominus Bootstrap 4 -->
		<script src="<?= base_url('assets/adminlte/') ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
		<!-- Summernote -->
		<script src="<?= base_url('assets/adminlte/') ?>plugins/summernote/summernote-bs4.min.js"></script>
		<!-- overlayScrollbars -->
		<script src="<?= base_url('assets/adminlte/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
		<!-- AdminLTE App -->
		<script src="<?= base_url('assets/adminlte/') ?>dist/js/adminlte.js?v=3.2.0"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="<?= base_url('assets/adminlte/') ?>dist/js/demo.js"></script>
		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		<script src="<?= base_url('assets/adminlte/') ?>dist/js/pages/dashboard.js"></script>
	</body>
</html>
