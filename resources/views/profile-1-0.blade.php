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
						<div class="col-lg-3 hidden-md-down hidden-sm-down hidden-xs-down col-md-3 col-sm-4">
							<div class=" box-icon box-icon-center box-icon-round box-icon-large text-center m-0">
								<div class="front">
									<div class="box1 rad-0">
										<div class="box-icon-title">
											<i class="fa fa-user"></i>
											<h2>{{$userOnId->name}} </h2>
										</div>
<!-- 										<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p> -->
									</div>
								</div>

								
							</div>
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
								<li class="list-group-item active" ><a href="{{URL::asset('')}}profile-1-0/{{$userOnId->id}}"><i class="fa fa-eye" ></i> Profile</a></li>
								<li class="list-group-item"><a href="{{URL::asset('')}}profile-1-0/id/{{$userOnId->id}}"> People who thanked {{$userOnId->name}}</a></li>
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


						<!-- RIGHT -->
						<div class="col-lg-9 col-md-9 col-sm-8">
						<div class="push-md-4 col-lg-4 col-md-4 col-sm-8">
							<a href="{{URL::asset('')}}thank/{{$userOnId->id}}" class="btn btn-blue btn-xlg">
<!-- 								<i class="et-megaphone"></i> -->
								<span>Thank {{$userOnId->name}}</span>
							</a>
						</div>
							<br><br>
							<!-- FLIP BOX -->
							
							<!-- /FLIP BOX -->


							<div class="box-light"><!-- .box-light OR .box-dark -->

								<div class="row">

									<!-- POPULAR POSTS -->
									<div class="col-md-6 col-sm-6">

										<div class="box-inner">
											<h3>
												<a class="float-right fs-11 text-warning" href="{{URL::asset('')}}profile-1-0/id/{{$userOnId->id}}">VIEW ALL</a>
												People who thanked {{$userOnId->name}}
											</h3>
											<div class="h-250 slimscroll" data-always-visible="true" data-size="5px" data-position="right" data-opacity="0.4" disable-body-scroll="true">
											@foreach ($ThankedBy as $ThankedByUser)
												<div class="clearfix mb-10"><!-- post item -->
													<img class="thumbnail float-left" src="demo_files/images/people/300x300/b-min.jpg" width="60" height="60" alt="" />
													<h4 class="fs-13 m-0 b-0 p-0"><a href="{{URL::asset('')}}showposts/postid/{{$ThankedByUser->post_thank_id}}">Thank you {{$ThankedByUser->to_name}}</a></h4>
													<h3 class="fs-13 m-0 b-0 p-0"><a style="color:#1566A3;" href="{{URL::asset('')}}showposts/postid/{{$ThankedByUser->post_thank_id}}">{{$ThankedByUser->thank_title}}</a></h3>
													<span class="fs-11 text-muted">{{$ThankedByUser->from_name}}, {{Carbon\Carbon::parse($ThankedByUser->created_at)->format('d M, Y')}}</span> 
												</div><!-- /post item -->
											@endforeach
												

											</div>
										</div>

										

									</div>
									<!-- /POPULAR POSTS -->

									<!-- FRIENDS -->
									<div class="col-md-6 col-sm-6">

										<div class="box-inner">
											<h3>
												<a class="float-right fs-11 text-warning" href="{{URL::asset('')}}thankwall-1-0/id/{{$userOnId->id}}">VIEW ALL</a>
												People {{$userOnId->name}} thanked
											</h3>
											<div class="h-250 slimscroll" data-always-visible="true" data-size="5px" data-position="right" data-opacity="0.4" disable-body-scroll="true">
											@foreach ($Thanked as $ThankedS)
												<div class="clearfix mb-10"><!-- squared item -->
													<img class="thumbnail float-left" src="demo_files/images/people/300x300/1-min.jpg" width="40" height="40" alt="" />
													<h4 class="fs-13 m-0 b-0 p-0"><a href="{{URL::asset('')}}showposts/postid/{{$ThankedS->post_thank_id}}">Thank you {{$ThankedS->to_name}}</a></h4>
													<h3 class="fs-13 m-0 b-0 p-0"><a style="color:#1566A3;" href="{{URL::asset('')}}showposts/postid/{{$ThankedS->post_thank_id}}">{{$ThankedS->thank_title}}</a></h3>
													<span class="fs-11 text-muted">{{$ThankedS->from_name}}, {{Carbon\Carbon::parse($ThankedS->created_at)->format('d M, Y')}}</span>
												</div><!-- /squared item -->
											@endforeach	

												

											</div>
										</div>									

										

									</div>
									<!-- /FRIENDS -->

								</div>


								<div class="row mt-30">

									

									
								</div>


							</div>


							<!-- 
<form method="post" action="#" class="box-light mt-20"><!~~ .box-light OR .box-dark ~~>
								<div class="box-inner">
									<h4 class="uppercase">LEAVE A MESSAGE TO <strong>FELICIA DOE</strong></h4>
									
									<textarea required class="form-control word-count" data-maxlength="100" rows="5" placeholder="Type your message here..."></textarea>
									<div class="text-muted text-right mt-3 fs-12 mb-10">
										<span>0/100</span> Words
									</div>

									<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> SEND MESSAGE</button>
								</div>
							</form>
 -->

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
