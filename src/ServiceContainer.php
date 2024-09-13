<?php

namespace WechatPaySdk;

use Pimple\Container;

/**
 * 基类-容器
 */
class ServiceContainer extends Container
{
    protected $providers = [];

    public function __construct(array $config = [], array $prepends = [], string $id = null)
    {
//        $this->userConfig = $config;
//
//        parent::__construct($prepends);
        $this->registerProviders($this->getProviders());
//
//        $this->id = $id;
//
//        $this->aggregate();
//
//        $this->events->dispatch(new Events\ApplicationInitialized($this));
    }

    public function getProviders()
    {
        return array_merge([
//            ConfigServiceProvider::class,
//            LogServiceProvider::class,
//            RequestServiceProvider::class,
//            HttpClientServiceProvider::class,
//            ExtensionServiceProvider::class,
//            EventDispatcherServiceProvider::class,
        ], $this->providers);
    }

    /**
     * 尝试获取一个未定义或不可见的属性时被调用。$id 是尝试访问的属性名
     */
    public function __get($id)
    {
        return $this->offsetGet($id);
    }

//    public function __set($id, $value)
//    {
//        $this->offsetSet($id, $value);
//    }

    public function registerProviders(array $providers)
    {
        foreach ($providers as $provider) {
            parent::register(new $provider());
        }
    }
}
