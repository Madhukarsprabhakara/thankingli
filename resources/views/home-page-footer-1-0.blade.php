			<!-- FOOTER -->
<!-- 			<footer id="footer" class="footer-fixed footer-light opacity-9"> -->
				<footer id="footer" class="footer-light opacity-10">
	<div class="container">

		<div class="row mt-60 mb-40 fs-13">

			<!-- col #1 -->
			<div class="col-md-3 col-sm-3">

				<!-- Footer Logo -->
<!-- 				<img class="footer-logo" src="assets/images/_smarty/logo-footer.png" alt="" /> -->
				<h1 style="color:#CCCCCC;margin-top:0px;padding:0px 0px 0px 0px;">thankingli</h1>
					
				<!-- Small Description -->
				<p>Thankingli helps people thank anyone around the world.</p>

				<!-- Contact Address -->
				<address>
					<ul class="list-unstyled">
						
						<li class="footer-sprite phone">
							Phone: 1-551-333-5909
						</li>
						<li class="footer-sprite email">
							<a href="mailto:feedback@thankingli.com">feedback@thankingli.com</a>
						</li>
					</ul>
				</address>
				<!-- /Contact Address -->

			</div>
			<!-- /col #1 -->

			<!-- col #2 -->
			<div class="push-md-1 col-md-5 col-sm-5">

<!-- 				<div class="col-md-2"> -->

				<!-- Links -->
				<h4 class="letter-spacing-1">Important links</h4>
				<ul class="footer-links list-unstyled">
					<li><a href="/thankfeed">Home</a></li>
					<li><a href="/first-hundred">The First 500</a></li>
					<!-- <li><a href="#">Our Services</a></li> -->
					<!-- 
<li><a href="#">Our Clients</a></li>
					<li><a href="#">Our Pricing</a></li>
					<li><a href="#">Smarty Tour</a></li>
					<li><a href="#">Contact Us</a></li>
 -->
				</ul>
				<!-- /Links -->

<!-- 			</div> -->
				
				

			</div>
			<!-- /col #2 -->

			<!-- col #3 -->
			@if (Auth::check())
				<div class="col-md-4 col-sm-4">

				<h4 class="letter-spacing-1">Let's make this world a better place</h4>

				<a class="btn btn-blue" href="{{asset('thank-someone-1-0')}}">Thank someone!</a>

			</div>
			@else
				<div class="col-md-4 col-sm-4">

				<h4 class="letter-spacing-1">Why not Thank someone? Sign Up here</h4>
<!-- 				<h4 class="letter-spacing-1"></h4> -->

				<!-- CONTACT MESSAGES -->
				<p id="alert_success" class="alert alert-success alert-mini">Message sent! Thank You!</p>
				<p id="alert_failed" class="alert alert-danger alert-mini">Message not sent!</p>
				<p id="alert_mandatory" class="alert alert-danger alert-mini">Please, complete all mandatory fields</p>

				<!-- CONTACT FORM -->
				<form class="form-horizontal" method="POST" action="{{ route('register') }}">
					{{csrf_field()}}
					<!-- 
<input type="text" value="" placeholder="Name*" maxlength="100" class="form-control required" name="contact[name]" />
                    <input type="email" value="" placeholder="Email*" data-msg-email="Please enter a valid email address." class="form-control required" name="contact[email]" />
                                        <input type="password" placeholder="password" class="form-control required" name="password"/>
                                        <input type="password" placeholder="Confirm password" class="form-control required" name="password2"/>
 -->
					
                            

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}" required>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        

                        
                            

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" placeholder="Email"value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                       

                        
                            

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        

                        

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
                            </div>
                        
                        <div class="col-md-12">
						<span class="input-group-btn">
								<button class="btn btn-blue" type="submit">Sign Up</button>
						</span>
						</div>

				</form>
				<!-- /CONTACT FORM -->

			</div>
			@endif
			<!-- /col #3 -->

		</div>

	</div>

	<div class="copyright">
		<div class="container">
			<ul class="float-right m-0 list-inline mobile-block">
				<li><a href="#">Terms &amp; Conditions</a></li>
				<li>&bull;</li>
				<li><a href="#">Privacy</a></li>
			</ul>

			&copy; All Rights Reserved, thankingli 2017
		</div>
	</div>

</footer>
