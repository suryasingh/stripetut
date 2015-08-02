<?php
	require_once('stripe-php-2.1.4/init.php');
	// Set your secret key: remember to change this to your live secret key in production
	// See your keys here https://dashboard.stripe.com/account/apikeys
	\Stripe\Stripe::setApiKey("sk_test_uMzU9iljs8FrZZ1NxkkVuaro");

	// Get the credit card details submitted by the form
	$token = $_POST['stripeToken'];
	$customer = \Stripe\Customer::create(array(
	  "source" => $token,
	  "plan" => "56781234",
	  "email" => "payinguser@example.com")
	);
?>
