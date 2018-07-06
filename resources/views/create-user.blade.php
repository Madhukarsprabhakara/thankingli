<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Thankingli - Register</title>
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<link href="{{URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
		
		<!-- THEME CSS -->
		<link href="{{URL::asset('assets/css/essentials.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{URL::asset('assets/css/layout.css')}}" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="{{URL::asset('assets/css/header-1.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{URL::asset('assets/css/color_scheme/blue.css')}}" rel="stylesheet" type="text/css" id="color_scheme" />
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



			<!-- -->
			<section style="background:url('demo_files/images/wall2.jpg')">
			
				<div class="display-table">
					<div class="display-table-cell vertical-align-middle">
						
						<div class="container">
							
							<div class="row">

<!-- 								<div class="col-xs-12 col-sm-5 col-md-5 col-lg-4 push-md-7 push-lg-8 push-sm-7"> -->
								<div class="login-box col-xs-12   col-lg-4  push-sm-4">

									<!-- ALERT -->
									<!--
									<div class="alert alert-mini alert-danger mb-30">
										<strong>Oh snap!</strong> Login Incorrect!
									</div>
									-->
									<!-- /ALERT -->

									<!-- register form -->
									<form class="m-0 sky-form boxed" method="POST" action="{{URL::asset('')}}create-user?referer-url={{$redirectUrl}}">
									{{csrf_field()}}
											<header>
												<i class="fa fa-users"></i> Register
											</header>

										<fieldset class="m-0">	
											
													<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
<!--                             <label for="name" class="col-md-4 control-label">Name</label> -->

                            
                                <input id="name" type="text" class="form-control" placeholder="Full name" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
<!--                             <label for="email" class="col-md-4 control-label">E-Mail Address</label> -->

                            
                                <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
<!--                             <label for="password" class="col-md-4 control-label">Password</label> -->

                            
                                <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group">
<!--                             <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label> -->

                            
                                <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
                            
                        </div>

                      
										</fieldset>

										<div class="row mb-20">
											<div class="col-md-12">
												<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> REGISTER</button>
											</div>
										</div>

									</form>
									<!-- /register form -->

								</div>

								

							</div>

						</div>

					</div>
				</div>

			</section>
			<!-- -->




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
		<script type="text/javascript" src="/assets/plugins/jquery/jquery-3.2.1.min.js"></script>

		<script type="text/javascript" src="/assets/js/scripts.js"></script>
		
		

		<!-- PAGE LEVEL SCRIPTS -->
		<script type="text/javascript">

			/**
				Checkbox on "I agree" modal Clicked!
			**/
			jQuery("#terms-agree").click(function(){
				jQuery('#termsModal').modal('toggle');

				// Check Terms and Conditions checkbox if not already checked!
				if(!jQuery("#checked-agree").checked) {
					jQuery("input.checked-agree").prop('checked', true);
				}
				
			});
		</script>
	</body>
</html>