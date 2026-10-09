<!Doctype html>
<html lang="en" dir="ltr">

<head>


<meta name="viewport" content="width=device-width, initial-scale=1">


	<!-- FAVICON -->

	<!-- TITLE -->
	<title>Blackstone - Admin Dashboard</title>

<link rel="icon" type="image/png" href="{{ asset('admin-assets/assets/images/brand/favicon.png') }}" sizes="32x32">

{{-- DATA TABLES --}}
<link rel="stylesheet" href="{{ asset('admin-assets/assets/plugins/datatable/dataTables.bootstrap4.min.css') }}">

<!-- BOOTSTRAP CSS -->
<link href="{{ asset('admin-assets/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

<!-- STYLE CSS -->
<link href="{{ asset('admin-assets/assets/css/style.css') }}" rel="stylesheet" />
<link href="{{ asset('admin-assets/assets/css/skin-modes.css') }}" rel="stylesheet" />

<!-- C3 CHARTS CSS -->
<link href="{{ asset('admin-assets/assets/plugins/charts-c3/c3-chart.css') }}" rel="stylesheet" />

<!-- CUSTOM SCROLL BAR CSS -->
<link href="{{ asset('admin-assets/assets/plugins/p-scroll/perfect-scrollbar.css') }}" rel="stylesheet" />

<!-- SELECT2 CSS -->
<link href="{{ asset('admin-assets/assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />

<!-- FONT-ICONS CSS -->
<link href="{{ asset('admin-assets/assets/plugins/icons/icons.css') }}" rel="stylesheet" />

<!-- SWITCHER CSS -->
<link href="{{ asset('admin-assets/assets/switcher/css/switcher.css') }}" rel="stylesheet" id="switcher-css" type="text/css" media="all" />

<link href="{{ asset('admin-assets/assets/switcher/css/demo.css') }}" rel="stylesheet" />

<!-- COLOR SKIN CSS -->
<link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ asset('admin-assets/assets/colors/color1.css') }}" />

	@stack('styles')

</head>

<body>


	<!-- GLOBAL-LOADER -->
	<div id="global-loader">
		<img src="{{ asset('admin-assets/assets/images/loader.svg') }}" class="loader-img" alt="Loader">
	</div>
	<!-- /GLOBAL-LOADER -->

	<!-- PAGE -->
	<div class="page">

		<div class="page-main">

			<!--APP-SIDEBAR-->
			<div class="header hor-header">
				<div class="container">
					<div class="d-flex">
						<div class="">
							<a class="header-brand" href="{{ route('admin.dashboard') }}">
								<img src="{{ asset('admin-assets/assets/images/brand/logo1.png') }}"
									class="header-brand-img desktop-logo" alt="logo">
								<img src="{{ asset('admin-assets/assets/images/brand/logo-1.png') }}"
									class="header-brand-img light-logo" alt="logo">
							</a><!-- LOGO -->
							<a class="header-brand header-brand1" href="{{ route('admin.dashboard') }}">
								<img src="{{ asset('admin-assets/assets/images/brand/logo-white.png') }}"
									class="header-brand-img desktop-logo" alt="logo">
								<img src="{{ asset('admin-assets/assets/images/brand/logo-1.png') }}"
									class="header-brand-img light-logo" alt="logo">
							</a><!-- LOGO -->
						</div>
						<a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a>
						<div class="d-flex  ml-auto header-right-icons">

							<div class="dropdown d-md-flex">
								<a class="nav-link icon full-screen-link nav-link-bg">
									<i class="fe fe-minimize fullscreen-button"></i>
								</a>
							</div><!-- FULL-SCREEN -->


							<div class="dropdown profile-1">
								<a href="#" data-toggle="dropdown" class="nav-link pr-2 leading-none d-flex">
									<span>
										<img src="{{ asset('admin-assets/assets/images/users/15.jpg') }}" alt="profile-user"
											class="avatar  profile-user brround cover-image">
									</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
									<div class="drop-heading">
										<div class="text-center">
											<h5 class="text-dark mb-0">Admin</h5>
											<small class="text-muted">Administrator</small>
										</div>
									</div>
									<div class="dropdown-divider m-0"></div>
									


									<a class="dropdown-item" href="">
										<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
									</a>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<!--APP-SIDEBAR--> <!--/Horizontal-main -->
			<div class="sticky">
				<div class="horizontal-main hor-menu clearfix">
					<div class="horizontal-mainwrapper container clearfix">
						<!--Nav-->
						<nav class="horizontalMenu clearfix">
							<ul class="horizontalMenu-list">
								<li aria-haspopup="true"><a href="{{ route('admin.dashboard') }}" class="sub-icon"><i
											class="fe fe-airplay"></i> Dashboard</a></li>


								<li aria-haspopup="true"><a href="{{ route('admin.all_users') }}" class="sub-icon"><i
											class="fe fe-user"></i>All Users</a>

								</li>

								<li aria-haspopup="true"><a href="{{ route('admin.kyc_requests') }}" class="sub-icon">
									<i class="fe fe-credit-card"></i>Kyc Requests</a>
									{{-- get_total_bonus --}}
								<li aria-haspopup="true">
    <a href="{{ route('admin.total_bonus') }}" class="sub-icon">
        <i class="fa fa-dollar"></i> Total Bonus
    </a>
