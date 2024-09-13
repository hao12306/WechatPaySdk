<?php

namespace WechatPaySdk;

use WechatPaySdk\utils\StrUtil;

/**
 * 工厂类
 * @method static \WechatPaySdk\Payment\Application            payment(array $config)
 */
class Factory
{
    /**
     * 调用一个未定义的静态方法时自动触发
     */
    public static function __callStatic($name, $arguments)
    {
        return self::make($name, ...$arguments);
    }

    public static function make($name, array $config)
    {
        //转大驼峰
        $namespace = StrUtil::studly($name);
        $application = "\\WechatPaySdk\\{$namespace}\\Application";
        return new $application($config);
    }
}