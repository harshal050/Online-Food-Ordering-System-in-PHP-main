<?php
require('stripe-php-master/init.php');

$publishableKey="pk_test_51OstCOSH5L7QSLzEMqB7HaHjZzTKPjpDsjcx0krYLpxpQZEqbieLG39jdi2BYstBq1u2aIQw94F18p8PZcFmwJzk00qJtjLU12";

$secretKey="sk_test_51OstCOSH5L7QSLzEwfJY1Z1uySdaJ0kDpMvFkuuRUxf4Lm3irDCtvhlx50bDF7yJUSoEVyhJvjyS6EUOiinwt7sT0021yHqhe1";

\Stripe\Stripe::setApiKey($secretKey);
?>