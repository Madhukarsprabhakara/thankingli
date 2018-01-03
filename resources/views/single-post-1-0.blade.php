<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Thankingli - post</title>
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

		<section class="page-header page-header-xs">
				<div class="container">

					

					<!-- breadcrumbs -->
					
						
						<div class="push-md-5 col-md-3 col-sm-3">
						<a class="btn btn-blue " href="{{asset('thank-someone-1-0')}}">Thank someone!</a>
						</div>
						<!-- 
<li><a href="#">Blog</a></li>
						<li class="active">Both Sidebar</li>
 -->
					

				</div>
			</section>
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
			
			<!-- /PAGE HEADER -->




			<!-- -->
			<section>
				<div class="container">

					<div class="row">

						<!-- LEFT -->
						<div class="col-md-3 col-sm-3">

							<!-- INLINE SEARCH -->
					<!-- INLINE SEARCH -->
							<div class="inline-search clearfix mb-30">
								<form method="get" id="search" action="/search" class="widget_search">
									<input type="search" placeholder="Search for people to thank" id="s" name="searchname" class="serch-input">
									<button type="submit">
										<i class="fa fa-search"></i>
									</button>
								</form>
							</div>
							<!-- /INLINE SEARCH -->					<!-- /SEARCH -->
							<!-- /INLINE SEARCH -->

							<hr />

							<!-- side navigation -->
							<!-- side navigation -->
							<div class="side-nav mb-60 mt-30">

								<div class="side-nav-head">
									<button class="fa fa-bars"></button>
									<h4>Look at</h4>
								</div>
								<ul class="list-group list-group-bordered list-group-noicon uppercase">
									<li class="list-group-item"><a href="/home"><span class="fs-11 text-muted float-right"></span> People who thanked you</a></li>
									<li class="list-group-item"><a href="/thankwall"><span class="fs-11 text-muted float-right"></span> People you thanked</a></li>
									<li class="list-group-item"><a href="/thankfeed"><span class="fs-11 text-muted float-right "></span> Thank feed</a></li>
									<li class="list-group-item"><a href="#"><span class="fs-11 text-muted float-right"></span> Your profile</a></li>
									<!-- 
<li class="list-group-item"><a href="#"><span class="fs-11 text-muted float-right">(2)</span> DEVELOPMENT</a></li>
									<li class="list-group-item"><a href="#"><span class="fs-11 text-muted float-right">(1)</span> UNCATEGORIZED</a></li>
 -->


								</ul>
								<!-- /side navigation -->

							
							</div>





							


							<hr />


							<!-- SOCIAL ICONS -->
							<!-- 
<div class="hidden-xs-down mt-30 mb-60">
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
 -->

						</div>
				@foreach ($ThankedBy as $ThankedByUser)
				<!--post starts here-->
						<!-- RIGHT -->
						<div class="col-md-7 col-sm-7">
							<h2>Thank you <a href="{{URL::asset('')}}showposts/postid/{{$ThankedByUser->post_thank_id}}">{{$ThankedByUser->to_name}}</a></h2>
							<h3  class="blog-post-title"><span>{{$ThankedByUser->thank_title}}</span></h3>
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
										<span class="font-lato"></span>
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

							<!-- OWL SLIDER -->
							<!--
							<div class="owl-carousel buttons-autohide controlls-over" data-plugin-options='{"items": 1, "autoPlay": 4500, "autoHeight": false, "navigation": true, "pagination": true, "transitionStyle":"fadeUp", "progressBar":"false"}'>
								<a class="lightbox" href="demo_files/images/1200x800/10-min.jpg" data-plugin-options='{"type":"image"}'>
									<img class="img-fluid" src="demo_files/images/content_slider/10-min.jpg" alt="" />
								</a>
								<a class="lightbox" href="demo_files/images/1200x800/3-min.jpg" data-plugin-options='{"type":"image"}'>
									<img class="img-fluid" src="demo_files/images/content_slider/3-min.jpg" alt="" />
								</a>
								<a class="lightbox" href="demo_files/images/1200x800/21-min.jpg" data-plugin-options='{"type":"image"}'>
									<img class="img-fluid" src="demo_files/images/content_slider/21-min.jpg" alt="" />
								</a>
							</div>
							-->
							<!-- /OWL SLIDER -->

							<!-- IMAGE -->
							@if($ThankedByUser->image)
							<figure class="mb-20">
								<img class="" width="300" height="300" src="{{URL::asset('')}}{{$ThankedByUser->image}}" alt="img" />
							</figure>
							@endif
							<!-- /IMAGE -->

							<!-- VIDEO -->
							<!--
							<div class="mb-20 embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item" src="http://player.vimeo.com/video/8408210" width="800" height="450"></iframe>
							</div>
							-->
							<!-- /VIDEO -->


							<!-- article content -->
							<p class="">{!!nl2br(e($ThankedByUser->thank_description))!!}.</p>
							<!-- /article content -->


							<!-- <div class="divider divider-dotted"><!~~ divider ~~></div> -->


							


							<!-- SHARE POST -->
							<!-- 
