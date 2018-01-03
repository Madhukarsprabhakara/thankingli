<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Thankingli - Login</title>
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
			@include('top-bar-header-1-0')


			<!-- 
				PAGE HEADER 
				
				CLASSES:
					.page-header-xs	= 20px margins
					.page-header-md	= 50px margins
					.page-header-lg	= 80px margins
					.page-header-xlg= 130px margins
					.dark			= dark page header

					.shadow-before-1 	= shadow 1 header top
					.shadow-after-1 	= shadow 1 header bottom
					.shadow-before-2 	= shadow 2 header top
					.shadow-after-2 	= shadow 2 header bottom
					.shadow-before-3 	= shadow 3 header top
					.shadow-after-3 	= shadow 3 header bottom
			-->
			<section class="page-header page-header-xs">
				<div class="container">

					<h1>LOGIN</h1>

					

				</div>
			</section>
			<!-- /PAGE HEADER -->




			<!-- -->
			<section>
				<div class="container">
					
					<div class="row">

						<div class="col-md-6 offset-md-3">

							

							<div class="box-static box-border-top p-30">
								<div class="box-title mb-30">
									<h2 class="fs-20">I'm a subscriber</h2>
								</div>

								<form class="m-0" method="POST" action="{{ route('login') }}">
<!-- 								<form class="m-0" method="post" action="#" autocomplete="off"> -->
									{{ csrf_field() }}
									<div class="clearfix">
										
										<!-- Email -->
										<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
											<input id="email" type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" required autofocus>
											@if ($errors->has('email'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
										</div>
										
										<!-- Password -->
										
										<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
											<input id="password" type="password" name="password" class="form-control" placeholder="Password" required="">
											@if ($errors->has('password'))
                                    <span class="help-block alert-danger">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
										</div>
						<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
										<label class="checkbox">
											<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
											<i></i> Remember Me
										</label>
							</div>
                        </div>			
							<!-- 
			 <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
 -->
											
									</div>
									
									<div class="row">
										
										<div class="col-md-6 col-sm-6 col-xs-6">
											
											<!-- Inform Tip -->                                        
											<div class="form-tip pt-20">
												<a class="no-text-decoration fs-13 mt-10 block" href="{{ route('password.request') }}">Forgot Password?</a>
											</div>
											
										</div>
										
										<div class="col-md-6 col-sm-6 col-xs-6 text-right">

											<button type="submit" class="btn btn-primary">OK, LOG IN</button>

										</div>
										
									</div>
									
								</form>

							</div>
							
							<div class="mt-30 text-center">
								<a href="{{asset('register-1-0')}}"><strong>Create Account</strong></a>

							</div>

						</div>
					</div>
					
				</div>
			</section>
			<!-- / -->




			<!-- FOOTER -->
			@include('home-page-footer-1-0')
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
		
		
	</body>
</html>