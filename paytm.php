<?php
$merchant_id = "3371680";
$working_key = "DB6A3F972F2BEAC76A75C81F7736F5E0";
$access_code = "495E77B0BCE021487F51CF06C08C1717";
$order_id = "1"; // Generate a unique order ID for each transaction
$amount = "1"; // Amount in INR

$redirect_url = "www.google.com"; // URL to redirect after payment
$cancel_url = "www.google.com"; // URL to redirect if payment is canceled

$data = array(
    "merchant_id" => $merchant_id,
    "order_id" => $order_id,
    "amount" => $amount,
    "currency" => "INR",
    "redirect_url" => $redirect_url,
    "cancel_url" => $cancel_url,
    "language" => "EN",
    "billing_name" => "Customer Name",
    "billing_address" => "Customer Address",
    "billing_city" => "Customer City",
    "billing_state" => "Customer State",
    "billing_zip" => "Customer Zip",
    "billing_country" => "India",
    "billing_tel" => "Customer Phone",
    "billing_email" => "customer@example.com",
    "delivery_name" => "Customer Name",
    "delivery_address" => "Customer Address",
    "delivery_city" => "Customer City",
    "delivery_state" => "Customer State",
    "delivery_zip" => "Customer Zip",
    "delivery_country" => "India",
    "delivery_tel" => "Customer Phone",
    "merchant_param1" => "",
    "merchant_param2" => "",
    "merchant_param3" => "",
    "merchant_param4" => "",
    "merchant_param5" => "",
    "promo_code" => "",
    "customer_identifier" => "",
    "merchant_logo_url" => "",
    "merchant_scheme_logo_url" => "",
    "display_currency" => "",
    "enc_val" => "",
);

ksort($data);

$str = "$working_key|$order_id|$amount|INR|Customer Name|customer@example.com|||||||||||$access_code";
$hash = hash("sha512", $str);

$data['checksum'] = $hash;

// Generate the form to submit to CC Avenue
echo '<form method="post" name="redirect" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction">';
foreach ($data as $key => $value) {
    echo '<input type="hidden" name="' . $key . '" value="' . $value . '">';
}
echo '<input type="submit" value="Proceed to Payment">';
echo '</form>';
?>
