<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Thankingli - Search Result</title>
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
			<section class="page-header page-header-xs ">
				<div class="container">

					<h1>SEARCH RESULT</h1>
					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="/home">Home</a></li>
						<!-- <li><a href="#">Pages</a></li> -->
						<li class="active">Search Result</li>
					</ol><!-- /breadcrumbs -->
					

				</div>
			</section>
			<!-- /PAGE HEADER -->



			<!-- -->
			<section class="section-sm alternate">
				<div class="container">

					<!-- SEARCH -->
					<form method="get" id="search" action="/search" class="clearfix alert alert-default b-0 search-big m-0">
						<div class="input-group">

							<div class="input-group-btn">
								<button type="button" class="btn btn-default form-control-lg dropdown-toggle br-0" data-toggle="dropdown">
									People 
								</button>
								<ul class="dropdown-menu">
									<li class="dropdown-item active">
										<a href="#"><i class="fa fa-check"></i> People</a>
									</li>
									<!-- 
<li class="divider"></li>
									<li class="dropdown-item">
										<a href="j#">Articles</a>
									</li>
									<li class="dropdown-item">
										<a href="j#">Blog</a>
									</li>
									<li class="dropdown-item">
										<a href="j#">Products</a>
									</li>
									<li class="dropdown-item">
										<a href="#">Gallery</a>
									</li>
 -->
								</ul>
							</div>

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
					


				</div>
			</section>
			<!-- / -->



			<!-- -->
			<section>
				<div class="container">

					<div class="row">

						<!-- LEFT -->
						<div class="col-md-2 col-sm-2 hidden-md-down hidden-sm-down hidden-xs-down">
							<h5 class="text-muted mb-10">Quick Links</h5>
							<ul class="list-unstyled m-0">
								<li><a href="">Home</a></li>
								<!-- 
<li><a href="#">Fully Responsive</a></li>
								<li><a href="#">Best Price</a></li>
								<li><a href="#">Incredible Design</a></li>
								<li><a href="#">SEO Development</a></li>
 -->
							</ul>
							<a class="text-mutted" href="#">View All</a>
						</div>

						
						<!-- RIGHT -->
						<div class="col-md-10 col-md-10">
							@if((count($searchNames)==0))
							<div class="clearfix search-result"><!-- item -->
								<h4 class="col-md-6 push-md-3 col-sm-6 text-center">Looks like the person you are looking for is not there on the platform yet</h4>
								<div class="col-md-6 push-md-3 col-sm-6 text-center">
					<h3 ><a href="javascript:;" style="color:#1566A3;" onclick="jQuery('#pre-cat0').slideToggle();">Invite and thank the person</a></h3>
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
											<label class="checkbox">
													<input name="emailpresent" id="surprise" value="1" type="hidden">
                                					<input name="emailpresent" id="surprise" value="0" type="checkbox">
													<i></i> Check if there is no email or the thank is for a non-living entity(e.g a tribute to a country, or thanking your dog)
											</label>
										</div>
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
<!-- 								<small class="text-success">www.stepofweb.com/</small> -->
<!-- 								<p>Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.</p> -->
							</div><!-- /item -->	
							@else
							@foreach ($searchNames as $searchName)
							<!-- SEARCH RESULTS -->
							<div class="clearfix search-result"><!-- item -->
								<h4 class="mb-0"><a style="color:#1566A3;" href="{{URL::asset('profile-1-0')}}/{{$searchName->id}}"><li>{{ $searchName->name }}</li></a></h4>
<!-- 								<small class="text-success">www.stepofweb.com/</small> -->
<!-- 								<p>Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa.</p> -->
							</div><!-- /item -->
							@endforeach
							
							
							@endif
							<br>
							<div class="row">
        						<img src="https://www.algolia.com/static_assets/images/press/downloads/search-by-algolia.png" class="img-responsive" alt="Search by algolia">
        					</div>
							<!-- /SEARCH RESULTS -->


							


							<!-- PAGINATION -->
							<!-- 
<div class="text-center mt-20">
								<ul class="pagination">
									<li class="disabled"><a class="page-link" href="#">Previous</a></li>
									<li class="page-item active"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">4</a></li>
									<li class="page-item"><a class="page-link" href="#">5</a></li>
									<li class="page-item"><a class="page-link" href="#">Next</a></li>
								</ul>
							</div>
 -->
							<!-- /PAGINATION -->

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