</li>
								</li>

								<li aria-haspopup="true"><a href="#" class="sub-icon">
								<i class="fe fe-dollar-sign"></i>Payouts Requests <i
											class="fa fa-angle-down horizontal-icon"></i></a>
									<ul class="sub-menu">
										<li aria-haspopup="true"><a
												href="{{ route('withdraw_fund_requests') }}">pending</a></li>
										<li aria-haspopup="true"><a
												href="{{ route('withdraw_fund_responsed') }}">Approved/Not Approved</a>
										</li>

									</ul>
								</li>
								<li aria-haspopup="true"><a href="#" class="sub-icon"><i
											class="fe fe-user"></i></i> Admin Features <i
											class="fa fa-angle-down horizontal-icon"></i></a>
									<ul class="sub-menu">
										<li aria-haspopup="true"><a href="{{ route('admin.change_roi_percentage') }}">Change ROI Percentage</a></li>
									</ul>
								</li>
								<li aria-haspopup="true">
									<a href="#" class="sub-icon">
										<i class="fe fe-bar-chart-2"></i> Income Reports
										<i class="fa fa-angle-down horizontal-icon"></i>
									</a>
									<ul class="sub-menu">
										<li aria-haspopup="true"><a href="{{ route('admin.direct_income_report') }}">Direct Income Report</a></li>
										<li aria-haspopup="true"><a href="{{ route('admin.roi_report') }}">ROI Report</a></li>
									</ul>
								</li>
							<li aria-haspopup="true">
									<a href="#" class="sub-icon">
										<i class="fa fa-headphones"></i>Help
										<i class="fa fa-angle-down horizontal-icon"></i>
									</a>
									<ul class="sub-menu">
										<li aria-haspopup="true"><a href="{{ route('admin.type1') }}">Support</a></li>
										<li aria-haspopup="true"><a href="{{ route('admin.support') }}">Reviewed Support</a></li>
										<li aria-haspopup="true"><a href="{{ route('admin.type1_resolved') }}">Support Resolved</a></li>

									</ul>
								</li>	
								
								
							</ul>
						</nav>
						<!--Nav-->
					</div>
				</div>
			</div>

			<div class="app-content ">
				<div class="container">

					@yield('content')

				</div>
			</div>

			<!-- CONTAINER END -->
		</div>


		<!-- SIDE-BAR -->
		{{-- <div class="sidebar sidebar-right sidebar-animate">
			<div class="p-4 border-bottom">
				<span class="fs-17">Profile Settings</span>
				<a href="#" class="sidebar-icon text-right float-right" data-toggle="sidebar-right"
					data-target=".sidebar-right"><i class="fe fe-x"></i></a>
			</div>
			<div class="card-body p-0">
				<div class="header-user text-center mt-4 pb-4">
					<span class="avatar avatar-xxl brround"><img src="{{ asset('assets/images/users/15.jpg') }}"
							alt="Profile-img" class="avatar avatar-xxl brround"></span>
					<div class="dropdown-item text-center font-weight-semibold user h3 mb-0 p-0 mt-3">Devid Antoni</div>
					<small>Administrator</small>
					<div class="card-body">
						<div class="form-group ">
							<label class="form-label  text-left">Offline/Online</label>
							<select class="form-control select2 " data-placeholder="Choose one">
								<option label="Choose one">
								</option>
								<option value="1">Online</option>
								<option value="2">Offline</option>
							</select>
						</div>
						<div class="form-group ">
							<label class="form-label text-left">Website</label>
							<select class="form-control select2 " data-placeholder="Choose one">
								<option label="Choose one">
								</option>
								<option value="1">Spruko.com</option>
								<option value="2">sprukosoft.com</option>
								<option value="3">sprukotechnologies.com</option>
								<option value="4">sprukoinfo.com</option>
								<option value="5">sprukotech.com</option>
							</select>
						</div>
					</div>
				</div>
				<a class="dropdown-item  border-top" href="#">
					<i class="dropdown-icon mdi mdi-account-outline "></i> Spruko technologies
				</a>
				<a class="dropdown-item border-top" href="#">
					<i class="dropdown-icon  mdi mdi-account-plus"></i> Add another Account
				</a>
				<div class="card-body border-top">
					<div class="row">
						<div class="col-4 text-center">
							<a class="" href="#"><i
									class="dropdown-icon mdi  mdi-message-outline fs-30 m-0 leading-tight"></i></a>
							<div>Inbox</div>
						</div>
						<div class="col-4 text-center">
							<a class="" href="#"><i class="dropdown-icon mdi mdi-tune fs-30 m-0 leading-tight"></i></a>
							<div>Settings</div>
						</div>
						<div class="col-4 text-center">
							<a class="" href="#"><i
									class="dropdown-icon mdi mdi-logout-variant fs-30 m-0 leading-tight"></i></a>
							<div>Sign out</div>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
		<!-- SIDE-BAR CLOSED -->
		<!-- FOOTER -->
		<footer class="footer">
			<div class="container">
				<div class="row align-items-center flex-row-reverse">
					<div class="col-md-12 col-sm-12 text-center">
						Copyright © 2026 <a href="#">Blackstone Aurum</a> All rights reserved.
					</div>
				</div>
			</div>
		</footer>
		<!-- FOOTER END -->
		<!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

		
<!-- JQUERY JS -->
<script src="{{ asset('admin-assets/assets/plugins/jquery/jquery.min.js') }}"></script>

<!-- BOOTSTRAP JS -->
<script src="{{ asset('admin-assets/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin-assets/assets/plugins/bootstrap/js/popper.min.js') }}"></script>

<!-- SPARKLINE JS -->
<script src="{{ asset('admin-assets/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

<!-- CHART-CIRCLE JS -->
<script src="{{ asset('admin-assets/assets/plugins/circle-progress/circle-progress.min.js') }}"></script>

<!-- RATING STAR JS -->
<script src="{{ asset('admin-assets/assets/plugins/rating/jquery.rating-stars.js') }}"></script>

<!-- HORIZONTAL JS -->
<script src="{{ asset('admin-assets/assets/plugins/horizontal-menu/horizontal-menu.js') }}"></script>

<!-- CUSTOM SCROLLBAR JS -->
<script src="{{ asset('admin-assets/assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('admin-assets/assets/plugins/p-scroll/p-scroll-1.js') }}"></script>

<!-- SIDEBAR JS -->
<script src="{{ asset('admin-assets/assets/plugins/sidebar/sidebar.js') }}"></script>

<!-- SELECT2 JS -->
<script src="{{ asset('admin-assets/assets/plugins/select2/select2.full.min.js') }}"></script>

<!-- MOMENT JS -->
<script src="{{ asset('admin-assets/assets/plugins/moment/moment.min.js') }}"></script>

<!-- FLOT CHART JS -->
<script src="{{ asset('admin-assets/assets/plugins/jquery.flot/jquery.flot.js') }}"></script>
<script src="{{ asset('admin-assets/assets/plugins/jquery.flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('admin-assets/assets/plugins/jquery.flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('admin-assets/assets/js/chart.flot.sampledata.js') }}"></script>

<!-- PIETY CHART JS -->
<script src="{{ asset('admin-assets/assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
<script src="{{ asset('admin-assets/assets/plugins/peitychart/peitychart.init.js') }}"></script>

<!-- ECHART JS -->
<script src="{{ asset('admin-assets/assets/plugins/echarts/echarts.js') }}"></script>

<!-- CHARTJS JS -->
<script src="{{ asset('admin-assets/assets/plugins/chart/Chart.bundle.js') }}"></script>
<script src="{{ asset('admin-assets/assets/plugins/chart/utils.js') }}"></script>

<!-- DATEPICKER JS -->
<script src="{{ asset('admin-assets/assets/plugins/date-picker/spectrum.js') }}"></script>
<script src="{{ asset('admin-assets/assets/plugins/date-picker/jquery-ui.js') }}"></script>

<!-- APEXCHART JS -->
<script src="{{ asset('admin-assets/assets/js/apexcharts.js') }}"></script>

<!-- INDEX JS -->
<script src="{{ asset('admin-assets/assets/js/index1.js') }}"></script>

<!-- SWITCHER JS -->
<script src="{{ asset('admin-assets/assets/switcher/js/switcher.js') }}"></script>

<!-- CUSTOM JS -->
<script src="{{ asset('admin-assets/assets/js/custom.js') }}"></script>

		@stack('scripts')
	</div>

	<script type="module"
		src="https://static.cloudflareinsights.com/beacon.min.js/v31edd6df95cf4e85bb4c19e7a9bdbcba1788362987495"
		integrity="sha512-iIg7k2xntmwu6/uSb5tpc/hySgZc4eoL31yB29W6tJFo2akwjPWcEqnCEdJvGexCL0KEQwVYv5BlowfhVz26hg=="
		data-cf-beacon='{"version":"2024.11.0","token":"388abf76f0c247f9ae47156bd14a7eb9","r":1,"spa":2}'
		crossorigin="anonymous"></script>
</body>

</html>