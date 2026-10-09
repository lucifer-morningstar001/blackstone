<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('website-assets/assets/css/bootstrap.min.css') }}">

<!-- Splide CSS -->
<link rel="stylesheet" href="{{ asset('website-assets/assets/css/splide.min.css') }}">

<!-- Main CSS -->
<link rel="stylesheet" href="{{ asset('website-assets/assets/css/main.css') }}">

<!-- Icon font -->
<link rel="stylesheet" href="{{ asset('website-assets/assets/webfont/tabler-icons.min.css') }}">

<!-- Favicons -->
<link rel="icon"
      type="image/png"
      href="{{ asset('website-assets/assets/img/logo/favicon.png') }}"
      sizes="32x32">

<link rel="apple-touch-icon" href="{{ asset('website-assets/assets/icon/favicon-32x32.png') }}">
	<title>Blackstone Aurum - Home</title>
</head>

<body class="body body--home">
	<!-- header -->
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="header__content">
						<!-- btn -->
						<button class="header__btn" type="button" aria-label="header__nav">
							<span></span>
							<span></span>
							<span></span>
						</button>
						<!-- end btn -->

						<!-- logo -->
						<a href="" class="header__logo">
					<img src="{{ asset('website-assets/assets/img/logo/logo1.png') }}" alt="" width="150">
						</a>
						<!-- end logo -->

						<!-- tagline -->
						<span class="header__tagline"> <br></span>
						<!-- end tagline -->

						<!-- navigation -->
						<ul class="header__nav" id="header__nav">
							<li class="header__dropdown">
								<a class="dropdown-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Home </a>

						
							</li>

							<li class="header__dropdown">
								<a class="dropdown-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Earnings </a>

								
							</li>

							<li>
								<a href="">Company</a>
							</li>

							<li>
								<a href="">News</a>
							</li>

							

							
						</ul>
						<!-- end navigation -->

						<!-- language -->
						<div class="header__language">
							<a class="dropdown-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">EN <i class="ti ti-point-filled"></i></a>

							<ul class="dropdown-menu header__language-menu">
								<li><a href="#">English</a></li>
								<li><a href="#">Spanish</a></li>
								<li><a href="#">French</a></li>
							</ul>
						</div>
						<!-- end language -->

						<!-- profile -->
						<a href="{{ route('login') }}" class="header__profile">
							<i class="ti ti-user-circle"></i>
							<span> Login</span>
						</a>
						<!-- end profile -->
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- end header -->

	<!-- hero -->
	<section class="hero">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-7">
					<!-- hero first -->
					<div class="hero__content hero__content--first">
						<h1 class="hero__title"><strong>Neural technology</strong> <br>for Blackstone Aurum in the crypto industry</h1>

						<div class="hero__btns">
							<a href="{{ route('register') }}" class="hero__btn">Register</a>
						</div>
					</div>
					<!-- end hero first -->
				</div>

				<div class="col-12 col-lg-5">
					<!-- hero second -->
					<div class="hero__content hero__content--second">
						<!-- CTA -->
						<a href="{{ route('login') }}" class="cta">
							<h2 class="cta__title">Registration bonus</h2>
							<p class="cta__text">Sign up and take part in the monthly drawing of <b>$500 deposit bonus!</b> The number of contestants is limited.</p>

							<!-- progressbar -->
							<div class="progressbar">
								<h3 class="progressbar__title">Contestants:</h3>
								<div class="progress" role="progressbar" aria-label="Animated striped" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 75%"><span>75</span></div></div>
								<div class="progressbar__values">
									<span class="progressbar__value progressbar__value--left">0</span>
									<span class="progressbar__value progressbar__value--right">100</span>
								</div>
							</div>
							<!-- end progressbar -->

							<!-- design elements -->
							<span class="block-icon block-icon--red">
								<i class="ti ti-gift"></i>
							</span>
							<span class="screw screw--lines-bl"></span>
							<span class="screw screw--lines-br"></span>
							<span class="screw screw--lines-tr"></span>
						</a>
						<!-- end CTA -->
					</div>
					<!-- end hero second -->
				</div>
			</div>
		</div>
	</section>
	<!-- end hero -->

	<!-- statistics -->
	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-6 col-xl-3">
					<!-- stats -->
					<div class="stats">
						<span class="stats__value">1839</span>
						<p class="stats__name">Days on the market</p>

						<!-- design elements -->
						<span class="stats__dodger stats__dodger--left stats__dodger--purple"></span>
						<span class="stats__dodger stats__dodger--right stats__dodger--purple"></span>
					</div>
					<!-- end stats -->
				</div>

				<div class="col-12 col-sm-6 col-xl-3">
					<!-- stats -->
					<div class="stats">
						<span class="stats__value">5812</span>
						<p class="stats__name">Members</p>

						<!-- design elements -->
						<span class="stats__dodger stats__dodger--left stats__dodger--orange"></span>
						<span class="stats__dodger stats__dodger--right stats__dodger--orange"></span>
					</div>
					<!-- end stats -->
				</div>

				<div class="col-12 col-sm-6 col-xl-3">
					<!-- stats -->
					<div class="stats">
						<span class="stats__value">$374 103</span>
						<p class="stats__name">Arbitrage pools</p>

						<!-- design elements -->
						<span class="stats__dodger stats__dodger--left stats__dodger--green"></span>
						<span class="stats__dodger stats__dodger--right stats__dodger--green"></span>
					</div>
					<!-- end stats -->
				</div>

				<div class="col-12 col-sm-6 col-xl-3">
					<!-- stats -->
					<div class="stats">
						<span class="stats__value">$100 812</span>
						<p class="stats__name">Total paid</p>

						<!-- design elements -->
						<span class="stats__dodger stats__dodger--left stats__dodger--blue"></span>
						<span class="stats__dodger stats__dodger--right stats__dodger--blue"></span>
					</div>
					<!-- end stats -->
				</div>
			</div>
		</div>
	</div>
	<!-- end statistics -->

	<!-- features -->
	<section class="section">
		<div class="container">
			<div class="row">
				<!-- title -->
				<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
					<div class="section__title">
						<h2>Our features</h2>
						<p>Whether you're a beginner or an experienced trader, our platform empowers you to make informed decisions and your trading success.</p>
					</div>
				</div>
				<!-- end title -->
			</div>

			<div class="row">
				<div class="col-12 col-lg-4">
					<!-- feature -->
					<div class="feature">
						<h3 class="feature__title">Safety</h3>
						<p class="feature__text">We do not have access to your personal data and cannot withdraw funds</p>

						<!-- design elements -->
						<span class="block-icon block-icon--orange">
							<i class="ti ti-shield-dollar"></i>
						</span>
						<span class="screw screw--bl"></span>
						<span class="screw screw--tr"></span>
						<span class="screw screw--big-br"></span>
					</div>
					<!-- end feature -->
				</div>

				<div class="col-12 col-md-6 col-lg-4">
					<!-- feature -->
					<div class="feature">
						<h3 class="feature__title">Automatization</h3>
						<p class="feature__text">Automatic arbitrage calculations and deal closing</p>

						<!-- design elements -->
						<span class="block-icon block-icon--green">
							<i class="ti ti-24-hours"></i>
						</span>
						<span class="screw screw--bl"></span>
						<span class="screw screw--tr"></span>
						<span class="screw screw--big-br"></span>
					</div>
					<!-- end feature -->
				</div>

				<div class="col-12 col-md-6 col-lg-4">
					<!-- feature -->
					<div class="feature">
						<h3 class="feature__title">Analytics</h3>
						<p class="feature__text">The robot shows you how your trades are performing in real time</p>

						<!-- design elements -->
						<span class="block-icon block-icon--blue">
							<i class="ti ti-chart-histogram"></i>
						</span>
						<span class="screw screw--bl"></span>
						<span class="screw screw--tr"></span>
						<span class="screw screw--big-br"></span>
					</div>
					<!-- end feature -->
				</div>
			</div>
		</div>
	</section>
	<!-- end features -->

	<!-- investing -->
	<section class="section">
		<div class="container">
			<div class="row row--relative">
				<div class="col-12 col-lg-6">
					<!-- invest -->
					<div class="invest">
						<h2 class="invest__title">For Investors</h2>

						<ul class="invest__list">
							<li>- <b>6 types</b> of arbitrage pools with monthly <b>10%</b> yield and the possibility to reinvest on more favorable terms;</li>
							<li>- <b>Arbitrage nodes</b> to boost your pool;</li>
							<li>- Other rewards and bonuses;</li>
						</ul>

						<a href="" class="invest__link">Arbitrage pools</a>

						<!-- design elements -->
						<span class="block-icon block-icon--orange">
							<i class="ti ti-database-dollar"></i>
						</span>
						<span class="screw screw--lines-bl"></span>
						<span class="screw screw--lines-br"></span>
						<span class="screw screw--lines-tr"></span>
					</div>
					<!-- end invest -->
				</div>

				<div class="col-12 col-lg-6">
					<!-- invest -->
					<div class="invest">
						<h2 class="invest__title">Blackstone  Token</h2>

						<div class="invest__rate-wrap">
							<div class="invest__rate">
								<span>Current course</span>
								<p>1 Blackstone  = $0.791</p>
							</div>

							<div class="invest__graph">
								<img src="{{ asset('website-assets/assets/img/graph/graph2.svg') }}" alt="">
							</div>
						</div>

						<div class="invest__rate-wrap">
							<div class="invest__rate">
								<span>Week</span>
								<!-- or .red -->
								<p class="green">+0.19% <small>[0.84]</small></p>
							</div>

							<div class="invest__graph">
								<img src="{{ asset('website-assets/assets/img/graph/graph1.svg') }}" alt="">
							</div>
						</div>

						<a href="" class="invest__link">More about token</a>

						<!-- design elements -->
						<span class="block-icon block-icon--blue">
							<i class="ti ti-brand-coinbase"></i>
						</span>
						<span class="screw screw--lines-bl"></span>
						<span class="screw screw--lines-br"></span>
						<span class="screw screw--lines-tr"></span>
					</div>
					<!-- end invest -->
				</div>

				<!-- animation background -->
				<div class="section__canvas section__canvas--first" id="canvas"></div>
			</div>
		</div>
	</section>
	<!-- end investing -->

	<!-- partners -->
	<section class="section">
		<div class="container">
			<div class="row">
				<!-- title -->
				<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-8 offset-xl-2">
					<div class="section__title">
						<h2>Our partners</h2>
						<p>We take pride in collaborating with our partners who help us provide the best services to our clients. If you'd like to become our partner, please <a href="">contact us.</a></p>
					</div>
				</div>
				<!-- end title -->
			</div>

			<div class="row">
				<div class="col-6 col-lg-3">
					<!-- partner -->
					<a href="#" class="partner">
						<img src="{{ asset('website-assets/assets/img/partners/logo1.svg') }}" alt="">
						<p>thesponsor.com</p>

						<!-- design elements -->
						<span class="screw screw--br"></span>
						<span class="screw screw--bl"></span>
						<span class="screw screw--tr"></span>
						<span class="screw screw--tl"></span>
					</a>
					<!-- end partner -->
				</div>

				<div class="col-6 col-lg-3">
					<!-- partner -->
					<a href="#" class="partner">
						<img src="{{ asset('website-assets/assets/img/partners/logo2.svg') }}" alt="">
						<p>thesponsor.com</p>

						<!-- design elements -->
						<span class="screw screw--br"></span>
						<span class="screw screw--bl"></span>
						<span class="screw screw--tr"></span>
						<span class="screw screw--tl"></span>
					</a>
					<!-- end partner -->
				</div>

				<div class="col-6 col-lg-3">
					<!-- partner -->
					<a href="#" class="partner">
						<img src="{{ asset('website-assets/assets/img/partners/logo3.svg') }}" alt="">
						<p>thesponsor.com</p>

						<!-- design elements -->
						<span class="screw screw--br"></span>
						<span class="screw screw--bl"></span>
						<span class="screw screw--tr"></span>
						<span class="screw screw--tl"></span>
					</a>
					<!-- end partner -->
				</div>

				<div class="col-6 col-lg-3">
					<!-- partner -->
					<a href="#" class="partner">
						<img src="{{ asset('website-assets/assets/img/partners/logo4.svg') }}" alt="">
						<p>thesponsor.com</p>

						<!-- design elements -->
						<span class="screw screw--br"></span>
						<span class="screw screw--bl"></span>
						<span class="screw screw--tr"></span>
						<span class="screw screw--tl"></span>
					</a>
					<!-- end partner -->
				</div>

				<div class="col-6 col-lg-3">
					<!-- partner -->
					<a href="#" class="partner">
						<img src="{{ asset('website-assets/assets/img/partners/logo5.svg') }}" alt="">
						<p>thesponsor.com</p>

						<!-- design elements -->
						<span class="screw screw--br"></span>
						<span class="screw screw--bl"></span>
						<span class="screw screw--tr"></span>
						<span class="screw screw--tl"></span>
					</a>
					<!-- end partner -->
				</div>

				<div class="col-6 col-lg-3">
					<!-- partner -->
					<a href="#" class="partner">
						<img src="{{ asset('website-assets/assets/img/partners/logo6.svg') }}" alt="">
						<p>thesponsor.com</p>

						<!-- design elements -->
						<span class="screw screw--br"></span>
						<span class="screw screw--bl"></span>
						<span class="screw screw--tr"></span>
						<span class="screw screw--tl"></span>
					</a>
					<!-- end partner -->
				</div>

				<div class="col-6 col-lg-3">
					<!-- partner -->
					<a href="#" class="partner">
						<img src="{{ asset('website-assets/assets/img/partners/logo7.svg') }}" alt="">
						<p>thesponsor.com</p>

						<!-- design elements -->
						<span class="screw screw--br"></span>
						<span class="screw screw--bl"></span>
						<span class="screw screw--tr"></span>
						<span class="screw screw--tl"></span>
					</a>
					<!-- end partner -->
				</div>

				<div class="col-6 col-lg-3">
					<!-- partner -->
					<a href="#" class="partner">
						<img src="{{ asset('website-assets/assets/img/partners/logo8.svg') }}" alt="">
						<p>thesponsor.com</p>

						<!-- design elements -->
						<span class="screw screw--br"></span>
						<span class="screw screw--bl"></span>
						<span class="screw screw--tr"></span>
						<span class="screw screw--tl"></span>
					</a>
					<!-- end partner -->
				</div>
			</div>
		</div>
	</section>
	<!-- end partners -->

	<!-- roadmap -->
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="roadmap">
						<h2 class="roadmap__title">Roadmap</h2>

						<!-- carousel -->
						<div class="roadmap__carousel splide splide--roadmap">
							<div class="splide__arrows">
								<button class="splide__arrow splide__arrow--prev" type="button"><i class="ti ti-arrow-left"></i></button>
								<button class="splide__arrow splide__arrow--next" type="button"><i class="ti ti-arrow-right"></i></button>
							</div>

							<div class="splide__track">
								<ul class="splide__list">
									<li class="splide__slide">
										<!-- step -->
										<div class="roadmap__block roadmap__block--active">
											<h3 class="roadmap__block-title">2023 Q4</h3>
											<ul class="roadmap__block-list">
												<li>Develop the website's backend infrastructure and set up secure trading APIs.</li>
												<li>Design the user interface, ensuring ease of use and seamless navigation.</li>
												<li>Create educational content about cryptocurrency Blackstone Aurum for the website's Knowledge Center.</li>
											</ul>
										</div>
										<!-- end step -->
									</li>

									<li class="splide__slide">
										<!-- step -->
										<div class="roadmap__block roadmap__block--active">
											<h3 class="roadmap__block-title">2024 Q1</h3>
											<ul class="roadmap__block-list">
												<li>Launch the beta version of the website for a limited user group to gather feedback.</li>
												<li>Test and optimize the trading algorithms to ensure accuracy and efficiency.</li>
												<li>Implement robust security measures, including encryption and two-factor authentication.</li>
											</ul>
										</div>
										<!-- end step -->
									</li>

									<li class="splide__slide">
										<!-- step -->
										<div class="roadmap__block">
											<h3 class="roadmap__block-title">2024 Q2</h3>
											<ul class="roadmap__block-list">
												<li>Launch the full version of the website to the public.</li>
												<li>Implement a comprehensive reporting and analytics system for users to track their trading performance.</li>
												<li>Collaborate with industry experts to provide regular insights and trading tips.</li>
											</ul>
										</div>
										<!-- end step -->
									</li>

									<li class="splide__slide">
										<!-- step -->
										<div class="roadmap__block">
											<h3 class="roadmap__block-title">2024 Q3</h3>
											<ul class="roadmap__block-list">
												<li>Develop advanced trading features, such as arbitrage alerts and strategies.</li>
												<li>Introduce a subscription-based model for premium users, offering exclusive features and resources.</li>
												<li>Expand educational resources with webinars and tutorials.</li>
											</ul>
										</div>
										<!-- end step -->
									</li>

									<li class="splide__slide">
										<!-- step -->
										<div class="roadmap__block">
											<h3 class="roadmap__block-title">2024 Q4</h3>
											<ul class="roadmap__block-list">
												<li>Launch mobile apps for iOS and Android platforms to facilitate trading on the go.</li>
												<li>Continuously update trading algorithms based on market trends and user feedback.</li>
												<li>Collaborate with regulatory experts to ensure compliance with evolving cryptocurrency regulations.</li>
											</ul>
										</div>
										<!-- end step -->
									</li>
								</ul>
							</div>
						</div>
						<!-- end carousel -->


						<!-- design elements -->
						<span class="block-icon block-icon--blue">
							<i class="ti ti-north-star"></i>
						</span>
						<span class="screw screw--lines-bl"></span>
						<span class="screw screw--lines-br"></span>
						<span class="screw screw--lines-tr"></span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end roadmap -->

	<!-- faq -->
	<section class="section">
		<div class="container">
			<div class="row">
				<!-- title -->
				<div class="col-12 col-sm-10 offset-sm-1 col-md-6 offset-md-3 col-xl-4 offset-xl-4">
					<div class="section__title">
						<h2>FAQ</h2>
						<p>Here you'll find answers to frequently asked questions about our company and services.</p>
					</div>
				</div>
				<!-- end title -->
			</div>

			<div class="row">
				<!-- tabs nav -->
				<div class="col-12">
					<ul class="nav nav-tabs section__tabs" id="section__tabs" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="active" data-bs-toggle="tab" data-bs-target="#tab-1" type="button" role="tab" aria-controls="tab-1" aria-selected="true">General</button>
						</li>

						<li class="nav-item" role="presentation">
							<button data-bs-toggle="tab" data-bs-target="#tab-2" type="button" role="tab" aria-controls="tab-2" aria-selected="false">Investing</button>
						</li>

						<li class="nav-item" role="presentation">
							<button data-bs-toggle="tab" data-bs-target="#tab-3" type="button" role="tab" aria-controls="tab-3" aria-selected="false">Partnership</button>
						</li>

						<li class="nav-item" role="presentation">
							<button data-bs-toggle="tab" data-bs-target="#tab-4" type="button" role="tab" aria-controls="tab-4" aria-selected="false">Payouts</button>
						</li>
					</ul>
				</div>
				<!-- end tabs nav -->

				<!-- tabs content -->
				<div class="col-12">
					<div class="tab-content">
						<div class="tab-pane fade show active" id="tab-1" role="tabpanel">
							<div class="row">
								<!-- accordion -->
								<div class="col-12">
									<div class="accordion" id="accordion">
										<div class="row">
											<div class="col-12 col-lg-6">
												<div class="accordion__card">
													<button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">What is cryptocurrency Blackstone Aurum?</button>

													<div id="collapse1" class="collapse" data-bs-parent="#accordion">
														<p>Cryptocurrency Blackstone Aurum involves exploiting price differences for the same asset across different exchanges.</p>
													</div>
												</div>

												<div class="accordion__card">
													<button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Is Blackstone Aurum risky?</button>

													<div id="collapse2" class="collapse" data-bs-parent="#accordion">
														<p>While Blackstone Aurum offers potential profit, it also carries risks related to market volatility and execution delays.</p>
													</div>
												</div>

												<div class="accordion__card">
													<button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">How do I get started on your platform?</button>

													<div id="collapse3" class="collapse" data-bs-parent="#accordion">
														<p>Sign up on our website, complete the verification process, and connect your exchange accounts via API keys.</p>
													</div>
												</div>

												<div class="accordion__card">
													<button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">Is my personal information secure?</button>

													<div id="collapse4" class="collapse" data-bs-parent="#accordion">
														<p>Yes, we employ advanced security measures, including encryption and two-factor authentication, to protect your data.</p>
													</div>
												</div>
											</div>

											<div class="col-12 col-lg-6">
												<div class="accordion__card">
													<button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">What fees are associated with using?</button>

													<div id="collapse5" class="collapse" data-bs-parent="#accordion">
														<p>We charge a percentage-based fee on successful arbitrage trades. Exact fee details can be found in our Pricing section.</p>
													</div>
												</div>

												<div class="accordion__card">
													<button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">Do I need trading experience?</button>

													<div id="collapse6" class="collapse" data-bs-parent="#accordion">
														<p>While trading experience is beneficial, our platform is designed to be user-friendly, with educational resources to guide you.</p>
													</div>
												</div>

												<div class="accordion__card">
													<button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">What cryptocurrencies can I trade?</button>

													<div id="collapse7" class="collapse" data-bs-parent="#accordion">
														<p>Our platform supports a wide range of cryptocurrencies, including major and popular altcoins.</p>
													</div>
												</div>

												<div class="accordion__card">
													<button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">Is customer support available?</button>

													<div id="collapse8" class="collapse" data-bs-parent="#accordion">
														<p>Yes, we provide customer support through various channels, including live chat, email, and a ticketing system.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- end accordion -->
							</div>
						</div>

						<div class="tab-pane fade" id="tab-2" role="tabpanel">
							<div class="row">
								<!-- accordion -->
								<div class="col-12">
									<div class="accordion" id="accordion2">
										<div class="row">
											<div class="col-12 col-lg-6">
												<div class="accordion__card">
													<button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-1" aria-expanded="false" aria-controls="collapse2-1">How much capital do I need to start?</button>

													<div id="collapse2-1" class="collapse" data-bs-parent="#accordion2">
														<p>The required capital varies depending on your chosen trading strategies and the cryptocurrency market conditions.</p>
													</div>
												</div>

												<div class="accordion__card">
													<button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-2" aria-expanded="false" aria-controls="collapse2-2">Can I automate my trades?</button>

													<div id="collapse2-2" class="collapse" data-bs-parent="#accordion2">
														<p>Yes, our platform offers automated trading features to execute arbitrage trades based on your predefined settings.</p>
													</div>
												</div>

												<div class="accordion__card">
													<button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-3" aria-expanded="false" aria-controls="collapse2-3">What strategies can I use for trading?</button>

													<div id="collapse2-3" class="collapse" data-bs-parent="#accordion2">
														<p>You can explore triangular arbitrage, statistical arbitrage, and other strategies tailored to your risk tolerance.</p>
													</div>
												</div>

												<div class="accordion__card">
													<button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-4" aria-expanded="false" aria-controls="collapse2-4">How can I monitor my trading?</button>

													<div id="collapse2-4" class="collapse" data-bs-parent="#accordion2">
														<p>Our platform provides detailed reports and analytics to track your trades, profits, losses, and overall performance.</p>
													</div>
												</div>
											</div>

											<div class="col-12 col-lg-6">
												<div class="accordion__card">
													<button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-5" aria-expanded="false" aria-controls="collapse2-5">Do you offer risk management tools?</button>

													<div id="collapse2-5" class="collapse" data-bs-parent="#accordion2">
														<p>Yes, we provide tools like stop-loss orders and trailing stops to help manage potential risks in your trades.</p>
													</div>
												</div>

												<div class="accordion__card">
													<button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-6" aria-expanded="false" aria-controls="collapse2-6">Is leverage available on your platform?</button>

													<div id="collapse2-6" class="collapse" data-bs-parent="#accordion2">
														<p>Currently, we do not offer leverage for trading. All trades are executed with the available funds.</p>
													</div>
												</div>

												<div class="accordion__card">
													<button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-7" aria-expanded="false" aria-controls="collapse2-7">Can I withdraw my investment at any time?</button>

													<div id="collapse2-7" class="collapse" data-bs-parent="#accordion2">
														<p>Yes, you can withdraw your investment funds at any time, subject to the withdrawal process and any applicable fees.</p>
													</div>
												</div>

												<div class="accordion__card">
													<button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-8" aria-expanded="false" aria-controls="collapse2-8">Do you provide investment advice?</button>

													<div id="collapse2-8" class="collapse" data-bs-parent="#accordion2">
														<p>While we offer educational resources, we do not provide specific investment advice. It's important to do your own research.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- end accordion -->
							</div>
						</div>

						<div class="tab-pane fade" id="tab-3" role="tabpanel">
							<div class="row">
								<!-- accordion -->
								<div class="col-12">
									<div class="accordion" id="accordion3">
										<div class="row">
											<div class="col-12 col-lg-6">
												<div class="accordion__card">
													<button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3-1" aria-expanded="false" aria-controls="collapse3-1">Do you offer a referral program?</button>

													<div id="collapse3-1" class="collapse" data-bs-parent="#accordion3">
														<p>Yes, we have a referral program that rewards users for referring new traders to our platform.</p>
													</div>
												</div>

												<div class="accordion__card">
													<button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3-2" aria-expanded="false" aria-controls="collapse3-2">Can businesses partner with your platform?</button>

													<div id="collapse3-2" class="collapse" data-bs-parent="#accordion3">
														<p>Yes, we offer partnership opportunities for businesses interested in collaborating with us. Contact our team for more details.</p>
													</div>
												</div>

												<div class="accordion__card">
													<button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3-3" aria-expanded="false" aria-controls="collapse3-3">Is there a requirement for partnership?</button>

													<div id="collapse3-3" class="collapse" data-bs-parent="#accordion3">
														<p>Partnership requirements vary based on the nature of the collaboration. Reach out to us to discuss potential partnerships.</p>
													</div>
												</div>

												<div class="accordion__card">
													<button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3-4" aria-expanded="false" aria-controls="collapse3-4">What benefits do partners receive?</button>

													<div id="collapse3-4" class="collapse" data-bs-parent="#accordion3">
														<p>Partners can access customized solutions, priority support, and potentially earn revenue through our partnership programs.</p>
													</div>
												</div>
											</div>

											<div class="col-12 col-lg-6">
												<div class="accordion__card">
													<button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3-5" aria-expanded="false" aria-controls="collapse3-5">How can I become an affiliate partner?</button>

													<div id="collapse3-5" class="collapse" data-bs-parent="#accordion3">
														<p>Join our affiliate program by signing up on our website and using your unique referral link to invite new users.</p>
													</div>
												</div>

												<div class="accordion__card">
													<button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3-6" aria-expanded="false" aria-controls="collapse3-6">Do you offer white-label solutions?</button>

													<div id="collapse3-6" class="collapse" data-bs-parent="#accordion3">
														<p>Yes, we provide white-label solutions for businesses looking to integrate our Blackstone Aurum technology into their platforms.</p>
													</div>
												</div>

												<div class="accordion__card">
													<button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3-7" aria-expanded="false" aria-controls="collapse3-7">Can influencers collaborate?</button>

													<div id="collapse3-7" class="collapse" data-bs-parent="#accordion3">
														<p>Yes, we welcome influencers interested in promoting our platform. Contact our partnership team to discuss collaboration opportunities.</p>
													</div>
												</div>

												<div class="accordion__card">
													<button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3-8" aria-expanded="false" aria-controls="collapse3-8">How can I contact your partnership team?</button>

													<div id="collapse3-8" class="collapse" data-bs-parent="#accordion3">
														<p>You can reach out to our partnership team through the contact details provided on our Partnership page.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- end accordion -->
							</div>
						</div>

						<div class="tab-pane fade" id="tab-4" role="tabpanel">
							<div class="row">
								<!-- accordion -->
								<div class="col-12">
									<div class="accordion" id="accordion4">
										<div class="row">
											<div class="col-12 col-lg-6">
												<div class="accordion__card">
													<button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4-1" aria-expanded="false" aria-controls="collapse4-1">When are profits from successful credited?</button>

													<div id="collapse4-1" class="collapse" data-bs-parent="#accordion4">
														<p>Profits from successful arbitrage trades are typically credited to your account shortly after the trade is completed.</p>
													</div>
												</div>

												<div class="accordion__card">
													<button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4-2" aria-expanded="false" aria-controls="collapse4-2">What payout options are available?</button>

													<div id="collapse4-2" class="collapse" data-bs-parent="#accordion4">
														<p>We offer various withdrawal options, including cryptocurrency transfers and bank transfers, based on your preferences.</p>
													</div>
												</div>

												<div class="accordion__card">
													<button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4-3" aria-expanded="false" aria-controls="collapse4-3">Is there a minimum withdrawal amount?</button>

													<div id="collapse4-3" class="collapse" data-bs-parent="#accordion4">
														<p>Yes, there is a minimum withdrawal amount that varies depending on the cryptocurrency you're withdrawing.</p>
													</div>
												</div>

												<div class="accordion__card">
													<button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4-4" aria-expanded="false" aria-controls="collapse4-4">Are there any withdrawal fees?</button>

													<div id="collapse4-4" class="collapse" data-bs-parent="#accordion4">
														<p>Withdrawal fees may apply and can vary based on the cryptocurrency and withdrawal method. Please refer to our Withdrawal section for details.</p>
													</div>
												</div>
											</div>

											<div class="col-12 col-lg-6">
												<div class="accordion__card">
													<button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4-5" aria-expanded="false" aria-controls="collapse4-5">How long does it take to withdrawals?</button>

													<div id="collapse4-5" class="collapse" data-bs-parent="#accordion4">
														<p>Withdrawal processing times vary depending on the cryptocurrency network and the withdrawal method chosen.</p>
													</div>
												</div>

												<div class="accordion__card">
													<button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4-6" aria-expanded="false" aria-controls="collapse4-6">Can I reinvest my profits immediately?</button>

													<div id="collapse4-6" class="collapse" data-bs-parent="#accordion4">
														<p>Yes, you can reinvest your profits immediately after they are credited to your account to continue trading.</p>
													</div>
												</div>

												<div class="accordion__card">
													<button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4-7" aria-expanded="false" aria-controls="collapse4-7">Are there any limits of withdrawals?</button>

													<div id="collapse4-7" class="collapse" data-bs-parent="#accordion4">
														<p>We have withdrawal limits in place to ensure security. You can find the specific limits in our Withdrawal section.</p>
													</div>
												</div>

												<div class="accordion__card">
													<button class="collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4-8" aria-expanded="false" aria-controls="collapse4-8">How can I ensure the security?</button>

													<div id="collapse4-8" class="collapse" data-bs-parent="#accordion4">
														<p>Enable two-factor authentication, use strong passwords, and follow our security recommendations to protect your payouts.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- end accordion -->
							</div>
						</div>
					</div>
				</div>
				<!-- end tabs content -->
			</div>

			<div class="row">
				<!-- section btns -->
				<div class="col-12">
					<div class="section__btns section__btns--two">
						<a href="" class="section__btn">View all</a>
						<button class="section__btn section__btn--light" data-bs-target="#modal-ask" type="button" data-bs-toggle="modal">Ask a question</button>
					</div>
				</div>
				<!-- end section btns -->
			</div>
		</div>
	</section>
	<!-- end faq -->

	<!-- company -->
	<section class="section">
		<div class="container">
			<div class="row row--relative">
				<div class="col-12">
					<div class="company">
						<h2 class="company__title">Company registration</h2>
						
						<div class="row">
							<div class="col-12 col-xl-7">
								<p class="company__text">Integrity, reliability, transparency, flexibility and communication should be the core values of any company that works in the field of investment attraction. Blackstone  adheres to absolutely all of these values so that our clients can have confidence and trust in us.</p>
								<p class="company__text">License No. <b>8597366</b></p>
							</div>

							<div class="col-12 col-xl-4 offset-xl-1">
								<p class="company__subtitle">Legal address:</p>
								<p class="company__text">99 Chancery Street, <br>Auckland Central, <br>Auckland, 1010, New Zealand</p>
							</div>
						</div>

						<!-- design elements -->
						<span class="block-icon block-icon--orange">
							<i class="ti ti-certificate-2"></i>
						</span>
						<span class="screw screw--lines-bl"></span>
						<span class="screw screw--lines-br"></span>
						<span class="screw screw--lines-tr"></span>
					</div>
				</div>

				<!-- animation background -->
				<div class="section__canvas section__canvas--second" id="canvas2"></div>
			</div>
		</div>
	</section>
	<!-- end company -->

	<!-- footer -->

