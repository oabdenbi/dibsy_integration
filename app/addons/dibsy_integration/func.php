<?php

if (!defined('BOOTSTRAP')) {
    die('Access denied');
}

/**
 * Installs Dibsy payment processor.
 *
 * @return void
 */
function fn_dibsy_integration_install()
{
    /** @var \Tygh\Database\Connection $db */
    $db = Tygh::$app['db'];

    if ($db->getField('SELECT processor_id FROM ?:payment_processors WHERE processor_script = ?s', 'dibsy.php')) {
        return;
    }

    $db->query(
        'INSERT INTO ?:payment_processors ?e',
        [
            'processor'          => 'dibsy',
            'processor_script'   => 'dibsy.php',
            'admin_template'     => 'dibsy_integration.tpl',
            'callback'           => 'N',
            'type'               => 'P',
            'addon'              => 'dibsy_integration',
        ]
    );
}

/**
 * Disables Disby payment methods upon add-on uninstallation.
 *
 * @return void
 */
function fn_dibsy_integration_uninstall()
{
    /** @var \Tygh\Database\Connection $db */
    $db = Tygh::$app['db'];

    $processor_id = $db->getField(
        'SELECT processor_id FROM ?:payment_processors WHERE processor_script = ?s',
        'dibsy.php'
    );

    if (!$processor_id) {
        return;
    }

    $db->query('DELETE FROM ?:payment_processors WHERE processor_id = ?i', $processor_id);
    $db->query(
        'UPDATE ?:payments SET ?u WHERE processor_id = ?i',
        [
            'processor_id'     => 0,
            'processor_params' => '',
            'status'           => 'D',
        ],
        $processor_id
    );
}
