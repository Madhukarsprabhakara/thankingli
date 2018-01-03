<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Thankingli - home</title>
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
	<body class="smoothscroll enable-animation " data-background="assets/images/_smarty/backgrounds/blue.jpg">
<!-- 	<body class="smoothscroll enable-animation"> -->

		<!-- SLIDE TOP -->
		<!-- 
<div id="slidetop">

			<div class="container">
				
				<div class="row">

					<div class="col-md-4">
						<h6><i class="icon-heart"></i> WHY SMARTY?</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. </p>
					</div>

					<div class="col-md-4">
						<h6><i class="fa-facheck"></i> RECENTLY VISITED</h6>
						<ul class="list-unstyled">
							<li><a href="#"><i class="fa fa-angle-right"></i> Consectetur adipiscing elit amet</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> This is a very long text, very very very very very very very very very very very very </a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> Dolor sit amet,consectetur adipiscing elit amet</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> Consectetur adipiscing elit amet,consectetur adipiscing elit</a></li>
						</ul>
					</div>

					<div class="col-md-4">
						<h6><i class="icon-envelope"></i> CONTACT INFO</h6>
						<ul class="list-unstyled">
							<li><b>Address:</b> PO Box 21132, Here Weare St, <br /> Melbourne, Vivas 2355 Australia</li>
							<li><b>Phone:</b> 1-800-565-2390</li>
							<li><b>Email:</b> <a href="mailto:support@yourname.com">support@yourname.com</a></li>
						</ul>
					</div>

				</div>

			</div>

			<a class="slidetop-toggle" href="#"><!~~ toggle button ~~></a>

		</div>
 -->
		<!-- /SLIDE TOP -->
<div id="wrapper">

		@include('top-bar-header-1-0')


			<!-- SLIDER Section 1-->
			<section id="home" class="fullheight transparent">
				
				
				
				
				<div class="overlay dark-1"><!-- dark overlay [0 to 9 opacity] --></div>

				<!-- 
					video audio icon 
					.fa-volume-up 	= volume on
					.fa-volume-down = volume off
					Also, change for id="YTPlayer": mute:false OR mute:true
				-->
<!-- 				<a href="#" id="video-volume"><i class="fa fa-volume-up"></i></a> -->

				<!-- Video Background - replace videoURL with your youtube video URL -->
<!-- 				<a id="YTPlayer" class="player" data-property="{videoURL:'http://www.youtube.com/watch?v=8JJqMuptrM8',containment:'body',autoPlay:true, mute:false, startAt:44, opacity:1}">youtube</a> -->
				<!--/Video Background -->

				<div class="display-table">
					<div class="display-table-cell vertical-align-middle">
						<div class="container">

							<div class="slider-featured-text text-center">
								<!-- 
<h2 class="fw-300 text-white wow fadeInUp" data-wow-delay="1s">Thank a mother</h2>
								<h2 class="fw-300 text-white wow fadeInUp" data-wow-delay="2s">Thank a friend</h2>
								<h2 class="fw-300 text-white wow fadeInUp" data-wow-delay="3s">Thank a Country</h2>
 -->
								<h2 class="fw-300 text-white wow fadeInUp">We are on a mission to make this world more lovable and more thankful.</h2>
                                                                <h2 class="fw-300 text-white wow fadeInUp" >Thankingli helps people thank anyone around the world.</h2>
<!-- 								<h2 class="fw-300 text-white wow fadeInUp" data-wow-delay="2s">Go ahead thank your family, friends, a country, a state, your dog, well, just about anyone, anything or anyplace.</h2> -->
								<!-- 
<h1 class="text-white wow fadeInUp" data-wow-delay="3s">
									thankingli
								</h1>
 -->
								@if (Auth::check())
									<a class="btn btn-primary btn-lg wow fadeInUp" data-wow-delay="1s" href="#thanksomeone">Thank someone!</a>
								@else
									<a class="btn btn-primary btn-lg wow fadeInUp" data-wow-delay="1s" href="#thankstories">Tell me more...</a>
								@endif	
							</div>
				
						</div>
					</div>
				</div>

			</section>
			<!-- /SLIDER -->
			@if (Auth::check())
			<section id="thanksomeone">
				<div class="container">
				<div class="row">
					<!-- <div class="col-md-3 col-sm-3 "></div> -->
					<div class="col-md-6 push-md-3 col-sm-6 	">
						<!-- INLINE SEARCH -->
							<div class="inline-search clearfix mb-30">
								<form method="get" id="search" action="/search" class="widget_search">
									<input type="search" placeholder="Search for people to thank on the platform" id="s" name="searchname" class="serch-input">
									<button type="submit">
										<i class="fa fa-search"></i>
									</button>
								</form>
							</div>
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
 			<!-- 
<div class="col-md-3 col-sm-3">
 			</div>
 -->
 				<div class="col-md-6 push-md-3 col-sm-6  text-center">
 					<h3>or</h3>
 				</div>
 		</div>
 		
 			<div class="container">
 			<div class="col-md-6 push-md-3 col-sm-6 text-center">
					<a href="javascript:;" onclick="jQuery('#pre-cat0').slideToggle();">Invite and thank, if the person is not on the platform</a>
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
<!--ecommerce plugin-->
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

 <!--ecommerce ends here-->
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
			@else
			<section id="thankstories">
				<div class="container">

					<div class="row">

						
						

					@foreach ($ThankedBy as $ThankedByUser)
						<!-- POST ITEM -->
						<div class="blog-post-item col-md-4 col-sm-4">

							<!-- IMAGE -->
							<figure class="mb-20">
								<img class="img-fluid" width="100%"  src="{{URL::asset('')}}{{$ThankedByUser->image}}" alt="">
							</figure>
							<h2 style="color: #636B6F;">Thank you <a href="{{URL::asset('')}}showposts/postid/{{$ThankedByUser->post_thank_id}}">{{$ThankedByUser->to_name}}</a> </h2>
							<h3><a style="color:#1566A3;" href="blog-single-default.html">{{$ThankedByUser->thank_title}}</a></h3>

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
										<span class="font-lato">28</span>
									</a>
								</li>
 -->
								<li>
									<a href="#">
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
	

					</div>


					

				</div>
			</section>
			@endif
			
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

		<!-- SCRIPTS -->
		<script type="text/javascript" src="assets/js/scripts.js"></script>
		<script type="text/javascript">
			// Gets a reference to the form element, assuming
			// it contains the id attribute "signup-form".
			var form = document.getElementById('signup-form');

			// Adds a listener for the "submit" event.
			form.addEventListener('submit', function(event) {

  			// Prevents the browser from submitting the form
  			// and thus unloading the current page.
  			event.preventDefault();

  			// Creates a timeout to call `submitForm` after one second.
  			setTimeout(submitForm, 1000);

  // Keeps track of whether or not the form has been submitted.
  // This prevents the form from being submitted twice in cases
  // where `hitCallback` fires normally.
  			var formSubmitted = false;

  			function submitForm() {
   			 if (!formSubmitted) {
     			 formSubmitted = true;
      			 form.submit();
    			}
  			}

  // Sends the event to Google Analytics and
  // resubmits the form once the hit is done.
  			ga('send', 'event', 'Signup Form footer', 'submit', {
    		hitCallback: submitForm
  			});
		});
		</script>
		<!-- STYLESWITCHER - REMOVE -->
<!-- 		<script async type="text/javascript" src="demo_files/styleswitcher/styleswitcher.js"></script> -->
	</body>
</html>