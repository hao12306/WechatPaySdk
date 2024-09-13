<?php

namespace WechatPaySdk\Payment;

use WechatPaySdk\ServiceContainer;

/**
 * @property \WechatPaySdk\Payment\ProfitSharing\Client $profit_sharing
 */
class Application extends ServiceContainer
{
    protected $providers = [
//        Base\ServiceProvider::class,
        ProfitSharing\ServiceProvider::class,
    ];

//    protected $defaultConfig = [
//        'http' => [
//            'base_uri' => 'https://api.mch.weixin.qq.com/',
//        ],
//    ];

    /**
     * 调用一个对象上未定义的方法时被触发
     */
    public function __call($name, $arguments)
    {
        var_dump($name);
//        var_dump($arguments);
        return call_user_func_array([$this['base'], $name], $arguments);
    }
}
