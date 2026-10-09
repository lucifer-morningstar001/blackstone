<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="{{ asset('website-assets/assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('website-assets/assets/css/splide.min.css') }}">
	<link rel="stylesheet" href="{{ asset('website-assets/assets/css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('website-assets/assets/webfont/tabler-icons.min.css') }}">
	<link rel="icon" type="image/png" href="{{ asset('website-assets/assets/img/logo/favicon.png') }}" sizes="32x32">

	<title>Blackstone - Register</title>

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

	<style>
		.register-form {
			width: 100%;
			max-width: 760px;
			padding: 42px;
		}

		.register-form__title {
			width: 100%;
			margin: 0 0 26px;
			color: #fff;
			font-size: 30px;
			font-weight: 600;
			text-align: center;
		}

		.register-fields {
			display: grid;
			grid-template-columns: repeat(2, minmax(0, 1fr));
			column-gap: 18px;
			width: 100%;
		}

		.register-field--full {
			grid-column: 1 / -1;
		}

		.register-form .form__input,
		.register-form .form__select {
			cursor: text;
		}

		.register-form .form__select {
			cursor: pointer;
		}

		.register-form__email-note {
			display: block;
			margin-top: -8px;
			margin-bottom: 20px;
			color: #e7d6a6;
			font-size: 13px;
			line-height: 1.6;
		}

		.register-form__footer {
			margin-top: 22px;
		}

		@media (max-width: 576px) {
			.register-form {
				padding: 32px 20px;
			}

			.register-form__title {
				font-size: 26px;
			}

			.register-fields {
				grid-template-columns: minmax(0, 1fr);
				column-gap: 0;
			}
		}
	</style>
</head>

