<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_MQ4pDJqkOwVFqiDc45cca9WC",
  "publishable_key" => "pk_test_3reGcjMM7uhF5E4Ksio02ME8"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>