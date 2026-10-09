<!Doctype html>
<html lang="en" dir="ltr">
	
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- FAVICON -->
<link rel="icon" type="image/png" href="{{ asset('admin-assets/assets/images/brand/favicon.png') }}" sizes="32x32">

		<!-- TITLE -->
		<title>Admin Login</title>

<link href="{{ asset('admin-assets/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

<link href="{{ asset('admin-assets/assets/css/style.css') }}" rel="stylesheet">

<link href="{{ asset('admin-assets/assets/css/skin-modes.css') }}" rel="stylesheet">

<link href="{{ asset('admin-assets/assets/css/sidemenu.css') }}" rel="stylesheet">

<link href="{{ asset('admin-assets/assets/plugins/charts-c3/c3-chart.css') }}" rel="stylesheet">

<link href="{{ asset('admin-assets/assets/plugins/single-page/css/main.css') }}" rel="stylesheet">

<link href="{{ asset('admin-assets/assets/plugins/p-scroll/perfect-scrollbar.css') }}" rel="stylesheet">

<link href="{{ asset('admin-assets/assets/plugins/select2/select2.min.css') }}" rel="stylesheet">

<link href="{{ asset('admin-assets/assets/plugins/icons/icons.css') }}" rel="stylesheet">

<link href="{{ asset('admin-assets/assets/switcher/css/switcher.css') }}" rel="stylesheet">

<link href="{{ asset('admin-assets/assets/switcher/css/demo.css') }}" rel="stylesheet">

<link id="theme" href="{{ asset('admin-assets/assets/colors/color1.css') }}" rel="stylesheet">


    </head>
    <body class="login-img">

	   <!-- Start Switcher -->
	
		<!-- End Switcher -->


                <!-- PAGE -->
		        <div class="page h-100">

                 

				<div class="">
				    <!-- CONTAINER OPEN -->
					<div class="col col-login mx-auto">
						<div class="text-center">
							<img src="{{ asset('admin-assets/assets/images/brand/logo1.png') }}" class="" alt="" width="150">
						</div>
					</div>
					<div class="container-login100">
						<div class="wrap-login100 p-6">
					<form class="login100-form validate-form">
    <span class="login100-form-title">
       Admin Login
    </span>
    <div class="wrap-input100 validate-input" data-validate = "Valid username is required:">
        <input class="input100" type="text" name="username" placeholder="Username">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="zmdi zmdi-email" aria-hidden="true"></i>
        </span>
    </div>
    <div class="wrap-input100 validate-input" data-validate = "Password is required">
        <input class="input100" type="password" name="pass" placeholder="Password">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="zmdi zmdi-lock" aria-hidden="true"></i>
        </span>
    </div>
   
    <div class="container-login100-form-btn">
        <a href="#" class="login100-form-btn btn-primary">
            Login
        </a>
    </div>
</form>
						</div>
					</div>
					<!-- CONTAINER CLOSED -->
				</div>



                </div>
		        <!-- End PAGE -->
 
<!-- JQUERY JS -->
<script src="{{ asset('admin-assets/assets/plugins/jquery/jquery.min.js') }}"></script>

<!-- BOOTSTRAP JS -->
<script src="{{ asset('admin-assets/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin-assets/assets/plugins/bootstrap/js/popper.min.js') }}"></script>

<!-- CHART-CIRCLE JS -->
<script src="{{ asset('admin-assets/assets/plugins/circle-progress/circle-progress.min.js') }}"></script>

<!-- RATING STAR JS -->
<script src="{{ asset('admin-assets/assets/plugins/rating/jquery.rating-stars.js') }}"></script>

<!-- INPUT MASK PLUGIN -->
<script src="{{ asset('admin-assets/assets/plugins/input-mask/jquery.mask.min.js') }}"></script>

<!-- SELECT2 JS -->
<script src="{{ asset('admin-assets/assets/plugins/select2/select2.full.min.js') }}"></script>

<!-- SWITCHER JS -->
<script src="{{ asset('admin-assets/assets/switcher/js/switcher.js') }}"></script>

<!-- CUSTOM JS -->
<script src="{{ asset('admin-assets/assets/js/custom.js') }}"></script>



    <script type="module" src="https://static.cloudflareinsights.com/beacon.min.js/v31edd6df95cf4e85bb4c19e7a9bdbcba1788362987495" integrity="sha512-iIg7k2xntmwu6/uSb5tpc/hySgZc4eoL31yB29W6tJFo2akwjPWcEqnCEdJvGexCL0KEQwVYv5BlowfhVz26hg==" data-cf-beacon='{"version":"2024.11.0","token":"388abf76f0c247f9ae47156bd14a7eb9","r":1,"spa":2}' crossorigin="anonymous"></script>
</body>

</html>