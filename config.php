<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_D0mjGvX5C6jQad8ffgDOp1Qh",
  "publishable_key" => "pk_test_7LxXo0RV9TXL1LwzV4MuPF9h"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
