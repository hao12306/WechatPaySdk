<?php

use WechatPaySdk\Factory;

require_once '../vendor/autoload.php';

$config = [
    'app_id' => '***',
    "secret" => "***",
];
$payment = Factory::payment($config);
$receiver = [
    "name" => "张三",//接收方真实姓名
];
$payment->profit_sharing->addReceiver($receiver);