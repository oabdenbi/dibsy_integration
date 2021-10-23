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

    $extra = [
        'headers' => [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $processor_data['processor_params']['secret_key'],
        ],
    ];

    $payment_gateway_api_url = "{$processor_data['processor_params']['authorization_url']}";

    $response = Http::get(
        $payment_gateway_api_url . 'test_tr_hboexzpfay',
        $extra
    );

    $response = json_decode($response, true);
    $sv = "";

} else {
    $payment_gateway_api_url = "{$processor_data['processor_params']['authorization_url']}";

    $redirect_url = fn_url("payment_notification?payment=dibsy&order_id={$order_id}", AREA, 'current');

    $extra = [
        'headers' => [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $processor_data['processor_params']['secret_key'],
        ],
    ];


    $payment_request_data = [
        'description' => $processor_data['processor_params']['order_prefix'] . $order_info['order_id'],
        'amount' => 343,
        'metadata'=> [
            'product' =>  $order_info['products'],
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
        $pp_response = [
            'order_status'   => 'O',
            'transaction_id' => $response_data['id'],
        ];
        fn_change_order_status($order_id, 'O');
        fn_update_order_payment_info($order_id, $pp_response);
    }
}

