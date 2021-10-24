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
    $payment_info = db_get_field("SELECT data FROM ?:order_data WHERE order_id = ?i AND type = 'P'", $order_id);
    if (!empty($payment_info)) {
        $payment_info = unserialize(fn_decrypt_text($payment_info));
    }

    $extra = [
        'headers' => [
            'Authorization: Bearer ' . $processor_data['processor_params']['secret_key'],
        ],
    ];

    $payment_info_gateway_api_url = "https://api.dibsy.one/v1/payments/" . $payment_info['transaction_id'];

    $response = Http::get(
        $payment_info_gateway_api_url,
        [],
        $extra
    );

    $response = json_decode($response, true);
    fn_finish_payment($order_id, $response);
    fn_order_placement_routines('route', $order_id);

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
        'amount' => $order_info['total'],
        'metadata'=> [
            'product' =>  $order_info['products'],
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
    if ($checkout_url) {
        $dibsy_response = [
            'order_status'   => $response_data['status'],
            'transaction_id' => $response_data['id']
        ];
        fn_change_order_status($order_id, 'O');
        fn_update_order_payment_info($order_id, $dibsy_response);
        fn_create_payment_form($checkout_url, [], 'dibsy', true, 'GET');
    }
}

