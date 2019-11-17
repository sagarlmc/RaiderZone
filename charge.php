<?php
  require_once('vendor/autoload.php');

  \Stripe\Stripe::setApiKey(' 
sk_test_ijry4Z6aBz88L6TjEK0f0Ben00F6tfrDmK');

  $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
  $first_name = $POST['first_name'];
  $last_name = $POST['last_name'];
  $email = $POST['email'];
  $token = $POST['stripeToken'];

  $customer = \Stripe\Customer::create(array(
    "email" => $email,
    "source" => $token));

  $charge = \Stripe\Charge::create(array(
    "amount" => 5000,
    "source" => "usd",
    "description"=>"Intro to Our Website",
    "customer"=>$customer->id));

  print_r($charge);