<footer class="footer">
    <div class="container">
        <div class="row">

            <div class="col-12 col-sm-8 col-md-6 col-lg-6 col-xl-4 order-1 order-lg-4 order-xl-1">

                <!-- footer logo -->
                <div class="footer__logo">
                    <img src="{{ asset('website-assets/assets/img/logo/logo1.png') }}" alt="">
                </div>
                <!-- end footer logo -->

                <!-- footer tagline -->
                <p class="footer__tagline">
                    The Blackstone team works hard <br>
                    to deliver exceptional financial results <br>
                    and increase our clients' revenue.
                </p>
                <!-- end footer tagline -->

                <!-- footer currencies -->
                <div class="footer__currencies">
                    <i class="ti ti-currency-bitcoin"></i>
                    <i class="ti ti-currency-ethereum"></i>
                    <i class="ti ti-currency-litecoin"></i>
                    <i class="ti ti-currency-solana"></i>
                    <i class="ti ti-currency-dogecoin"></i>
                </div>
                <!-- end footer currencies -->

            </div>


            <!-- navigation -->

            <!-- Company -->
            <div class="col-6 col-md-4 col-lg-3 col-xl-2 order-3 order-md-2 order-lg-2 order-xl-3 offset-md-2 offset-lg-0">

                <h6 class="footer__title">Company</h6>

                <div class="footer__nav">
                    <a href="">About Blackstone</a>
                    <a href="">Our news</a>
                    <a href="">License</a>
                    <a href="">Contacts</a>
                </div>

            </div>


            <!-- Services & Features -->
            <div class="col-12 col-md-8 col-lg-6 col-xl-4 order-2 order-md-3 order-lg-1 order-xl-2">

                <div class="row">

                    <div class="col-12">
                        <h6 class="footer__title">Services & Features</h6>
                    </div>

                    <div class="col-6">

                        <div class="footer__nav">
                            <a href="">Invest</a>
                            <a href="">Token</a>
                            <a href="">Affiliate</a>
                            <a href="">Contest</a>
                        </div>

                    </div>

                    <div class="col-6">

                        <div class="footer__nav">
                            <a href="">Safety</a>
                            <a href="">Automatization</a>
                            <a href="">Analytics</a>
                            <a href="">Reports</a>
                        </div>

                    </div>

                </div>

            </div>


            <!-- Support -->
            <div class="col-6 col-md-4 col-lg-3 col-xl-2 order-4 order-md-4 order-lg-3 order-xl-4">

                <h6 class="footer__title">Support</h6>

                <div class="footer__nav">
                    <a href="">Help center</a>
                    <a href="">How it works</a>
                    <a href="">Privacy policy</a>
                    <a href="">Terms & conditions</a>
                </div>

            </div>

            <!-- end navigation -->

        </div>


        <div class="row">

            <div class="col-12">

                <div class="footer__content">

                    <!-- footer social -->
                    <div class="footer__social">

                        <a href="" target="_blank">
                            <i class="ti ti-brand-facebook"></i>
                        </a>

                        <a href="" target="_blank">
                            <i class="ti ti-brand-x"></i>
                        </a>

                        <a href="" target="_blank">
                            <i class="ti ti-brand-instagram"></i>
                        </a>

                        <a href="" target="_blank">
                            <i class="ti ti-brand-telegram"></i>
                        </a>

                        <a href="" target="_blank">
                            <i class="ti ti-brand-discord"></i>
                        </a>

                        <a href="" target="_blank">
                            <i class="ti ti-brand-linkedin"></i>
                        </a>

                    </div>
                    <!-- end footer social -->


                    <!-- footer copyright -->
                    <small class="footer__copyright">
                        © Blackstone, 2026. 
                      
                    </small>
                    <!-- end footer copyright -->

                </div>

            </div>

        </div>

    </div>


    <!-- design elements -->
    <span class="screw screw--footer screw--footer-bl"></span>
    <span class="screw screw--footer screw--footer-br"></span>
    <span class="screw screw--footer screw--footer-tr"></span>
    <span class="screw screw--footer screw--footer-tl"></span>

