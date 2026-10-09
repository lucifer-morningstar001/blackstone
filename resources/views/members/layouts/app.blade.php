<!Doctype html>
<html lang="en" dir="ltr">
	
<head>

      
<meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- FAVICON -->
        
        <!-- TITLE -->
		<title>Blackstone  </title>
<link rel="icon"
      type="image/png"
      href="{{ asset('website-assets/assets/img/logo/favicon.png') }}"
      sizes="32x32">
{{-- data tables --}}
     <link rel="stylesheet" href="{{ asset('assets/plugins/datatable/dataTables.bootstrap4.min.css') }}">

<!-- BOOTSTRAP CSS -->
<link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

<!-- STYLE CSS -->
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/skin-modes.css') }}" rel="stylesheet" />

<!-- C3 CHARTS CSS -->
<link href="{{ asset('assets/plugins/charts-c3/c3-chart.css') }}" rel="stylesheet" />

<!-- CUSTOM SCROLL BAR CSS -->
<link href="{{ asset('assets/plugins/p-scroll/perfect-scrollbar.css') }}" rel="stylesheet" />

<!-- SELECT2 CSS -->
<link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />

<!-- FONT-ICONS CSS -->
<link href="{{ asset('assets/plugins/icons/icons.css') }}" rel="stylesheet" />

<!-- Switcher CSS -->
<link href="{{ asset('assets/switcher/css/switcher.css') }}"
      rel="stylesheet"
      id="switcher-css"
      type="text/css"
      media="all" />

<link href="{{ asset('assets/switcher/css/demo.css') }}"
      rel="stylesheet" />

<!-- COLOR SKIN CSS -->
<link id="theme"
      rel="stylesheet"
      type="text/css"
      media="all"
      href="{{ asset('assets/colors/color1.css') }}" />

@stack('styles')
        
    </head>
    <body>

	
		<!-- GLOBAL-LOADER -->
		<div id="global-loader">
<img src="{{ asset('assets/images/loader.svg') }}" class="loader-img" alt="Loader">		</div>
		<!-- /GLOBAL-LOADER -->

		<!-- PAGE -->
		<div class="page">

            <div class="page-main">

                <!--APP-SIDEBAR-->
				<div class="header hor-header">
					<div class="container">
						<div class="d-flex">
							<div class="">
								<a class="header-brand" href="{{ route('dashboard') }}">
									<img src="{{ asset('assets/images/brand/logo1.png') }}" class="header-brand-img desktop-logo" alt="logo" >
									<img src="assets/images/brand/logo-1.png" class="header-brand-img light-logo" alt="logo">
								</a><!-- LOGO -->
								<a class="header-brand header-brand1" href="{{ route('dashboard') }}">
									<img src="assets/images/brand/logo-white.png" class="header-brand-img desktop-logo" alt="logo">
									<img src="assets/images/brand/logo-1.png" class="header-brand-img light-logo" alt="logo">
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
											<img src="assets/images/users/15.jpg" alt="profile-user" class="avatar  profile-user brround cover-image">
										</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="drop-heading">
											<div class="text-center">
												<h5 class="text-dark mb-0">Devid Antoni</h5>
												<small class="text-muted">Administrator</small>
											</div>
										</div>
										<div class="dropdown-divider m-0"></div>
										<a class="dropdown-item" href="{{ route('profile') }}">
											<i class="dropdown-icon mdi mdi-account-outline"></i> Profile
										</a>
									
										
										<a class="dropdown-item" href="">
											<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
										</a>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			<!--APP-SIDEBAR-->                <!--/Horizontal-main -->
			<div class="sticky">
				<div class="horizontal-main hor-menu clearfix">
					<div class="horizontal-mainwrapper container clearfix">
						<!--Nav-->
						<nav class="horizontalMenu clearfix">
							<ul class="horizontalMenu-list">
								<li aria-haspopup="true"><a href="{{ route('dashboard') }}" class="sub-icon"><i class="fe fe-airplay"></i> Dashboard</a></li>
								<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fe fe-package"></i>Packages <i class="fa fa-angle-down horizontal-icon"></i></a>
									<ul class="sub-menu">
										<li aria-haspopup="true"><a href="{{ route('packages') }}">Packages</a></li>
																					<li aria-haspopup="true"><a href="{{ route('packages_history') }}">Packages History</a></li>

									</ul>
								</li>

							<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fe fe-user"></i>Profile <i class="fa fa-angle-down horizontal-icon"></i></a>
									<ul class="sub-menu">
										<li aria-haspopup="true"><a href="{{ route('profile') }}">Edit Profile</a></li>
										<li aria-haspopup="true"><a href="{{ route('change-password') }}">Change Password</a></li>
										<li aria-haspopup="true"><a href="{{ route('kyc') }}">Kyc</a></li>

									</ul>
								</li>
								<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fe fe-user"></i>Network <i class="fa fa-angle-down horizontal-icon"></i></a>
									<ul class="sub-menu">
										<li aria-haspopup="true"><a href="{{ route('generate_referral') }}">Invite Link</a></li>
										<li aria-haspopup="true"><a href="{{ route('referral_list') }}">Direct Sponsors</a></li>
									</ul>
								</li>
								<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fe fe-dollar-sign"></i>Commissions <i class="fa fa-angle-down horizontal-icon"></i></a>
									<ul class="sub-menu">
										<li aria-haspopup="true"><a href="{{ route('all_income_report') }}">Ewallet Income</a></li>
								<li aria-haspopup="true"><a href="{{ route('direct_income') }}">Direct Income</a></li>