<body class="body">
	<div class="section section--content">
		<div class="section__content">
			<form action="#" class="form form--content register-form">
				<div class="form__logo-wrap">
					<a href="{{ url('/') }}" class="form__logo" aria-label="Blackstone Aurum home">
						<img src="{{ asset('website-assets/assets/img/logo/logo1.png') }}" alt="Blackstone Aurum">
					</a>
				</div>

				<h1 class="register-form__title">Register</h1>

				<div class="register-fields">
					<div class="form__group">
						<input type="text" class="form__input" name="ref_id" placeholder="Sponsor ID" aria-label="Sponsor ID">
					</div>
					<div class="form__group">
						<input type="text" class="form__input" name="full_name" placeholder="Full Name" aria-label="Full Name"  required>
					</div>
					<div class="form__group">
						<input type="email" class="form__input" name="email" placeholder="Email" aria-label="Email"  required>
					</div>
					<div class="form__group">
						<input type="email" class="form__input" name="confirm_email" placeholder="Confirm Email" aria-label="Confirm Email" required>
					</div>
					<div class="register-field--full">
						<p class="register-form__email-note">Note: Please check your email address is correct as it cannot be changed later. Please use a Gmail account.</p>
					</div>
					<div class="form__group">
						<input type="text" class="form__input" name="username" placeholder="Username" aria-label="Username"  required>
					</div>
					<div class="form__group">
						<input type="password" class="form__input" name="password" placeholder="Password" aria-label="Password" required>
					</div>
					<div class="form__group">
						<input type="password" class="form__input" name="confirm_password" placeholder="Confirm Password" aria-label="Confirm Password" required>
					</div>
					<div class="form__group">
						<select class="form__select" name="country" aria-label="Country" required>
							<option value="" selected disabled>Choose Country</option>
							@php
								$countries = [
									'Andorra', 'Afghanistan', 'Antigua And Barbuda', 'Anguilla', 'Albania', 'Armenia',
									'Netherlands Antilles', 'Angola', 'Antarctica', 'Argentina', 'American Samoa', 'Austria',
									'Australia', 'Aruba', 'Azerbaijan', 'Bosnia And Herzegovina', 'Barbados', 'Bangladesh',
									'Belgium', 'Burkina Faso', 'Bulgaria', 'Bahrain', 'Burundi', 'Benin', 'Saint Barthelemy',
									'Bermuda', 'Brunei Darussalam', 'Bolivia', 'Brazil', 'Bahamas', 'Bhutan', 'Botswana',
									'Belarus', 'Belize', 'Canada', 'Cocos (keeling) Islands',
									'Congo, The Democratic Republic Of The', 'Central African Republic', 'Congo', 'Switzerland',
									'Cote D Ivoire', 'Cook Islands', 'Chile', 'Cameroon', 'China', 'Colombia', 'Costa Rica',
									'Cape Verde', 'Christmas Island', 'Cyprus', 'Czech Republic', 'Germany', 'Djibouti',
									'Denmark', 'Dominica', 'Dominican Republic', 'Algeria', 'Ecuador', 'Estonia', 'Egypt',
									'Eritrea', 'Spain', 'Ethiopia', 'El Salvador', 'Finland', 'Fiji',
									'Falkland Islands (malvinas)', 'Micronesia, Federated States Of', 'Faroe Islands',
									'France', 'Gabon', 'Grenada', 'Georgia', 'Ghana', 'Gibraltar', 'Greenland', 'Gambia',
									'Guinea', 'Equatorial Guinea', 'Greece', 'Guatemala', 'Guam', 'Guinea-bissau', 'Guyana',
									'Hong Kong', 'Honduras', 'Croatia', 'Haiti', 'Hungary', 'Indonesia', 'Ireland', 'Israel',
									'Isle Of Man', 'India', 'Iceland', 'Italy', 'Jamaica', 'Jordan', 'Japan', 'Kenya',
									'Kyrgyzstan', 'Cambodia', 'Kiribati', 'Comoros', 'Saint Kitts And Nevis',
									'Korea Democratic Peoples Republic Of', 'Korea Republic Of', 'Kuwait', 'Cayman Islands',
									'Kazakstan', 'Lao Peoples Democratic Republic', 'Lebanon', 'Saint Lucia', 'Liechtenstein',
									'Sri Lanka', 'Liberia', 'Lesotho', 'Lithuania', 'Luxembourg', 'Latvia',
									'Libyan Arab Jamahiriya', 'Morocco', 'Monaco', 'Moldova, Republic Of', 'Montenegro',
									'Saint Martin', 'Madagascar', 'Marshall Islands',
									'Macedonia, The Former Yugoslav Republic Of', 'Mali', 'Myanmar', 'Mongolia', 'Macau',
									'Northern Mariana Islands', 'Mauritania', 'Montserrat', 'Malta', 'Mauritius', 'Maldives',
									'Malawi', 'Mexico', 'Malaysia', 'Mozambique', 'Namibia', 'New Caledonia', 'Niger',
									'Nigeria', 'Nicaragua', 'Netherlands', 'Norway', 'Nepal', 'Nauru', 'Niue',
									'New Zealand', 'Oman', 'Panama', 'Peru', 'French Polynesia', 'Papua New Guinea',
									'Philippines', 'Pakistan', 'Poland', 'Saint Pierre And Miquelon', 'Pitcairn',
									'Puerto Rico', 'Portugal', 'Palau', 'Paraguay', 'Qatar', 'Romania', 'Serbia',
									'Russian Federation', 'Rwanda', 'Saudi Arabia', 'Solomon Islands', 'Seychelles', 'Sweden',
									'Singapore', 'Saint Helena', 'Slovenia', 'Slovakia', 'Sierra Leone', 'San Marino',
									'Senegal', 'Somalia', 'Suriname', 'Sao Tome And Principe', 'South Africa', 'South Sudan',
									'Swaziland', 'Turks And Caicos Islands', 'Chad', 'Togo', 'Thailand', 'Tajikistan',
									'Tokelau', 'Timor-leste', 'Turkmenistan', 'Tunisia', 'Tonga', 'Turkey',
									'Trinidad And Tobago', 'Tuvalu', 'Taiwan, Province Of China',
									'Tanzania, United Republic Of', 'United Kingdom', 'United Arab Emirates', 'Usa', 'Ukraine',
									'Uganda', 'Uruguay', 'Uzbekistan', 'Holy See (vatican City State)',
									'Saint Vincent And The Grenadines', 'Virgin Islands, British', 'Virgin Islands, U.s.',
									'Viet Nam', 'Vanuatu', 'Venezuela', 'Wallis And Futuna', 'Samoa', 'Kosovo', 'Yemen',
									'Mayotte', 'Zambia', 'Zimbabwe',
								];
							@endphp
							@foreach ($countries as $country)
								<option value="{{ $country }}">{{ $country }}</option>
							@endforeach
						</select>
					</div>
					<div class="form__group">
						<input type="text" class="form__input" name="city" placeholder="City" aria-label="City" required>
					</div>
					<div class="form__group register-field--full">
						<input type="text" class="form__input" name="address" placeholder="Address" aria-label="Address" required>
					</div>
					<div class="form__group">
						<input type="text" class="form__input" name="state" placeholder="State" aria-label="State" required>
					</div>
					<div class="form__group">
						<input type="text" class="form__input" name="zip_code" placeholder="Zip Code" aria-label="Zip Code" required>
					</div>
					<div class="form__group register-field--full">
						<input type="tel" class="form__input" name="phone_number" placeholder="Phone Number" aria-label="Phone Number" required>
					</div>
				</div>
	<div class="form__group form__group--checkbox">
					<input id="remember" name="remember" type="checkbox">
					<label for="remember">I agree to the <a href=""> term and Privacy Policy</a></label>
				</div>
				<button class="form__btn" type="button">Register</button>

				<span class="form__text form__text--center register-form__footer">
					Already have an account? <a href="{{ route('login') }}">Sign in!</a>
				</span>
				<span class="form__text form__text--center">
					<a href="#" class="px-2 text-white">Terms &amp; Conditions</a>
					<a href="#" class="text-white">Privacy Policy</a>
				</span>

				<span class="block-icon block-icon--purple">
					<i class="ti ti-user-plus"></i>
				</span>
				<span class="screw screw--big-tr"></span>
				<span class="screw screw--big-bl"></span>
				<span class="screw screw--big-br"></span>
			</form>
		</div>

		<div class="section__canvas section__canvas--full section__canvas--third" id="canvas3"></div>
	</div>

	<script src="{{ asset('website-assets/assets/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('website-assets/assets/js/smooth-scrollbar.js') }}"></script>
	<script src="{{ asset('website-assets/assets/js/splide.min.js') }}"></script>
	<script src="{{ asset('website-assets/assets/js/three.min.js') }}"></script>
	<script src="{{ asset('website-assets/assets/js/vanta.fog.min.js') }}"></script>
	<script src="{{ asset('website-assets/assets/js/main.js') }}"></script>
</body>

</html>
