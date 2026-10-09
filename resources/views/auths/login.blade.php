<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS -->
<link rel="stylesheet" href="{{ asset('website-assets/assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('website-assets/assets/css/splide.min.css') }}">
<link rel="stylesheet" href="{{ asset('website-assets/assets/css/main.css') }}">

<!-- Icon font -->
<link rel="stylesheet" href="{{ asset('website-assets/assets/webfont/tabler-icons.min.css') }}">

<!-- Favicons -->
<link rel="icon"
      type="image/png"
      href="{{ asset('website-assets/assets/img/logo/favicon.png') }}"
      sizes="32x32">


<style>
	.form__logo-wrap {
		margin-bottom: 28px;
	}

	.form__logo {
		display: flex;
		justify-content: center;
		align-items: center;
		width: min(50%, 200px);
		height: auto;
	}

	.form__logo img {
		display: block;
		width: 100%;
		max-height: 240px;
		height: auto;
		object-fit: contain;
	}

	@media (max-width: 576px) {
		.form__logo-wrap {
			margin-bottom: 22px;
		}

		.form__logo {
			width: min(82vw, 300px);
		}

		.form__logo img {
			max-height: 200px;
		}
	}
</style>

	
	<title>Blackstone - Login</title>
</head>

<body class="body">
	<!-- page wrap -->
	<div class="section section--content">
		<div class="section__content">
			<!-- form -->
			<form action="#" class="form form--content">
				<div class="form__logo-wrap">
					<a href="{{ url('/') }}" class="form__logo" aria-label="Blackstone Aurum home">
						<img src="{{ asset('website-assets/assets/img/logo/logo1.png') }}" alt="Blackstone Aurum">
					</a>
				</div>

				<div class="form__group">
					<input type="text" class="form__input" name="username" placeholder="Username">
				</div>

				<div class="form__group">
					<input type="password" class="form__input" name="password" placeholder="Password">
				</div>

				
				
				<button class="form__btn" type="button">Sign in</button>

				<span class="form__text form__text--center">Don't have an account? <a href="{{ route('register') }}">Sign up!</a><br> <a href="{{ route('forgot') }}">Forgot password?</a></span>
				<span class="form__text form__text--center"> <a href="" class="px-2 text-white">Terms & Conditions</a> <a href="" class="text-white">Privacy Policy</a></span>

				<!-- design elements -->
				<span class="block-icon block-icon--purple">
					<i class="ti ti-login"></i>
				</span>
				<span class="screw screw--big-tr"></span>
				<span class="screw screw--big-bl"></span>
				<span class="screw screw--big-br"></span>
			</form>
			<!-- end form -->
		</div>

		<!-- animation background -->
		<div class="section__canvas section__canvas--full section__canvas--third" id="canvas3"></div>
	</div>
	<!-- end page wrap -->

<!-- JS -->
<script src="{{ asset('website-assets/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('website-assets/assets/js/smooth-scrollbar.js') }}"></script>
<script src="{{ asset('website-assets/assets/js/splide.min.js') }}"></script>
<script src="{{ asset('website-assets/assets/js/three.min.js') }}"></script>
<script src="{{ asset('website-assets/assets/js/vanta.fog.min.js') }}"></script>
<script src="{{ asset('website-assets/assets/js/main.js') }}"></script>
</body>

</html>