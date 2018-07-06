<div class="center">

			
			
<script src="https://checkout.stripe.com/checkout.js"></script>

<form action="/purchases" id="checkout-form" method="POST">
 					{{csrf_field()}}
  				<input type="hidden" name="stripeToken" id="stripeToken">
  				<input type="hidden" name="stripeEmail" id="stripeEmail">
  				
  				<button id="customButton" type="submit">Go ahead with the coffee purchase</button>
			</form>

<script>
var handler = StripeCheckout.configure({
  key: '{{config('services.stripe.key')}}',
  image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
  locale: 'auto',
  token: function(token) {
    // You can access the token ID with `token.id`.
    // Get the token ID to your server-side code for use.
    	
    document.querySelector('#stripeEmail').value = token.email;
    						document.querySelector('#stripeToken').value = token.id;
    						
    						document.querySelector('#checkout-form').submit();
  }
});

document.getElementById('customButton').addEventListener('click', function(e) {
  // Open Checkout with further options:
  handler.open({
    name: 'Thankingli',
    description: 'Thank someone!',
    amount: 500
  });
  e.preventDefault();
});

// Close Checkout on page navigation:
window.addEventListener('popstate', function() {
  handler.close();
});
</script>
</div>