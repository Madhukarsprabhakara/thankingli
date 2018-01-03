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
		<!--Vue css-->
		<link href="assets/css/vue.css" rel="stylesheet" type="text/css" />
		
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
			<section class="page-header">
				<div class="container text-center">

					<h3>Thank {{$to_name}} with a coffee! </h3>

					<!-- breadcrumbs -->
					

				</div>
			</section>
			<!-- /PAGE HEADER -->




			<!-- -->
			
					
			 <div class="container">
		<!--Modal code here-->
		
		
		@include('validation-errors')
		
		
		
		
<Section>
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">            
            
            <div class="panel-heading text-center">
<!--                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button> -->
               
            </div>
            
            <div class="panel-body">
           
          <div class="col-md-12 push-md-3 col-sm-6 text-center">  
            <h3>Upon purchase, {{$to_name}} will be sent a code which MUST be redeemed in person at COFFEE FACTORY for the "Thank coffee" that was purchased.</h3>
          </div>  
    <div  class="col-md-5 push-md-6 col-sm-6 text-center">
            	<select id="coffeeSelection" v-model="product" class="form-control select2">
            	<p>Make a selection</p>
            	@foreach ($products as $product)
            	
<!-- 	<option value="">~~- Select 2 ~~-</option> -->

	<option value="{{$product->id}}">{{$product->product_name}} -  ${{$product->price}}</option>
	<!-- 
<option value="2">option 2</option>
	<option value="3">option 3</option>
 -->
	@endforeach	
</select>
</div>
            	

		
					
			
		
		
					
				
            	<!--custom stripe-->
            	<script src="https://checkout.stripe.com/checkout.js"></script>
<div class="col-md-5 push-md-6 col-sm-6 text-center">

<form action="/purchases" id="checkout-form" method="POST">
 					{{csrf_field()}}
  				<input type="hidden" name="stripeToken" id="stripeToken">
  				<input type="hidden" name="stripeEmail" id="stripeEmail">
  				<input type="hidden" name="productId" id="productId">
  				<input type="hidden" name="productPrice" id="productPrice">
  				<button id="customButton" class="btn btn-3d btn-blue   mt-30" type="submit">Purchase Coffee</button>
</form>
	</div>
<script>


	

</script>	
			
<script>
var handler = StripeCheckout.configure({
  key: 'pk_test_YtHzZUaX5fLfqPCnptSITcdQ',
  image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
  locale: 'auto',
  token: function(token) {
  
  							document.querySelector('#stripeEmail').value = token.email;
    						document.querySelector('#stripeToken').value = token.id;
    						document.querySelector('#productId').value = jQuery("#coffeeSelection option:selected").val();
    						document.querySelector('#checkout-form').submit();
    // You can access the token ID with `token.id`.
    // Get the token ID to your server-side code for use.
  }
});


document.getElementById('customButton').addEventListener('click', function(e) {
 var price = jQuery("#coffeeSelection option:selected").text();
//var e = document.getElementById("coffeeSelection");
//var strUser = e.options[e.selectedIndex].text;
// console.log(price);
var arr = price.split('-');
var dollar = arr[1].split('$');
var actAmt = parseFloat(dollar[1]);
var actAmt = actAmt * 100;
// console.log(actAmt);
  // Open Checkout with further options:
  handler.open({
    name: 'Thankingli',
    description: 'Thank someone!',
    amount: actAmt
  });
  e.preventDefault();
});

// Close Checkout on page navigation:
window.addEventListener('popstate', function() {
  handler.close();
});
</script>
            	
            	<!--done here-->
            	
            	
<!--             	@include('stripe') -->
            	<br>
            	<!-- 
<p>or</p>
            	<a class="btn btn-primary pull-center" href="{{URL::asset('latestposts')}}">No, I changed my mind<i class="fa fa-angle-right"></i></a>
 -->
            	
        <div class="col-md-9 push-md-4 col-sm-6 text-center">
            
            <h3>Coffee Factory is at  3787 Stevens Creek Blvd, Santa Clara, CA 95051.</h3>
            <p>Note: All the payments are processed through stripe, our payment partner. Thankingli does NOT store your card details.</p>
            <h3></h3>
        </div>
    </div>
            
<!-- 		<p>Note: All the payments are processed through stripe, our payment partner. Thankingli doesn't store any of your card details</p> -->
        </div>
        <!-- /.modal-content -->



    </div>
    <!-- /.modal-dialog -->

	
</div>
</section>
		


      

    </div>
					
		
			




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
		
		
		<script  src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.9/vue.js"></script>
		

</script>
<!-- 		<script type="text/javascript" src="assets/js/app.js"></script>	 -->
		<script type="text/javascript" src="assets/js/scripts.js"></script>
		
		
		
	</body>
</html>