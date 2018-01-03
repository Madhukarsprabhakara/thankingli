<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Smarty - Multipurpose + Admin</title>
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

		<!-- THEME CSS -->
		<link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/layout.css" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="assets/css/header-1.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/color_scheme/blue.css" rel="stylesheet" type="text/css" id="color_scheme" />
	</head>

	<!--
		AVAILABLE BODY CLASSES:
		
		smoothscroll 			= create a browser smooth scroll
		enable-animation		= enable WOW animations

		bg-grey					= grey background
		grain-grey				= grey grain background
		grain-blue				= blue grain background
		grain-green				= green grain background
		grain-blue				= blue grain background
		grain-orange			= orange grain background
		grain-yellow			= yellow grain background
		
		boxed 					= boxed layout
		pattern1 ... patern11	= pattern background
		menu-vertical-hide		= hidden, open on click
		
		BACKGROUND IMAGE [together with .boxed class]
		data-background="assets/images/_smarty/boxed_background/1.jpg"
	-->
	<body class="smoothscroll enable-animation">

		<!-- wrapper -->
		<div id="wrapper">

			<!-- 
				AVAILABLE HEADER CLASSES

				Default nav height: 96px
				.header-md 		= 70px nav height
				.header-sm 		= 60px nav height

				.b-0 		= remove bottom border (only with transparent use)
				.transparent	= transparent header
				.translucent	= translucent header
				.sticky			= sticky header
				.static			= static header
				.dark			= dark header
				.bottom			= header on bottom
				
				shadow-before-1 = shadow 1 header top
				shadow-after-1 	= shadow 1 header bottom
				shadow-before-2 = shadow 2 header top
				shadow-after-2 	= shadow 2 header bottom
				shadow-before-3 = shadow 3 header top
				shadow-after-3 	= shadow 3 header bottom

				.clearfix		= required for mobile menu, do not remove!

				Example Usage:  class="clearfix sticky header-sm transparent b-0"
			-->
			<div id="header" class="navbar-toggleable-md sticky  header-md clearfix">

				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<!-- Logo -->
						<a class="logo float-left scrollTo" href="#top">
							<img src="assets/images/_smarty/logo_dark.png" alt="" />
							<img src="assets/images/_smarty/logo_dark.png" alt="" />
						</a>

						<!-- 
							Top Nav 
							
							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->
						<div class="navbar-collapse collapse float-right nav-main-collapse">
							<nav class="nav-main">

								<!-- 
									.nav-onepage
									Required for onepage navigation links
									
									Add .external for an external link!
								-->
								<ul id="topMain" class="nav nav-pills nav-main nav-onepage">
									<li class="active"><!-- HOME -->
										<a href="#slider">
											HOME
										</a>
									</li>
									<li class="dropdown"><!-- ABOUT -->
										<a class="dropdown-toggle" href="#">
											ABOUT
										</a>
										<ul class="dropdown-menu">
											<li><a href="#about">ABOUT SMARTY</a></li>
											<li><a href="#skills">OUR SKILLS</a></li>
										</ul>
									</li>
									<li><!-- WORK -->
										<a href="#work">
											WORK
										</a>
									</li>
									<li><!-- TEAM -->
										<a href="#team">
											TEAM
										</a>
									</li>
									<li><!-- SERVICES -->
										<a href="#services">
											SERVICES
										</a>
									</li>
									<li><!-- PRICING -->
										<a href="#pricing">
											PRICING
										</a>
									</li>
									<li><!-- TESTIMONIALS -->
										<a href="#testimonials">
											TESTIMONIALS
										</a>
									</li>
									<li><!-- BLOG -->
										<a class="external" href="blog-default-aside-left.html">
											BLOG
										</a>
									</li>
									<li><!-- CONTACT -->
										<a href="#contact">
											CONTACT
										</a>
									</li>
								</ul>

							</nav>
						</div>

					</div>
				</header>
				<!-- /Top Nav -->

			</div>


			<!-- SLIDER -->
			<section id="slider" class="fullheight" style="background-image:url('demo_files/images/1200x800/index-image.png');">
				<div class=""><!-- dark overlay [0 to 9 opacity] --></div>

				<div class="display-table">
					<div class="display-table-cell vertical-align-middle">
						<div class="container">

							<div class="slider-featured-text text-center">
								<!-- 
