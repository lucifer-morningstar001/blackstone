<!DOCTYPE html>
<html lang="en">

<head>

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
	  	
	<title>Blackstone - Forgot Password</title>
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
					<input type="text" class="form__input" placeholder="Email">
				</div>

				
				<button class="form__btn" type="button">Forgot Password</button>
				<span class="form__text form__text--center"><a href="{{ route('login') }}">Sign in!</a>

				<span class="form__text form__text--center"> <a href="" class="px-2 text-white">Terms & Conditions</a> <a href="" class="text-white">Privacy Policy</a></span>

				<!-- design elements -->
				<span class="block-icon block-icon--purple">
					<i class="ti ti-lock"></i>
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