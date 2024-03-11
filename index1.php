<?php
require('config.php');
?>
<form action="checkout.php" method="post">
	<script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $publishableKey?>"
		data-amount="100"
		data-name="Programming with Ankit"
		data-description="Programming with Ankit Desc"
		data-image="https://www.logostack.com/wp-content/uploads/designers/eclipse42/small-panda-01-600x420.jpg"
		data-currency="inr"
		data-email="ankit2022svnit@gmail.com"
	>
	</script>

</form>