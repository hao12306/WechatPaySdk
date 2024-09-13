<?php

namespace WechatPaySdk\Payment\Kernel;

use WechatPaySdk\Payment\Application;

/**
 * 核心-基类
 */
class BaseClient
{
    protected $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
//        $this->setHttpClient($this->app['http_client']);
    }

    protected function request(string $endpoint, array $params = [], $method = 'post', array $options = [], $returnResponse = false)
    {
        var_dump($endpoint);
        return null;
    }
}
