<?php

require_once '../stripe-php-3.9.2/init.php';

global $stripe_publishable_key;
global $email_password;

// PUT THIS INTO PRIVATE FILE ONLY
$mysqli = new mysqli('192.254.231.195', 'ceolter_portal', '0872393174Aa', 'ceolter_portal');
$email_password = '0872393174Aa';

// if in production, load the keys from the stripeKey.php file
if (file_exists('./secret.php')) {
    require_once('./secret.php');
} else {
    //otherwise use the test keys
    $stripe_publishable_key = 'pk_test_XfAfAZ2N9NiN1hSIRLxiYzws';
    \Stripe\Stripe::setApiKey("sk_test_VuWfsv0IkLDkUGIzFtvUJcQx");
}

?>