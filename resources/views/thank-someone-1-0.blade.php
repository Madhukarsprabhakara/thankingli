<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Thankingli - Thank Someone!</title>
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

		
@include('analyticstracking')

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
			@include('topbar-header-home-1-0')


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
			<section class="page-header">
				<div class="container text-center">

					<h1>Thank Someone!</h1>

					<!-- breadcrumbs -->
					

				</div>
			</section>
			<!-- /PAGE HEADER -->




			<!-- -->
			
					
			<section id="thanksomeone">
				<div class="container">
				<div class="row">
<!-- 					<div class="col-md-3 col-sm-3"></div> -->
					<div class="col-md-6 push-md-3 col-sm-6">
						<!-- INLINE SEARCH -->
							
								<!-- SEARCH -->
					<form method="get" id="search" action="/search" class="clearfix alert alert-default b-0 search-big m-0">
						<div class="input-group">


							<input name="searchname" class="form-control form-control-lg" type="text" placeholder="Search to thank people on the platform">
							<div class="input-group-btn">
								<button type="submit" class="btn btn-default form-control-lg bl-0">
									<i class="fa fa-search fa-lg p-0"></i>
								</button>
							</div>
						</div>

						<!-- 
<small class="m-0 text-muted fs-11"> 
							about 34 results <span class="text-success">(0.45 seconds)</span>
						</small>
 -->

					</form>
					<!-- /SEARCH -->
							
							<!-- /INLINE SEARCH -->
					</div>
				</div>	
					
				</div>
				
				<!-- 
	.validate 				- very important, to activate validation plugin

	data-success="Sent! Thank you!" 	- used by toastr to print the message
	data-toastr-position="top-right"	- toastr message position:
		.top-right
		.top-left
		.bottom-right
		.bottom-left


	NOTE: Add .required class for required fields.
	This form example already used on Careers page: page-careers.html
 -->
 		<div class="row">
<!--  			<div class="col-md-3 col-sm-3"> -->
 			<!-- </div> -->
 				<div class="col-md-6 push-md-3 col-sm-6 text-center">
 					<h3>or</h3>
 				</div>
 		</div>
 		
 			<div class="container">
 			<div class="col-md-6 push-md-3 col-sm-6 text-center">
					<a href="javascript:;" style="color:#1566A3;" onclick="jQuery('#pre-cat0').slideToggle();">Invite and thank, if the person is not on the platform</a>
				</div>
 			<div class="row">	
<!-- 
 				<div class="col-md-3 col-sm-3">
 				</div>
 -->
 				
				
				
				
				
 				<div id="pre-cat0" class="col-md-6 push-md-3 col-sm-6  centered hide">
							
							<div  class="heading-title heading-border-bottom ">
								<h2 class="fs-20">Invite and thank someone NOT on the platform using their email</h2>
							</div>
							@include('validation-errors')

							<form id="loginsubmit" action="/postthank" method="post" enctype="multipart/form-data">
								<fieldset>
									<!-- required [php action request] -->
									<input type="hidden" name="action" value="contact_send" />
									{{csrf_field()}}
									<div class="row">
										<div class="col-md-12 col-sm-12">
<!-- 											<label>Name of the person you wish to thank *</label> -->
											<input type="text" name="name" value="{{old('name')}}" size="100" placeholder="Name of the person you wish to thank" class="form-control" required>
										</div>
			
									</div>

									<div class="row">
										<div class="col-md-12 col-sm-12">
<!-- 												<label>Email </label> -->
											<input type="email" name="email" size="100" value="{{old('email')}}" placeholder="Email of the person you wish to thank" class="form-control" required>
										</div>
										
									</div>

									<div class="row">
										<div class="col-md-12 col-sm-12">
											<!-- primary -->
											<!-- checkbox -->
													<input name="emailpresent" id="surprise" value="1" type="hidden">
											<label>
											
											<select name="privacy" class="form-control select2">
												
<!-- 												<option value="">Select to make the message Public or private</option> -->
												<option value="0">Public</option>
												<option value="1">Private</option>
<!-- 												<option value="3">option 3</option> -->
												
											</select>
											<i></i>Use the dropdown to make the "Thanks" Private
											</label>
										</div>
<!-- 										<div class="fancy-form fancy-form-select"> -->
	

	<!--
		.fancy-arrow
		.fancy-arrow-double
	-->
<!-- 	<i class="fancy-arrow-"></i> -->
<!-- </div> -->
									</div>

									<div class="row">
										<div class="col-md-12 col-sm-12">
											
											<input type="text" name="thank-title" size="100" value="{{old('thank-title')}}" placeholder="Title for the thank story" class="form-control" required>
										</div>
										
									</div>

									<div class="row">
										<div class="col-md-12 col-sm-12">
											
											<textarea name="thank-descr" rows="10" class="form-control"  placeholder="Write the story behind the thank - Inspire the World!" id="comment" data-lang="en" required>{{old('thank-descr')}}</textarea>
										</div>
									</div>

									<div class="row">
										<div class="col-md-12">
											<label>
												File Attachment 
												<small class="text-muted">Upload an optional photo (maybe of yours and the person you are thanking)</small>
											</label>

											<!-- custom file upload -->
											<div class="fancy-file-upload fancy-file-primary">
												<i class="fa fa-upload"></i>
												<!-- 
<label>
												</label>
 -->
												<input type="file" class="form-control" name="image"  />
												<input type="text" class="form-control" placeholder="no file selected" readonly="" />
												
												<span class="button">Choose File</span>
											</div>
											<small class="text-muted block">Max file size: 5Mb (jpg/png)</small>

										</div>
									</div>
									<!--ecommerce enable/disable-->
									<div class="row">
										<div class="col-md-12 col-sm-12">
											<!-- primary -->
											<!-- checkbox -->
											<h3>Want to buy this person a Coffee? (Optional)</h3>
											<label class="checkbox">
													<input name="surprise" id="surprise" value="1" type="hidden">
                                					<input name="surprise" id="surprise" value="0" type="checkbox">
													<i></i> Yes </br>(Payment information will be taken after you thank your friend. Don't worry, until you pay we won't tell your friend about the coffee. You may change your mind on the next screen.)
											</label>
										</div>
									</div>

									<!-- ecommerce till here-->
								</fieldset>

								<div class="row">
									<div class="col-md-12">
										<button type="submit" class="btn btn-3d btn-blue btn-xlg btn-block mt-30">
											Thank now
<!-- 											<span class="block font-lato">We'll get back to you within 48 hours</span> -->
										</button>
									</div>
								</div>

							</form>

							

						

						</div>
						
		</div>
		</div>				
			</section>
					
		
			




			<!-- FOOTER -->
			@include('footer-without-distraction-1-0')
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
