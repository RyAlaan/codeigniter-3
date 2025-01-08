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