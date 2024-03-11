<?php
require('config.php');
if(isset($_POST['stripeToken'])){
    \Stripe\Stripe::setVerifySslCerts(false);

    $token=$_POST['stripeToken'];

    $data=\Stripe\Charge::create(array(
        "amount"=>1000,
        "currency"=>"inr",
        "description"=>"Programming with Vishal Desc",
        "source"=>$token,
    ));

    // Redirect to google.com
    header('Location: https://www.google.com');
    exit; // Ensure no further output is sent
}
?>
