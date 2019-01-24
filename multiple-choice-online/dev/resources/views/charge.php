<?php require_once('vendor/autoload.php');
\Stripe\Stripe::setApiKey('pk_test_oTy9ErDhbXxKMJ0rm265oU3N');
$token = $_POST['stripeToken'];
// This is a $20.00 charge in US Dollar.
$charge = \Stripe\Charge::create(
    array(
        'amount' => 2000,
        'currency' => 'usd',
        'source' => $token
    )
);
print_r($charge); ?>