<li aria-haspopup="true"><a href="{{ route('roi_income') }}">Roi Income</a></li>
											<li aria-haspopup="true"><a href="{{ route('withdrawal') }}">Withdrawal</a></li>

										<li aria-haspopup="true"><a href="{{ route('withdrawal_history') }}">Withdrawal History</a></li>
									</ul>
								</li>
								<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fe fe-headphones"></i></i>Support <i class="fa fa-angle-down horizontal-icon"></i></a>
									<ul class="sub-menu">
										<li aria-haspopup="true"><a href="{{ route('support') }}">Member Support</a></li>
									</ul>
								</li>
							</ul>
						</nav>
						<!--Nav-->
					</div>
				</div>
			</div>

			<!-- Mobile Header -->
			<div class="mobile-header">
				<div class="container-fluid">
					<div class="d-flex">
						<a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a>
						<a class="header-brand" href="{{ route('dashboard') }}">
							<img src="{{ asset('assets/images/brand/logo1.png') }}" class="header-brand-img desktop-logo" alt="logo">
						</a>
						<a class="header-brand header-brand1" href="{{ route('dashboard') }}">
							<img src="{{ asset('assets/images/brand/logo-white.png') }}" class="header-brand-img desktop-logo" alt="logo">
						</a><!-- LOGO -->
						<div class="d-flex order-lg-2 ml-auto header-right-icons">
							<div class="dropdown profile-1">
								<a href="#" data-toggle="dropdown" class="nav-link pr-2 leading-none d-flex">
									<span>
										<img src="{{ asset('assets/images/users/15.jpg') }}" alt="profile-user" class="avatar  profile-user brround cover-image">
									</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
									<div class="drop-heading">
										<div class="text-center">
											<h5 class="text-dark mb-0">Member</h5>
											<small class="text-muted">User</small>
										</div>
									</div>
									<div class="dropdown-divider m-0"></div>
									<a class="dropdown-item" href="{{ route('profile') }}">
										<i class="dropdown-icon mdi mdi-account-outline"></i> Profile
									</a>
									<a class="dropdown-item" href="">
										<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Mobile Header -->
			
		<div class="app-content">
    <div class="container">

        @yield('content')

    </div>
</div>

				<!-- CONTAINER END -->
            </div>

      
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
		<script src="assets/plugins/jquery/jquery.min.js"></script>

		<!-- BOOTSTRAP JS -->
		<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="assets/plugins/bootstrap/js/popper.min.js"></script>

		<!-- SPARKLINE JS-->
		<script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- CHART-CIRCLE JS-->
		<script src="assets/plugins/circle-progress/circle-progress.min.js"></script>

		<!-- RATING STARJS -->
		<script src="assets/plugins/rating/jquery.rating-stars.js"></script>

        <!--HORIZONTAL JS-->
		<script src="assets/plugins/horizontal-menu/horizontal-menu.js"></script>

		<!-- CUSTOM SCROLLBAR JS-->
		<script src="assets/plugins/p-scroll/perfect-scrollbar.js"></script>
		<!-- <script src="https://laravel.spruko.com/Blackstone/ltr/assets/plugins/p-scroll/p-scroll.js"></script> -->
		<script src="assets/plugins/p-scroll/p-scroll-1.js"></script>

        <!-- SIDEBAR JS -->
		<script src="assets/plugins/sidebar/sidebar.js"></script>

		<!-- SELECT2 JS -->
		<script src="assets/plugins/select2/select2.full.min.js"></script>

        

		<!-- Moment js-->
		<script src="assets/plugins/moment/moment.min.js"></script>

		<!-- FLOT CHART JS -->
		<script src="assets/plugins/jquery.flot/jquery.flot.js"></script>
		<script src="assets/plugins/jquery.flot/jquery.flot.pie.js"></script>
		<script src="assets/plugins/jquery.flot/jquery.flot.resize.js"></script>
		<script src="assets/js/chart.flot.sampledata.js"></script>

		<!-- PIETY CHART JS-->
		<script src="assets/plugins/peitychart/jquery.peity.min.js"></script>
		<script src="assets/plugins/peitychart/peitychart.init.js"></script>

		<!-- ECHART JS-->
		<script src="assets/plugins/echarts/echarts.js"></script>

		<!-- CHARTJS CHART JS-->
		<script src="assets/plugins/chart/Chart.bundle.js"></script>
		<script src="assets/plugins/chart/utils.js"></script>

		<!-- DATEPICKER JS -->
		<script src="assets/plugins/date-picker/spectrum.js"></script>
		<script src="assets/plugins/date-picker/jquery-ui.js"></script>

		<!-- APEXCHART JS -->
		<script src="{{ asset('assets/js/apexcharts.js') }}"></script>

		<!-- INDEX JS -->
		<script src="assets/js/index1.js"></script>


		<!-- Switcher js -->
		<script src="assets/switcher/js/switcher.js"></script>
		
        <!-- CUSTOM JS -->
		<script src="assets/js/custom.js"></script>
        @stack('scripts')
        </div>

</body>

</html>