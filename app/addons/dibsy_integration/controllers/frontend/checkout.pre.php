<?php

use Tygh\Http;
use Tygh\Registry;
use Tygh\Tygh;


if ($mode == 'dibsy_create_order') {
    $payment_gateway_api_url = "https://api.dibsy.one/v1/payments";
    $order_info = $_SESSION['cart'];
    $redirect_url = fn_url("payment_notification?payment=dibsy&order_id={$order_id}", AREA, 'current');

    $extra = [
        'headers' => [
            'Content-Type: application/json',
            'Authorization: Bearer sk_test_1d9be81ea3e3e5a4649e5268fcad23e68a24',
        ],
    ];


    $payment_request_data = [
        'description' => $processor_data['processor_params']['order_prefix'] . $order_info['order_id'],
        'amount' => (int)$order_info['total'],
        'metadata' => [
            'product' => $order_info['products'],
            'consumer_id' => $order_info['user_id']
        ],
        'customer' => [
            'name' => $order_info['firstname'] . ' ' . $order_info['lastname'],
            'email' => $order_info['email'],
            'phone' => $order_info['phone']
        ],
        'redirectUrl' => $redirect_url
    ];

    $response = Http::post(
        $payment_gateway_api_url,
        json_encode($payment_request_data),
        $extra
    );
    $response_data = json_decode($response, true);
    $checkout_url = $response_data['_links']['checkout']['href'];
    echo $response_data['paymentToken'];
    exit();
}