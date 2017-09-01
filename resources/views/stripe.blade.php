<div class="center">
                <!--userForm-->
<!-- <form action="/your-server-side-code" method="POST"> -->
 			<form action="/purchases" method="POST">
 					{{csrf_field()}}
  				<script
    				src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    				data-key="pk_test_51uxcBb2bpX0SLgaCmpI820F"
    				data-amount="350"
    				data-name="Thankingli"
    				data-description="Widget"
    				data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
    				data-locale="auto">
  				</script>
			</form>
</div>