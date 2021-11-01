<?php


use Tygh\Enum\YesNo;
use Tygh\Http;
use Tygh\Registry;

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

}

