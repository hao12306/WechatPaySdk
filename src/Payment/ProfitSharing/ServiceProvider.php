<?php

namespace WechatPaySdk\Payment\ProfitSharing;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * 容器
 */
class ServiceProvider implements ServiceProviderInterface
{
    /**
     * 向容器中添加一个名为 profit_sharing 的服务。这个服务是一个闭包函数，它返回一个新的 Client 实例，并且将容器 $app 作为一个参数传递给 Client 的构造函数
     */
    public function register(Container $app)
    {
        $app['profit_sharing'] = function ($app) {
            return new Client($app);
        };
    }
}
