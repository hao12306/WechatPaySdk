<?php

use WechatPaySdk\Factory;

require_once '../vendor/autoload.php';

$config = [
    'app_id' => '***',
    "secret" => "***",
];
$payment = Factory::payment($config);
$receiver = [
    "name" => "xxx",
];
$payment->profit_sharing->addReceiver($receiver);