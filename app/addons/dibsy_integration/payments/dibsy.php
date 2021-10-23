<?php


use Tygh\Enum\YesNo;
use Tygh\Http;

if (!defined('BOOTSTRAP')) {
    die('Access denied');
}

if (defined('PAYMENT_NOTIFICATION')) {
    $order_id = $_REQUEST['order_id'];

    if (!fn_check_payment_script('dibsy.php', $order_id)) {
        die('Access denied');
    }

    $payment_id = db_get_field('SELECT payment_id FROM ?:orders WHERE order_id = ?i', $order_id);
    $processor_data = fn_get_payment_method_data((int) $payment_id);


} else {
    $payment_gateway_api_url = "{$processor_data['processor_params']['authorization_url']}";

    $redirect_url = fn_url("payment_notification?payment=disby&order_id={$order_id}", AREA, 'current');

    $extra = [
        'headers' => [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $processor_data['processor_params']['secret_key'],
        ],
    ];


    $payment_request_data = [
        'description' => 'Test description',
        'amount' => 343,
        'metadata'=> [
            'products' => '788',
            'consumer_id' => '434'
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
    if ($checkout_url) {
        fn_create_payment_form($checkout_url, [], 'dibsy', true, 'GET');
    }
}