</footer>


	<!-- end footer -->

	<!-- ask modal -->
	<div class="modal modal--auto fade" id="modal-ask" tabindex="-1" aria-labelledby="modal-ask" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal__content">
					<button class="modal__close" type="button" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x"></i></button>

					<h4 class="modal__title">Ask a question</h4>

					<p class="modal__text">Our support team is always on call, and ready to help with all your questions!</p>

					<form action="#" class="modal__form">
						<div class="form__group">
							<input name="name" type="text" class="form__input" placeholder="Name">
						</div>

						<div class="form__group">
							<input name="mail" type="text" class="form__input" placeholder="Email">
						</div>

						<div class="form__group">
							<textarea name="question" class="form__textarea" placeholder="Your question"></textarea>
						</div>

						<button class="form__btn" type="button">Send</button>
					</form>

					<!-- design elements -->
					<span class="screw screw--big-tl"></span>
					<span class="screw screw--big-bl"></span>
					<span class="screw screw--big-br"></span>
				</div>
			</div>
		</div>
	</div>
	<!-- end ask modal -->

	<!-- JS -->
	<script src="{{ asset('website-assets/assets/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('website-assets/assets/js/smooth-scrollbar.js') }}"></script>
	<script src="{{ asset('website-assets/assets/js/splide.min.js') }}"></script>
	<script src="{{ asset('website-assets/assets/js/three.min.js') }}"></script>
	<script src="{{ asset('website-assets/assets/js/vanta.fog.min.js') }}"></script>
	<script src="{{ asset('website-assets/assets/js/main.js') }}"></script>
</body>

</html>