<div class="clearfix mt-30">

								<span class="float-left mt-6 bold hidden-xs-down">
									Share Post: 
								</span>

								<a href="#" class="social-icon social-icon-sm social-icon-transparent social-facebook float-right" data-toggle="tooltip" data-placement="top" title="Facebook">
<!~~ 								<div class="fb-share-button" data-href="http://www.thankingli.com" data-layout="box_count"></div> ~~>
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon social-icon-sm social-icon-transparent social-twitter float-right" data-toggle="tooltip" data-placement="top" title="Twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon social-icon-sm social-icon-transparent social-gplus float-right" data-toggle="tooltip" data-placement="top" title="Google plus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<a href="#" class="social-icon social-icon-sm social-icon-transparent social-linkedin float-right" data-toggle="tooltip" data-placement="top" title="Linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>

								<a href="#" class="social-icon social-icon-sm social-icon-transparent social-pinterest float-right" data-toggle="tooltip" data-placement="top" title="Pinterest">
									<i class="icon-pinterest"></i>
									<i class="icon-pinterest"></i>
								</a>

								<a href="#" class="social-icon social-icon-sm social-icon-transparent social-call float-right" data-toggle="tooltip" data-placement="top" title="Email">
									<i class="icon-email3"></i>
									<i class="icon-email3"></i>
								</a>

							</div>
 -->
							<!-- /SHARE POST -->
							<!--Post ends here-->
				
							<div class="divider"><!-- divider --></div>

							
							


						
							
							<!-- COMMENTS -->
							<div id="comments" class="comments">

								<!-- 
<h4 class="page-header fs-20 mb-60 mt-100">
									LEAVE A <span>COMMENT</span>
								</h4>
 -->
								<!-- Form -->
								<form role="form" method="post" action="{{URL::asset('')}}comments/{{$ThankedByUser->post_thank_id}}/store">

									{{csrf_field()}}

									<div class="row">
										<div class="col-md-12">
											<label>COMMENT</label>
											@include('validation-errors')
											<textarea name="commenttext" placeholder="" class="form-control" rows="5">{{old('commenttext')}}</textarea>
										</div>
									</div>

									<div class="row">
										<div class="col-md-12">

											<button class="btn btn-3d btn-md btn-reveal btn-blue">
												<i class="fa fa-check"></i>
												<span>Submit Comment</span>
											</button>

										</div>
									</div>

								</form>
								<!-- /Form -->
								@foreach ($CommentsOnPosts as $CommentsOnPost)
								<!-- comment item -->
								<div class="comment-item">

									<!-- user-avatar -->
									<span class="user-avatar">
										<img class="float-left media-object" src="assets/images/_smarty/avatar.png" width="64" height="64" alt="">
									</span>

									<div class="media-body">
<!-- 										<a href="#commentForm" class="scrollTo comment-reply">reply</a> -->
										<h4 class="media-heading bold">{{$CommentsOnPost->comment_name}}</h4>
										<small class="block">{{Carbon\Carbon::parse($ThankedByUser->created_at)->format('d M, Y')}}</small>
										{{$CommentsOnPost->comment_text}} 
									</div>
								</div>
								@endforeach
								


								

								

							</div>
							<!-- /COMMENTS -->
						@endforeach	
				
						</div>

					</div>


				</div>
			</section>
			<!-- / -->




			@include('home-page-footer-1-0')

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