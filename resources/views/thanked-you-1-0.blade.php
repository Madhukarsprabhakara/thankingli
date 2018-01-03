<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Thankingli - thank feed</title>
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
			@include('topbar-header-home-1-0')
			<section class="page-header page-header-xs">
				<div class="container">

					

		<div class="push-md-5 col-md-3 col-sm-3">
						<a class="btn btn-blue " href="{{asset('thank-someone-1-0')}}">Thank someone!</a>
						</div>

				</div>
			</section>

			<!-- /PAGE HEADER -->




			<!-- -->
			<section>
				<div class="container">

					<div class="row">

						<!-- LEFT -->
						<div class="col-md-3 col-sm-3">

							<!-- INLINE SEARCH -->
							<div class="inline-search clearfix mb-30">
								<form method="get" id="search" action="/search" class="widget_search">
									<input type="search" placeholder="Search for people to thank" id="s" name="searchname" class="serch-input">
									<button type="submit">
										<i class="fa fa-search"></i>
									</button>
								</form>
							</div>
							<!-- /INLINE SEARCH -->

							<hr />

							<!-- side navigation -->
							<div class="side-nav mb-60 mt-30">

								<div class="side-nav-head">
									<button class="fa fa-bars"></button>
									<h4>Look at</h4>
								</div>
								<ul class="list-group list-group-bordered list-group-noicon uppercase">
									<li class="list-group-item active"><a href="/home"><span class="fs-11 text-muted float-right"></span> People who thanked you</a></li>
									<li class="list-group-item"><a href="/thankwall"><span class="fs-11 text-muted float-right"></span> People you thanked</a></li>
									<li class="list-group-item"><a href="/thankfeed"><span class="fs-11 text-muted float-right "></span> Thank feed</a></li>
									<li class="list-group-item"><a href="{{asset('profile-1-0')}}/{{\Auth::id()}}"><span class="fs-11 text-muted float-right"></span> Your profile</a></li>
									<!-- 
<li class="list-group-item"><a href="#"><span class="fs-11 text-muted float-right">(2)</span> DEVELOPMENT</a></li>
									<li class="list-group-item"><a href="#"><span class="fs-11 text-muted float-right">(1)</span> UNCATEGORIZED</a></li>
 -->


								</ul>
								<!-- /side navigation -->

							
							</div>


						</div>

						<!-- CENTER -->
						<div class="col-md-6 col-sm-6">

		

				@foreach ($ThankedBy as $ThankedByUser)
							<!-- POST ITEM -->
							<div class="blog-post-item">

								<!-- IMAGE -->
								@if($ThankedByUser->image)
								<figure class="mb-20">
									<img class="" height="400" width="400"  src="{{URL::asset('')}}{{$ThankedByUser->image}}" alt="">
								</figure>
								@endif

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



			<!--Footer-->
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