<?php session_start();
require('includes/config.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				<div id="logo-wrap">
				<div id="logo">
						<?php
							include("includes/logo.inc.php");
						?>
				</div>
				</div>
			

<div class="container">
<h2 class="my-4 text-center">Intro to Our Website [$24.5]</h2>
<form action="./charge.php" method="post" id="payment-form">
  <div class="form-row">
    <input type="text" name="first_name" class = "form-control mb-3 StripeElement StripeElement--empty" placeholder="First Name">
    <input type="text" name="last_name" class = "form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name">
    <input type="text" name="email" class = "form-control mb-3 StripeElement StripeElement--empty" placeholder="Email Address">

    <div id="card-element" class="form-control">
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display form errors. -->
    <div id="card-errors" role="alert"></div>
  </div>

  <button>Submit Payment</button>
</form>
</div>
<script src="https://js.stripe.com/v3/"></script>
<script src="./js/charge.js"></script>