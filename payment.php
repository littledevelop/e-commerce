<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_c7352a8c4465da399c6d256dc2e",
                  "X-Auth-Token:test_b2bb10715b9342138076ee0e415"));
$payload = Array(
    'purpose' => 'online_shopping',
    'amount' => '10',
    'phone' => '9638598860',
    'buyer_name' => 'John Doe',
    'redirect_url' => 'http://localhost/first%20project/redirect.php',
    'send_email' => true,
    'send_sms' => true,
    'email' => 'latarana4u@gmail.com',
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 

 $response=json_decode($response);

header("location:".$response->payment_request->longurl);

?>
