

		<!-- Top Bar -->
			<!-- 
<div id="topBar">
				<div class="container">

					<!~~ right ~~>
					<ul class="top-links list-inline float-right">
						<li class="text-welcome hidden-xs-down">Welcome to Smarty, <strong>John Doe</strong></li>
						<li>
							<a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><i class="fa fa-user hidden-xs-down"></i> MY ACCOUNT</a>
							<ul class="dropdown-menu float-right">
								<li><a tabindex="-1" href="#"><i class="fa fa-history"></i> ORDER HISTORY</a></li>
								<li class="divider"></li>
								<li><a tabindex="-1" href="#"><i class="fa fa-bookmark"></i> MY WISHLIST</a></li>
								<li><a tabindex="-1" href="#"><i class="fa fa-edit"></i> MY REVIEWS</a></li>
								<li><a tabindex="-1" href="#"><i class="fa fa-cog"></i> MY SETTINGS</a></li>
								<li class="divider"></li>
								<li><a tabindex="-1" href="#"><i class="glyphicon glyphicon-off"></i> LOGOUT</a></li>
							</ul>
						</li>
						<li class="hidden-xs-down"><a href="page-login-1.html">LOGIN</a></li>
						<li class="hidden-xs-down"><a href="page-register-1.html">REGISTER</a></li>
					</ul>


				</div>
			</div>
 -->
			<!-- /Top Bar -->

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
<!-- 			<div id="header" class="navbar-toggleable-md transparent clearfix header-md" style="background-image:url('assets/images/_smarty/backgrounds/blue.jpg');"> -->
			<!--light header-->
			<div id="header" class="navbar-toggleable-md sticky header-sm clearfix">
			<!--transparemnt one-->
<!-- 			<div id="header" class="navbar-toggleable-md sticky header-sm clearfix"> -->
			
				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<!-- Logo -->
						<h3 class="logo float-left" style="margin: 15px 0px 0px 0px;padding: 0px;color:#42484E;"><a class="logo float-left" href="index.html">
<!-- 							<img src="assets/images/_smarty/logo_custom.png" alt="thankingli" /> -->
								
						</a>thankSumOne</h3>

						<!-- 
							Top Nav 
							
							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->
						<div class="navbar-collapse collapse float-right nav-main-collapse">
							<nav class="nav-main">

								<!--
									NOTE
									
									For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
									Direct Link Example: 

									<li>
										<a href="#">HOME</a>
									</li>
								-->
								<ul id="topMain" class="nav nav-pills nav-main">
								
								@if (Route::has('login'))
									@if (Auth::check())
									<li ><!-- PAGES -->
										<a  href="{{asset('logincustom-1-0')}}">
											Blog
										</a>
										
									</li>
									<li>
                        				<a href="{{ url('/home') }}">Home</a>
                        			</li>	
                    				@else
                    					<li><!-- PAGES -->
										<a  href="{{asset('logincustom-1-0')}}">
											Blog
										</a>
										
									</li>
                    					<li><!-- HOME -->
										<a  href="{{asset('register-1-0')}}">
											SIGN UP
										</a>
										
									</li>
									<li ><!-- PAGES -->
										<a  href="{{asset('logincustom-1-0')}}">
											SIGN IN
										</a>
										
									</li>
        
                    				@endif
									
								@endif	
								</ul>

							</nav>
						</div>

					</div>
				</header>
				<!-- /Top Nav -->

			</div>
