<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Thankingli - profile</title>
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
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
			<!-- 
<section class="page-header page-header-xs">
				<div class="container">

					<h2>Profile</h2>
						
				</div>
			</section>
 -->
			<!-- /PAGE HEADER -->




			<!-- -->
			<section>
				<div class="container">
					<div class="row">
						
						<!-- LEFT -->
						<div class="col-lg-3 col-md-3 col-sm-4">
							<a href="{{URL::asset('')}}thank/{{$userOnId->id}}" class="btn btn-blue btn-xlg">
<!-- 								<i class="et-megaphone"></i> -->
								<span>Thank {{$userOnId->name}}</span>
							</a>
							<!-- 
<div class="thumbnail text-center">
								<img class="img-fluid" src="demo_files/images/people/460x700/8-min.jpg" alt="" />
								<h2 class="fs-18 mt-10 mb-0">Felica Doe</h2>
								<h3 class="fs-11 mt-0 mb-10 text-muted">DEVELOPER</h3>
							</div>
 -->

							
						</br></br>
							<!-- SIDE NAV -->
							<ul class="side-nav list-group mb-60" id="sidebar-nav">
								<li class="list-group-item " ><a href="{{URL::asset('')}}profile-1-0/{{$userOnId->id}}"><i class="fa fa-eye" ></i> Profile</a></li>
								<li class="list-group-item active"><a href="{{URL::asset('')}}profile-1-0/id/{{$userOnId->id}}"> People who thanked {{$userOnId->name}}</a></li>
								<li class="list-group-item"><a href="{{URL::asset('')}}thankwall-1-0/id/{{$userOnId->id}}"> People {{$userOnId->name}} thanked </a></li>
								<li class="list-group-item"><a href="/thankfeed"><i class="fa fa-home"></i> Home</a></li>
								<!-- 
<li class="list-group-item"><a href="page-profile-history.html"><i class="fa fa-history"></i> HISTORY</a></li>
								<li class="list-group-item"><a href="page-profile-settings.html"><i class="fa fa-gears"></i> SETTINGS</a></li>
 -->

								
							</ul>
							<!-- /SIDE NAV -->
						

							<!-- info -->
							<div class="box-light mb-30"><!-- .box-light OR .box-light -->
								<div class="row mb-20">
									<div class="col-md-4 col-sm-4 col-xs-4 text-center bold">
										<h2 class="fs-30 mt-10 mb-0 font-raleway">{{count($Thanked)}}</h2>
										<h3 class="fs-11 mt-0 mb-10 text-info">Given</h3>
									</div>

									<div class="col-md-4 col-sm-4 col-xs-4 text-center bold">
										<h2 class="fs-30 mt-10 mb-0 font-raleway">{{count($ThankedBy)}}</h2>
										<h3 class="fs-11 mt-0 mb-10 text-info">Received</h3>
									</div>

									
								</div>
								<!-- /info -->

								
							
							</div>

						</div>


						<!-- RIGHT  Pt-->
						<div class="col-md-6 col-sm-6">

		

				@foreach ($ThankedBy as $ThankedByUser)
							<!-- POST ITEM -->
							<div class="blog-post-item">

								<!-- IMAGE -->
								<figure class="mb-20">
									<img class="" height="400" width="400"  src="{{URL::asset('')}}{{$ThankedByUser->image}}" alt="">
								</figure>

								<h2>Thank you <a href="{{URL::asset('')}}showposts/postid/{{$ThankedByUser->post_thank_id}}">{{$ThankedByUser->to_name}}</a></h2>
								<h3><a style="color:#1566A3;" href="{{URL::asset('')}}showposts/postid/{{$ThankedByUser->post_thank_id}}">{{$ThankedByUser->thank_title}}</a></h3>

								<ul class="blog-post-info list-inline">
									<li>
										<a href="#">
											<i class="fa fa-clock-o"></i> 
											<span class="font-lato">{{Carbon\Carbon::parse($ThankedByUser->created_at)->format('d M, Y')}}</span>
										</a>
									</li>
								<!-- 
	<li>
										<a href="#">
											<i class="fa fa-comment-o"></i> 
											<span class="font-lato">28 Comments</span>
										</a>
									</li>
 -->
								
									<li>
										<a href="{{URL::asset('profile-1-0')}}/{{$ThankedByUser->from_id}}">
											<i class="fa fa-user"></i> 
											<span class="font-lato">{{$ThankedByUser->from_name}}</span>
										</a>
									</li>
								</ul>

								<p>{!!nl2br(e(\Illuminate\Support\Str::limit($ThankedByUser->thank_description, 300, '...')))!!}.</p>

								<a href="{{URL::asset('')}}showposts/postid/{{$ThankedByUser->post_thank_id}}" class="btn btn-reveal btn-default">
									<i class="fa fa-plus"></i>
									<span>Read More</span>
								</a>

							</div>
							<!-- /POST ITEM -->
					@endforeach
						
						


							<!-- PAGINATION -->
							<div class="text-center">
								<!-- Pagination Default -->
								<ul class="pagination m-0">
									<li class="page-item"><a class="page-link" href="{{$ThankedBy->previousPageUrl()}}">&laquo;</a>Prev</li>
									<!-- 
<li class="page-item active"><a class="page-link" href="{{URL::asset('')}}thankfeed?page=1">1</a></li>
									<li class="page-item"><a class="page-link" href="{{URL::asset('')}}thankfeed?page=2">2</a></li>
									<li class="page-item"><a class="page-link" href="{{URL::asset('')}}thankfeed?page=3">3</a></li>
									<li class="page-item"><a class="page-link" href="{{URL::asset('')}}thankfeed?page=4">4</a></li>
									<li class="page-item"><a class="page-link" href="{{URL::asset('')}}thankfeed?page=5">5</a></li>
 -->
									<li class="page-item"><a class="page-link" href="{{$ThankedBy->nextPageUrl()}}">&raquo;</a>Next</li>
								</ul>
								<!-- /Pagination Default -->
							</div>
							<!-- /PAGINATION -->


						</div>

					</div>					
				</div>
			</section>
			<!-- / -->




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
		<script type="text/javascript">var plugin_path = '/assets/plugins/';</script>
		<script type="text/javascript" src="{{URL::asset('assets/plugins/jquery/jquery-3.2.1.min.js')}}"></script>

		<script type="text/javascript" src="{{URL::asset('assets/js/scripts.js')}}"></script>
		
	</body>
</html>