<h1 class="" data-wow-delay="0.4s">
									Welcome to Smarty
								</h1>
								<h2 class="fw-300  wow fadeInUp" data-wow-delay="0.8s">Create just what you need for your Perfect Website</h2>
								<a class="btn btn-primary btn-lg" data-wow-delay="1s" href="#">PURCHASE SMARTY</a>
 -->
							</div>
				
						</div>
					</div>
				</div>

			</section>
			<!-- /SLIDER -->



			<!-- CALLOUT -->
			<section class="callout-dark heading-title heading-arrow-bottom" style="z-index:100;">
				<div class="container">

					<div class="text-center">
						<h3 class="fs-30">Everything is designed, but some things are designed well.</h3>
						<p>We can't solve problems by using the same kind of thinking we used when we created them.</p>
					</div>

				</div>
			</section>
			<!-- /CALLOUT -->



			<!-- ABOUT -->
			<section id="about">
				<div class="container">

					<header class="text-center mb-60">
						<h2>We Are Smarty</h2>
						<p class="lead font-lato">Lorem ipsum dolor sit amet adipiscium elit</p>
						<hr />
					</header>


					<div class="row">

						<div class="col-sm-6">
							<img class="img-fluid" src="demo_files/images/laptop.png" alt="" />
						</div>

						<div class="col-sm-6">
							<p class="dropcap">Lorem ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>

							<hr />

							<div class="row countTo-sm text-center">

								<div class="col-xs-6 col-sm-4">
									<i class="fa fa-users fs-20"></i> &nbsp; 
									<span class="countTo" data-speed="3000" style="color:#59BA41">1303</span>
									<h6>HAPPY CLIENTS</h6>
								</div>

								<div class="col-xs-6 col-sm-4">
									<i class="fa fa-briefcase fs-20"></i> &nbsp; 
									<span class="countTo" data-speed="3000" style="color:#774F38">56000</span>
									<h6>FINISHED PROJECTS</h6>
								</div>

								<div class="col-xs-6 col-sm-4">
									<i class="fa fa-twitter fs-20"></i> &nbsp; 
									<span class="countTo" data-speed="3000" style="color:#C02942">4897</span>
									<h6>TWITTER FOLLOWERS</h6>
								</div>

							</div>

						</div>

					</div>


				</div>
			</section>
			<!-- /ABOUT -->

			
			
			<!-- VISION/SKILL/SPECIAL -->
			<section id="skills" class="alternate">
				<div class="container">

					<div class="row">
					
						<div class="col-lg-4">

							<div class="heading-title heading-border-bottom">
								<h3>Smarty Vision</h3>
							</div>

							<div class="toggle toggle-transparent-body toggle-accordion">

								<div class="toggle active">
									<label>Who we are?</label>
									<div class="toggle-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
									</div>
								</div>

								<div class="toggle">
									<label>Our long-term vison</label>
									<div class="toggle-content">
										<p>Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc.</p>
									</div>
								</div>

								<div class="toggle">
									<label>How can we help you?</label>
									<div class="toggle-content">
										<p>Ut enim massa, sodales tempor convallis et, iaculis ac massa.</p>
									</div>
								</div>

							</div>

						</div>

						<div class="col-lg-4">

							<div class="heading-title heading-border-bottom">
								<h3>Smarty Skills</h3>
							</div>

							<div class="progress progress-lg"><!-- progress bar -->
								<div class="progress-bar progress-bar-warning progress-bar-striped active text-left" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%; min-width: 2em;">
									<span>WEB DESIGN 90%</span>
								</div>
							</div><!-- /progress bar -->

							<div class="progress progress-lg"><!-- progress bar -->
								<div class="progress-bar progress-bar-danger progress-bar-striped active text-left" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%; min-width: 2em;">
									<span>HTML/CSS 98%</span>
								</div>
							</div><!-- /progress bar -->

							<div class="progress progress-lg"><!-- progress bar -->
								<div class="progress-bar progress-bar-success progress-bar-striped active text-left" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%; min-width: 2em;">
									<span>JAVASCRIPT 60%</span>
								</div>
							</div><!-- /progress bar -->

							<div class="progress progress-lg"><!-- progress bar -->
								<div class="progress-bar progress-bar-info progress-bar-striped active text-left" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="width: 88%; min-width: 2em;">
									<span>PHP/MYSQL 88%</span>
								</div>
							</div><!-- /progress bar -->

						</div>

						<div class="col-lg-4">

							<div class="heading-title heading-border-bottom">
								<h3>Smarty Special</h3>
							</div>
							
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis aliquam id pariatur accusantium perspiciatis deserunt officiis similique nihil dolor blanditiis dignissimos iure praesentium vero suscipit doloribus aperiam unde hic non sint neque molestiae consectetur voluptatum beatae ratione corporis.</p>
							
							<a href="#" class="btn btn-default btn-block btn-lg">Join Us Now</a>
							
						</div>

					</div>


				</div>
			</section>
			<!-- /VISION/SKILL/SPECIAL -->



			<!-- WORK -->
			<section id="work">
				<div class="container">

					<header class="text-center mb-60">
						<h2>Our Work</h2>
						<p class="lead font-lato">Lorem ipsum dolor sit amet adipiscium elit</p>
						<hr />
					</header>


					<!-- PORTFOLIO -->
					<div id="portfolio" class="portfolio-nogutter">

						<ul class="nav nav-pills mix-filter mb-60">
							<li data-filter="all" class="filter active"><a href="#">All</a></li>
							<li data-filter="development" class="filter"><a href="#">Development</a></li>
							<li data-filter="photography" class="filter"><a href="#">Photography</a></li>
							<li data-filter="design" class="filter"><a href="#">Design</a></li>
						</ul>


						<div class="row mix-grid">

							<div class="col-md-3 col-sm-3 mix design"><!-- item -->

								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												<!-- lightbox -->
												<a class="ico-rounded lightbox" href="demo_files/images/mockups/1200x800/8-min.jpg" data-plugin-options='{"type":"image"}'>
													<span class="fa fa-plus fs-20"></span>
												</a>

												<!-- details -->
												<a class="ico-rounded" href="portfolio-single-slider.html">
													<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
												</a>

											</span>
										</span>

										<!-- carousel -->
										<div class="owl-carousel buttons-autohide controlls-over m-0" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": false, "pagination": true, "transitionStyle":"goDown"}'>
											<div>
												<img class="img-fluid" src="demo_files/images/mockups/600x399/8-min.jpg" width="600" height="399" alt="">
											</div>
											<div>
												<img class="img-fluid" src="demo_files/images/mockups/600x399/9-min.jpg" width="600" height="399" alt="">
											</div>
											<div>
												<img class="img-fluid" src="demo_files/images/mockups/600x399/10-min.jpg" width="600" height="399" alt="">
											</div>
										</div>
										<!-- /carousel -->


									</figure>

									<div class="item-box-desc">
										<h3>Street Photography</h3>
										<ul class="list-inline categories m-0">
											<li><a href="#">Photography</a></li>
											<li><a href="#">Design</a></li>
										</ul>
									</div>

								</div>

							</div><!-- /item -->


							<div class="col-md-3 col-sm-3 mix development"><!-- item -->

								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												<!-- lightbox -->
												<a class="ico-rounded lightbox" href="demo_files/images/mockups/1200x800/9-min.jpg" data-plugin-options='{"type":"image"}'>
													<span class="fa fa-plus fs-20"></span>
												</a>

												<!-- details -->
												<a class="ico-rounded" href="portfolio-single-slider.html">
													<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
												</a>

											</span>
										</span>

										<img class="img-fluid" src="demo_files/images/mockups/600x399/9-min.jpg" width="600" height="399" alt="">
									</figure>

									<div class="item-box-desc">
										<h3>Nature Photography</h3>
										<ul class="list-inline categories m-0">
											<li><a href="#">Photography</a></li>
											<li><a href="#">Design</a></li>
										</ul>
									</div>

								</div>

							</div><!-- /item -->


							<div class="col-md-3 col-sm-3 mix photography"><!-- item -->

								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												<!-- lightbox -->
												<a class="ico-rounded lightbox" href="demo_files/images/mockups/1200x800/10-min.jpg" data-plugin-options='{"type":"image"}'>
													<span class="fa fa-plus fs-20"></span>
												</a>

												<!-- details -->
												<a class="ico-rounded" href="portfolio-single-slider.html">
													<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
												</a>

											</span>
										</span>

										<img class="img-fluid" src="demo_files/images/mockups/600x399/10-min.jpg" width="600" height="399" alt="">
									</figure>

									<div class="item-box-desc">
										<h3>Fashion Design</h3>
										<ul class="list-inline categories m-0">
											<li><a href="#">Photography</a></li>
											<li><a href="#">Design</a></li>
										</ul>
									</div>

								</div>

							</div><!-- /item -->


							<div class="col-md-3 col-sm-3 mix design"><!-- item -->

								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												<!-- lightbox -->
												<a class="ico-rounded lightbox" href="demo_files/images/mockups/1200x800/11-min.jpg" data-plugin-options='{"type":"image"}'>
													<span class="fa fa-plus fs-20"></span>
												</a>

												<!-- details -->
												<a class="ico-rounded" href="portfolio-single-slider.html">
													<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
												</a>

											</span>
										</span>

										<img class="img-fluid" src="demo_files/images/mockups/600x399/11-min.jpg" width="600" height="399" alt="">
									</figure>

									<div class="item-box-desc">
										<h3>Ocean Project</h3>
										<ul class="list-inline categories m-0">
											<li><a href="#">Photography</a></li>
											<li><a href="#">Design</a></li>
										</ul>
									</div>

								</div>

							</div><!-- /item -->


							<div class="col-md-3 col-sm-3 mix design"><!-- item -->

								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												<!-- lightbox -->
												<a class="ico-rounded lightbox" href="demo_files/images/mockups/1200x800/12-min.jpg" data-plugin-options='{"type":"image"}'>
													<span class="fa fa-plus fs-20"></span>
												</a>

												<!-- details -->
												<a class="ico-rounded" href="portfolio-single-slider.html">
													<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
												</a>

											</span>
										</span>

										<img class="img-fluid" src="demo_files/images/mockups/600x399/12-min.jpg" width="600" height="399" alt="">
									</figure>

									<div class="item-box-desc">
										<h3>Architect Project</h3>
										<ul class="list-inline categories m-0">
											<li><a href="#">Architecture</a></li>
											<li><a href="#">Design</a></li>
										</ul>
									</div>

								</div>

							</div><!-- /item -->


							<div class="col-md-3 col-sm-3 mix development"><!-- item -->

								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												<!-- lightbox -->
												<a class="ico-rounded lightbox" href="demo_files/images/mockups/1200x800/13-min.jpg" data-plugin-options='{"type":"image"}'>
													<span class="fa fa-plus fs-20"></span>
												</a>

												<!-- details -->
												<a class="ico-rounded" href="portfolio-single-slider.html">
													<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
												</a>

											</span>
										</span>

										<img class="img-fluid" src="demo_files/images/mockups/600x399/13-min.jpg" width="600" height="399" alt="">
									</figure>

									<div class="item-box-desc">
										<h3>Speaker Design</h3>
										<ul class="list-inline categories m-0">
											<li><a href="#">Audio</a></li>
											<li><a href="#">Design</a></li>
										</ul>
									</div>

								</div>

							</div><!-- /item -->


							<div class="col-md-3 col-sm-3 mix photography"><!-- item -->

								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												<!-- lightbox -->
												<a class="ico-rounded lightbox" href="demo_files/images/mockups/1200x800/14-min.jpg" data-plugin-options='{"type":"image"}'>
													<span class="fa fa-plus fs-20"></span>
												</a>

												<!-- details -->
												<a class="ico-rounded" href="portfolio-single-slider.html">
													<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
												</a>

											</span>
										</span>

										<img class="img-fluid" src="demo_files/images/mockups/600x399/14-min.jpg" width="600" height="399" alt="">
									</figure>

									<div class="item-box-desc">
										<h3>Mobile Development</h3>
										<ul class="list-inline categories m-0">
											<li><a href="#">Development</a></li>
											<li><a href="#">Design</a></li>
										</ul>
									</div>

								</div>

							</div><!-- /item -->


							<div class="col-md-3 col-sm-3 mix design"><!-- item -->

								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												<!-- lightbox -->
												<a class="ico-rounded lightbox" href="demo_files/images/mockups/1200x800/15-min.jpg" data-plugin-options='{"type":"image"}'>
													<span class="fa fa-plus fs-20"></span>
												</a>

												<!-- details -->
												<a class="ico-rounded" href="portfolio-single-slider.html">
													<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
												</a>

											</span>
										</span>

										<img class="img-fluid" src="demo_files/images/mockups/600x399/15-min.jpg" width="600" height="399" alt="">
									</figure>

									<div class="item-box-desc">
										<h3>Nature Art</h3>
										<ul class="list-inline categories m-0">
											<li><a href="#">Nature</a></li>
											<li><a href="#">Art</a></li>
										</ul>
									</div>

								</div>

							</div><!-- /item -->


							<div class="col-md-3 col-sm-3 mix design"><!-- item -->

								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												<!-- lightbox -->
												<a class="ico-rounded lightbox" href="demo_files/images/mockups/1200x800/16-min.jpg" data-plugin-options='{"type":"image"}'>
													<span class="fa fa-plus fs-20"></span>
												</a>

												<!-- details -->
												<a class="ico-rounded" href="portfolio-single-slider.html">
													<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
												</a>

											</span>
										</span>

										<img class="img-fluid" src="demo_files/images/mockups/600x399/16-min.jpg" width="600" height="399" alt="">
									</figure>

									<div class="item-box-desc">
										<h3>Nature Art</h3>
										<ul class="list-inline categories m-0">
											<li><a href="#">Nature</a></li>
											<li><a href="#">Art</a></li>
										</ul>
									</div>

								</div>

							</div><!-- /item -->


							<div class="col-md-3 col-sm-3 mix photography"><!-- item -->

								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												<!-- lightbox -->
												<a class="ico-rounded lightbox" href="demo_files/images/mockups/1200x800/1-min.jpg" data-plugin-options='{"type":"image"}'>
													<span class="fa fa-plus fs-20"></span>
												</a>

												<!-- details -->
												<a class="ico-rounded" href="portfolio-single-slider.html">
													<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
												</a>

											</span>
										</span>

										<img class="img-fluid" src="demo_files/images/mockups/600x399/1-min.jpg" width="600" height="399" alt="">
									</figure>

									<div class="item-box-desc">
										<h3>Mobile Development</h3>
										<ul class="list-inline categories m-0">
											<li><a href="#">Development</a></li>
											<li><a href="#">Design</a></li>
										</ul>
									</div>

								</div>

							</div><!-- /item -->


							<div class="col-md-3 col-sm-3 mix design"><!-- item -->

								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												<!-- lightbox -->
												<a class="ico-rounded lightbox" href="demo_files/images/mockups/1200x800/2-min.jpg" data-plugin-options='{"type":"image"}'>
													<span class="fa fa-plus fs-20"></span>
												</a>

												<!-- details -->
												<a class="ico-rounded" href="portfolio-single-slider.html">
													<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
												</a>

											</span>
										</span>

										<img class="img-fluid" src="demo_files/images/mockups/600x399/2-min.jpg" width="600" height="399" alt="">
									</figure>

									<div class="item-box-desc">
										<h3>Nature Art</h3>
										<ul class="list-inline categories m-0">
											<li><a href="#">Nature</a></li>
											<li><a href="#">Art</a></li>
										</ul>
									</div>

								</div>

							</div><!-- /item -->


							<div class="col-md-3 col-sm-3 mix design"><!-- item -->

								<div class="item-box">
									<figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												<!-- lightbox -->
												<a class="ico-rounded lightbox" href="demo_files/images/mockups/1200x800/3-min.jpg" data-plugin-options='{"type":"image"}'>
													<span class="fa fa-plus fs-20"></span>
												</a>

												<!-- details -->
												<a class="ico-rounded" href="portfolio-single-slider.html">
													<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
												</a>

											</span>
										</span>

										<img class="img-fluid" src="demo_files/images/mockups/600x399/3-min.jpg" width="600" height="399" alt="">
									</figure>

									<div class="item-box-desc">
										<h3>Nature Art</h3>
										<ul class="list-inline categories m-0">
											<li><a href="#">Nature</a></li>
											<li><a href="#">Art</a></li>
										</ul>
									</div>

								</div>

							</div><!-- /item -->


						</div>

					</div>
					<!-- /PORTFOLIO -->

					<!-- CONTACT US -->
					<div class="callout alert alert-transparent b-0 mt-60 mb-60">

						<div class="text-center">

							<h3>Call now at <strong>+800-565-2390</strong> and get 15% discount!</h3>
							<p class="font-lato fs-20">
								We truly care about our users and our product.
							</p>
							
							<a href="#contact" class="scrollTo btn btn-default btn-lg mt-30">CONTACT US</a>

						</div>

					</div>
					<!-- /CONTACT US -->

				</div>
			</section>
			<!-- /WORK -->



			<!-- TEAM -->
			<section id="team">
				<div class="container">

					<header class="text-center mb-60">
						<h2>Our Team</h2>
						<p class="lead font-lato">Lorem ipsum dolor sit amet adipiscium elit</p>
						<hr />
					</header>

					<p class="lead">Lorem ipsum dolor sit amet. Etharums your template rerum facilis dolores nemis omnis fugats vitaes you need this.</p>
					<p>Lorem ipsum dolor sit amet. Etharums your template rerum facilis dolores nemis omnis fugats vitaes you need this totam rem aperiam, eaque ipsa qu ab illo inventore veritatis et quasi architectos beatae vitae dicta sunt explicabo. Nemo enim sadips ipsums dolores sit.Nemo enims sadips ipsums un inventore veritatis et quasi.</p>

					<div class="row">
					
						<!-- item -->
						<div class="col-md-3 col-sm-6">

							<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
								<div class="front">
									<div class="box1 box-default">
										<span class="box-icon-title">
											<img class="img-fluid" src="demo_files/images/people/460x700/7-min.jpg" alt="" />
											<h2>Felica Doe</h2>
											<small>CEO</small>
										</span>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-default">
										<h4 class="m-0">Felica Doe</h4>
										<small>CEO</small>

										<hr />

										<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>

										<hr />

										<a href="#" class="social-icon social-icon-sm social-facebook">
											<i class="fa fa-facebook"></i>
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-twitter">
											<i class="fa fa-twitter"></i>
											<i class="fa fa-twitter"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-linkedin">
											<i class="fa fa-linkedin"></i>
											<i class="fa fa-linkedin"></i>
										</a>
									</div>
								</div>
							</div>

						</div>
						<!-- /item -->

						<!-- item -->
						<div class="col-md-3 col-sm-6">

							<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
								<div class="front">
									<div class="box1 box-default">
										<span class="box-icon-title">
											<img class="img-fluid" src="demo_files/images/people/460x700/12-min.jpg" alt="" />
											<h2>Joana Doe</h2>
											<small>Art Director</small>
										</span>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-default">
										<h4 class="m-0">Joana Doe</h4>
										<small>Art Director</small>

										<hr />

										<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>

										<hr />

										<a href="#" class="social-icon social-icon-sm social-facebook">
											<i class="fa fa-facebook"></i>
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-twitter">
											<i class="fa fa-twitter"></i>
											<i class="fa fa-twitter"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-linkedin">
											<i class="fa fa-linkedin"></i>
											<i class="fa fa-linkedin"></i>
										</a>
									</div>
								</div>
							</div>

						</div>
						<!-- /item -->

						<!-- item -->
						<div class="col-md-3 col-sm-6">

							<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
								<div class="front">
									<div class="box1 box-default">
										<span class="box-icon-title">
											<img class="img-fluid" src="demo_files/images/people/460x700/10-min.jpg" alt="" />
											<h2>Melissa Doe</h2>
											<small>Web Developer</small>
										</span>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-default">
										<h4 class="m-0">Melissa Doe</h4>
										<small>Web Developer</small>

										<hr />

										<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>

										<hr />

										<a href="#" class="social-icon social-icon-sm social-facebook">
											<i class="fa fa-facebook"></i>
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-twitter">
											<i class="fa fa-twitter"></i>
											<i class="fa fa-twitter"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-linkedin">
											<i class="fa fa-linkedin"></i>
											<i class="fa fa-linkedin"></i>
										</a>
									</div>
								</div>
							</div>

						</div>
						<!-- /item -->

						<!-- item -->
						<div class="col-md-3 col-sm-6">

							<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
								<div class="front">
									<div class="box1 box-default">
										<span class="box-icon-title">
											<img class="img-fluid" src="demo_files/images/people/460x700/8-min.jpg" alt="" />
											<h2>Jessica Doe</h2>
											<small>Manager</small>
										</span>
									</div>
								</div>

								<div class="back">
									<div class="box2 box-default">
										<h4 class="m-0">Jessica Doe</h4>
										<small>Manager</small>

										<hr />

										<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>

										<hr />

										<a href="#" class="social-icon social-icon-sm social-facebook">
											<i class="fa fa-facebook"></i>
											<i class="fa fa-facebook"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-twitter">
											<i class="fa fa-twitter"></i>
											<i class="fa fa-twitter"></i>
										</a>
										<a href="#" class="social-icon social-icon-sm social-linkedin">
											<i class="fa fa-linkedin"></i>
											<i class="fa fa-linkedin"></i>
										</a>
									</div>
								</div>
							</div>

						</div>
						<!-- /item -->

					</div>

				</div>
			</section>
			<!-- /TEAM -->



			<!-- CALLOUT -->
			<div class="callout callout-theme-color">
				<div class="container">

					<div class="row">

						<div class="col-md-9"><!-- title + shortdesc -->
							<h3>Want to be part of our team?</h3>
							<p>If so, click to join now, and be part of our dynamic team!</p>
						</div>

						<div class="col-md-3"><!-- button -->
							<a href="page-careers.html" class="btn btn-primary btn-lg">Join Our Team</a>
						</div>

					</div>

				</div>
			</div>
			<!-- /CALLOUT -->



			<!-- SERVICES -->
			<section id="services">
				<div class="container">

					<header class="text-center mb-60">
						<h2>Our Services</h2>
						<p class="lead font-lato">Lorem ipsum dolor sit amet adipiscium elit</p>
						<hr />
					</header>

					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet.</p>
					
					<div class="divider divider-center divider-color"><!-- divider -->
						<i class="fa fa-chevron-down"></i>
					</div>

					<!-- FEATURED BOXES 3 -->
					<div class="row">

						<div class="col-md-4 col-xs-6">
							<div class="text-center">
								<i class="ico-color ico-lg ico-rounded ico-hover et-circle-compass"></i>
								<h4>Web Design</h4>
								<p class="font-lato fs-20">Donec id elit non mi porta gravida.</p>
							</div>
						</div>
						<div class="col-md-4 col-xs-6">
							<div class="text-center">
								<i class="ico-color ico-lg ico-rounded ico-hover et-piechart"></i>
								<h4>Web Analytics</h4>
								<p class="font-lato fs-20">Donec id elit non mi porta gravida.</p>
							</div>
						</div>
						<div class="col-md-4 col-xs-6">
							<div class="text-center">
								<i class="ico-color ico-lg ico-rounded ico-hover et-strategy"></i>
								<h4>Development</h4>
								<p class="font-lato fs-20">Donec id elit non mi porta gravida.</p>
							</div>
						</div>
						<div class="col-md-4 col-xs-6">
							<div class="text-center">
								<i class="ico-color ico-lg ico-rounded ico-hover et-streetsign"></i>
								<h4>Marketing</h4>
								<p class="font-lato fs-20">Donec id elit non mi porta gravida.</p>
							</div>
						</div>

						<div class="col-md-4 col-xs-6">
							<div class="text-center">
								<i class="ico-color ico-lg ico-rounded ico-hover et-trophy"></i>
								<h4>Sales Booster</h4>
								<p class="font-lato fs-20">Donec id elit non mi porta gravida.</p>
							</div>
						</div>
						<div class="col-md-4 col-xs-6">
							<div class="text-center">
								<i class="ico-color ico-lg ico-rounded ico-hover et-tools"></i>
								<h4>Design</h4>
								<p class="font-lato fs-20">Donec id elit non mi porta gravida.</p>
							</div>
						</div>

					</div>
					<!-- /FEATURED BOXES 3 -->

				</div>
			</section>
			<!-- /SERVICES -->



			<!-- PRICING -->
			<section id="pricing">
				<div class="container">

					<header class="text-center mb-60">
						<h2>Our Pricing</h2>
						<p class="lead font-lato">Lorem ipsum dolor sit amet adipiscium elit</p>
						<hr />
					</header>

					<div class="row">

						<div class="col-md-3 col-sm-3">
							
							<div class="price-clean">                                
								<h4>
									<sup>$</sup>15<em>/month</em>
								</h4>
								<h5> Starter </h5>
								<hr />
								<p>For individuals looking for something simple to get started.</p>
								<hr />
								<a href="#" class="btn btn-3d btn-teal">Learn More</a>
							</div>
						
						</div>

						<div class="col-md-3 col-sm-3">
							
							<div class="price-clean">                                
								<h4>
									<sup>$</sup>25<em>/month</em>
								</h4>
								<h5> BUSINESS </h5>
								<hr />
								<p>For individuals looking for something simple to get started.</p>
								<hr />
								<a href="#" class="btn btn-3d btn-teal">Learn More</a>
							</div>
						
						</div>

						<div class="col-md-3 col-sm-3">
							
							<div class="price-clean price-clean-popular"> 
								<div class="ribbon"> 
									<div class="ribbon-inner">POPULAR</div>
								</div>
								
								<h4>
									<sup>$</sup>35<em>/month</em>
								</h4>
								<h5> DEVELOPER </h5>
								<hr />
								<p>For individuals looking for something simple to get started.</p>
								<hr />
								<a href="#" class="btn btn-3d btn-primary">Learn More</a>
							</div>
						
						</div>

						<div class="col-md-3 col-sm-3">
							
							<div class="price-clean">                                
								<h4>
									<sup>$</sup>50<em>/month</em>
								</h4>
								<h5> VIP </h5>
								<hr />
								<p>For individuals looking for something simple to get started.</p>
								<hr />
								<a href="#" class="btn btn-3d btn-teal">Learn More</a>
							</div>
						
						</div>

					</div>

				</div>
			</section>
			<!-- /PRICING -->



			<!-- PARALLAX -->
			<section class="parallax parallax-2" style="background-image: url('demo_files/images/wall3-min.jpg');">
				<div class="overlay dark-6"><!-- dark overlay [1 to 9 opacity] --></div>

				<div class="container">

					<div class="text-center">
						<h3 class="m-0">Share Your Thoughts</h3>
						<p class="font-lato fw-300 lead mt-0">We can't solve problems by using the same kind of thinking we used when we created them.</p>
					</div>

					<ul class="mt-80 social-icons list-unstyled list-inline">
						<li>
							<a target="_blank" href="#">
								<i class="fa fa-facebook"></i>
								<h4>Facebook</h4>
								<span>Be Our Friend</span>
							</a>
						</li>
						<li>
							<a target="_blank" href="#">
								<i class="fa fa-twitter"></i>
								<h4>Twitter</h4>
								<span>Follow Us</span>
							</a>
						</li>
						<li>
							<a target="_blank" href="#">
								<i class="fa fa-youtube"></i>
								<h4>Youtube</h4>
								<span>Our Videos</span>
							</a>
						</li>
						<li>
							<a target="_blank" href="#">
								<i class="fa fa-instagram"></i>
								<h4>Instagram</h4>
								<span>See Our Images</span>
							</a>
						</li>
						<li>
							<a target="_blank" href="#">
								<i class="fa fa-linkedin"></i>
								<h4>Linkedin</h4>
								<span>Check Our Identity</span>
							</a>
						</li>
						<li>
							<a target="_blank" href="#">
								<i class="fa fa-pinterest"></i>
								<h4>Pinterest</h4>
								<span>Visual Discovery</span>
							</a>
						</li>
					</ul>

				</div>

			</section>
			<!-- /PARALLAX -->



			<!-- TESTIMONIALS -->
			<section id="testimonials" class="alternate">
				<div class="container">

					<header class="text-center mb-60">
						<h2>Testimonials</h2>
						<p class="lead font-lato">Lorem ipsum dolor sit amet adipiscium elit</p>
						<hr />
					</header>

					<!-- 
						Note: remove class="rounded" from the img for squared image!
					-->
					<div class="row mb-60">
						<div class="col-md-4">
							<div class="testimonial testimonial-bordered p-15">
								<figure class="float-left">
									<img class="rounded" src="demo_files/images/people/300x300/2-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero!</p>
									<cite>
										Felicia Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="testimonial testimonial-bordered p-15">
								<figure class="float-left">
									<img class="rounded" src="demo_files/images/people/300x300/1-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero!</p>
									<cite>
										Joana Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="testimonial testimonial-bordered p-15">
								<figure class="float-left">
									<img class="rounded" src="demo_files/images/people/300x300/6-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero!</p>
									<cite>
										Melissa Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</div>
					</div>

					<!-- 
						Note: remove class="rounded" from the img for squared image!
					-->
					<ul class="row clearfix testimonial-dotted list-unstyled">
						<li class="col-md-4">
							<div class="testimonial">
								<figure class="float-left">
									<img class="rounded" src="demo_files/images/people/300x300/2-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
									<cite>
										Joana Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</li>
						<li class="col-md-4">
							<div class="testimonial">
								<figure class="float-left">
									<img class="rounded" src="demo_files/images/people/300x300/6-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
									<cite>
										Melissa Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</li>
						<li class="col-md-4">
							<div class="testimonial">
								<figure class="float-left">
									<img class="rounded" src="demo_files/images/people/300x300/7-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
									<cite>
										Stephany Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</li>
						<li class="col-md-4">
							<div class="testimonial">
								<figure class="float-left">
									<img class="rounded" src="demo_files/images/people/300x300/8-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
									<cite>
										Pamela Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</li>
						<li class="col-md-4">
							<div class="testimonial">
								<figure class="float-left">
									<img class="rounded" src="demo_files/images/people/300x300/11-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
									<cite>
										Simina Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</li>
						<li class="col-md-4">
							<div class="testimonial">
								<figure class="float-left">
									<img class="rounded" src="demo_files/images/people/300x300/12-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
									<cite>
										Mihaela Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</li>
					</ul>

				</div>
			</section>
			<!-- /TESTIMONIALS -->



			<!-- CONTACT -->
			<section id="contact">
				<div class="container">

					<header class="text-center mb-60">
						<h2>Contact Us</h2>
						<p class="lead font-lato">Lorem ipsum dolor sit amet adipiscium elit</p>
						<hr />
					</header>


					<div class="row">

						<!-- FORM -->
						<div class="col-md-8 col-sm-8">

							<h3>Drop us a line or just say <strong><em>Hello!</em></strong></h3>

							
							<!--
								MESSAGES
								
									How it works?
									The form data is posted to php/contact.php where the fields are verified!
									php.contact.php will redirect back here and will add a hash to the end of the URL:
										#alert_success 		= email sent
										#alert_failed		= email not sent - internal server error (404 error or SMTP problem)
										#alert_mandatory	= email not sent - required fields empty
										Hashes are handled by assets/js/contact.js

									Form data: required to be an array. Example:
										contact[email][required]  WHERE: [email] = field name, [required] = only if this field is required (PHP will check this)
										Also, add `required` to input fields if is a mandatory field. 
										Example: <input required type="email" value="" class="form-control" name="contact[email][required]">

									PLEASE NOTE: IF YOU WANT TO ADD OR REMOVE FIELDS (EXCEPT CAPTCHA), JUST EDIT THE HTML CODE, NO NEED TO EDIT php/contact.php or javascript
												 ALL FIELDS ARE DETECTED DINAMICALY BY THE PHP

									WARNING! Do not change the `email` and `name`!
												contact[name][required] 	- should stay as it is because PHP is using it for AddReplyTo (phpmailer)
												contact[email][required] 	- should stay as it is because PHP is using it for AddReplyTo (phpmailer)
							-->

							<!-- Alert Success -->
							<div id="alert_success" class="alert alert-success mb-30">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>Thank You!</strong> Your message successfully sent!
							</div><!-- /Alert Success -->


							<!-- Alert Failed -->
							<div id="alert_failed" class="alert alert-danger mb-30">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>[SMTP] Error!</strong> Internal server error!
							</div><!-- /Alert Failed -->


							<!-- Alert Mandatory -->
							<div id="alert_mandatory" class="alert alert-danger mb-30">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>Sorry!</strong> You need to complete all mandatory (*) fields!
							</div><!-- /Alert Mandatory -->


							<form action="php/contact.php" method="post" enctype="multipart/form-data">
								<fieldset>
									<input type="hidden" name="action" value="contact_send" />

									<div class="row">
											<div class="col-md-4">
												<label for="contact:name">Full Name *</label>
												<input required type="text" value="" class="form-control" name="contact[name][required]" id="contact:name">
											</div>
											<div class="col-md-4">
												<label for="contact:email">E-mail Address *</label>
												<input required type="email" value="" class="form-control" name="contact[email][required]" id="contact:email">
											</div>
											<div class="col-md-4">
												<label for="contact:phone">Phone</label>
												<input type="text" value="" class="form-control" name="contact[phone]" id="contact:phone">
											</div>
									</div>
									<div class="row">
											<div class="col-md-8">
												<label for="contact:subject">Subject *</label>
												<input required type="text" value="" class="form-control" name="contact[subject][required]" id="contact:subject">
											</div>
											<div class="col-md-4">
												<label for="contact_department">Department</label>
												<select class="form-control pointer" name="contact[department]">
													<option value="">--- Select ---</option>
													<option value="Marketing">Marketing</option>
													<option value="Webdesign">Webdesign</option>
													<option value="Architecture">Architecture</option>
												</select>
											</div>
									</div>
									<div class="row">
											<div class="col-md-12">
												<label for="contact:message">Message *</label>
												<textarea required maxlength="10000" rows="8" class="form-control" name="contact[message]" id="contact:message"></textarea>
											</div>
									</div>
									<div class="row">
											<div class="col-md-12">
												<label for="contact:attachment">File Attachment</label>

												<!-- custom file upload -->
												<input class="custom-file-upload" type="file" id="file" name="contact[attachment]" id="contact:attachment" data-btn-text="Select a File" />
												<small class="text-muted block">Max file size: 10Mb (zip/pdf/jpg/png)</small>

											</div>
									</div>

								</fieldset>

								<div class="row">
									<div class="col-md-12">
										<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> SEND MESSAGE</button>
									</div>
								</div>
							</form>

						</div>
						<!-- /FORM -->


						<!-- INFO -->
						<div class="col-md-4 col-sm-4">

							<h2>Visit Us</h2>

							<!-- 
							Available heights
								h-100
								h-150
								h-200
								h-250
								h-300
								h-350
								h-400
								h-450
								h-500
								h-550
								h-600
							-->
							<div id="map2" class="h-400 grayscale"></div>

							<hr />

							<p>
								<span class="block"><strong><i class="fa fa-map-marker"></i> Address:</strong> Street Name, City Name, Country</span>
								<span class="block"><strong><i class="fa fa-phone"></i> Phone:</strong> <a href="tel:1800-555-1234">1800-555-1234</a></span>
								<span class="block"><strong><i class="fa fa-envelope"></i> Email:</strong> <a href="mailto:mail@yourdomain.com">mail@yourdomain.com</a></span>
							</p>

						</div>
						<!-- /INFO -->

					</div>

				</div>
			</section>
			<!-- /CONTACT -->



			<!-- FOOTER -->
			<footer id="footer">
				<div class="container">

					<div class="row">
						
						<div class="col-md-3">
							<!-- Footer Logo -->
							<img class="footer-logo" src="assets/images/_smarty/logo-footer.png" alt="" />

							<!-- Small Description -->
							<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

							<!-- Contact Address -->
							<address>
								<ul class="list-unstyled">
									<li class="footer-sprite address">
										PO Box 21132<br>
										Here Weare St, Melbourne<br>
										Vivas 2355 Australia<br>
									</li>
									<li class="footer-sprite phone">
										Phone: 1-800-565-2390
									</li>
									<li class="footer-sprite email">
										<a href="mailto:support@yourname.com">support@yourname.com</a>
									</li>
								</ul>
							</address>
							<!-- /Contact Address -->

						</div>

						<div class="col-md-3">

							<!-- Latest Blog Post -->
							<h4 class="letter-spacing-1">LATEST NEWS</h4>
							<ul class="footer-posts list-unstyled">
								<li>
									<a href="#">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue</a>
									<small>29 June 2017</small>
								</li>
								<li>
									<a href="#">Nullam id dolor id nibh ultricies</a>
									<small>29 June 2017</small>
								</li>
								<li>
									<a href="#">Duis mollis, est non commodo luctus</a>
									<small>29 June 2017</small>
								</li>
							</ul>
							<!-- /Latest Blog Post -->

						</div>

						<div class="col-md-2">

							<!-- Links -->
							<h4 class="letter-spacing-1">EXPLORE SMARTY</h4>
							<ul class="footer-links list-unstyled">
								<li><a href="#">Home</a></li>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Our Services</a></li>
								<li><a href="#">Our Clients</a></li>
								<li><a href="#">Our Pricing</a></li>
								<li><a href="#">Smarty Tour</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
							<!-- /Links -->

						</div>

						<div class="col-md-4">

							<!-- Newsletter Form -->
							<h4 class="letter-spacing-1">KEEP IN TOUCH</h4>
							<p>Subscribe to Our Newsletter to get Important News &amp; Offers</p>

							<form class="validate" action="php/newsletter.php" method="post" data-success="Subscribed! Thank you!" data-toastr-position="bottom-right">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									<input type="email" id="email" name="email" class="form-control required" placeholder="Enter your Email">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</span>
								</div>
							</form>
							<!-- /Newsletter Form -->

							<!-- Social Icons -->
							<div class="mt-20">
								<a href="#" class="social-icon social-icon-border social-facebook float-left" data-toggle="tooltip" data-placement="top" title="Facebook">

									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-twitter float-left" data-toggle="tooltip" data-placement="top" title="Twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-gplus float-left" data-toggle="tooltip" data-placement="top" title="Google plus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-linkedin float-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-rss float-left" data-toggle="tooltip" data-placement="top" title="Rss">
									<i class="icon-rss"></i>
									<i class="icon-rss"></i>
								</a>
					
							</div>
							<!-- /Social Icons -->

						</div>

					</div>

				</div>

				<div class="copyright">
					<div class="container">
						<ul class="float-right m-0 list-inline mobile-block">
							<li><a href="#">Terms &amp; Conditions</a></li>
							<li>&bull;</li>
							<li><a href="#">Privacy</a></li>
						</ul>
						&copy; All Rights Reserved, Company LTD
					</div>
				</div>
			</footer>
			<!-- /FOOTER -->

		</div>
		<!-- /wrapper -->


		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>


		<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->


		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
		<script type="text/javascript" src="assets/plugins/jquery/jquery-3.2.1.min.js"></script>

		<script type="text/javascript" src="assets/js/scripts.js"></script>
		
		<!-- STYLESWITCHER - REMOVE -->
		<script async type="text/javascript" src="demo_files/styleswitcher/styleswitcher.js"></script>

		<!-- PAGELEVEL SCRIPTS -->
		<script type="text/javascript" src="assets/js/contact.js"></script>

		<!-- 
			GMAP.JS 
			http://hpneo.github.io/gmaps/
		-->
		<script type="text/javascript" src="//maps.google.com/maps/api/js?key=AIzaSyCqCn84CgZN6o1Xc3P4dM657HIxkX3jzPY"></script>
		<script type="text/javascript" src="assets/plugins/gmaps.js"></script>
		<script type="text/javascript">

			jQuery(document).ready(function(){

				/**
					@BASIC GOOGLE MAP
				**/
				var map2 = new GMaps({
					div: '#map2',
					lat: -12.043333,
					lng: -77.028333,
					scrollwheel: false
				});

				var marker = map2.addMarker({
					lat: -12.043333,
					lng: -77.028333,
					title: 'Company, Inc.'
				});

			});

		</script>

	</body>
</html>