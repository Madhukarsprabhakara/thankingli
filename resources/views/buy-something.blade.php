@extends('layouts.app-stripe')

@section('content')
 <div class="container">
		<!--Modal code here-->
		
		
		@include('validation-errors')
		
		
		
		

<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">            
            
            <div class="panel-heading text-center">
<!--                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button> -->
               <h3>I want to to buy {{$to_name}} a coffee! </h3>
            </div>
            
            <div class="panel-body">
            	<p>Your credit card will be charged $3.5 and {{$to_name}} will be sent a coffee code that can be used in COFFEE FACTORY</p>
            	
            	<!--custom stripe-->
            	<script src="https://checkout.stripe.com/checkout.js"></script>

<form action="/purchases" id="checkout-form" method="POST">
 					{{csrf_field()}}
  				<input type="hidden" name="stripeToken" id="stripeToken">
  				<input type="hidden" name="stripeEmail" id="stripeEmail">
  				
  				<button id="customButton" type="submit">Go ahead with the coffee purchase</button>
			</form>

<script>
var handler = StripeCheckout.configure({
  key: 'pk_test_YtHzZUaX5fLfqPCnptSITcdQ',
  image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
  locale: 'auto',
  token: function(token) {
  
  	document.querySelector('#stripeEmail').value = token.email;
    						document.querySelector('#stripeToken').value = token.id;
    						
    						document.querySelector('#checkout-form').submit();
    // You can access the token ID with `token.id`.
    // Get the token ID to your server-side code for use.
  }
});

document.getElementById('customButton').addEventListener('click', function(e) {
  // Open Checkout with further options:
  handler.open({
    name: 'Thankingli',
    description: 'Thank someone!',
    amount: 350
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
            	<p>or</p>
            	<a class="btn btn-primary pull-center" href="{{URL::asset('latestposts')}}">No, I changed my mind<i class="fa fa-angle-right"></i></a>
            	<br><br>
            <p>Note: All the payments are processed through stripe, our payment partner. Thankingli does NOT store your card details.</p>
            <h3>COFFEE FACTORY is in 3787, Stevens Creek, Santa Clara. Make sure {{$to_name}} stays close by.</h3>
            </div>
            
<!-- 		<p>Note: All the payments are processed through stripe, our payment partner. Thankingli doesn't store any of your card details</p> -->
        </div>
        <!-- /.modal-content -->



    </div>
    <!-- /.modal-dialog -->

	
</div>

		


        <hr>

        <!-- Footer -->
        @include('footer')

    </div>
@endsection
