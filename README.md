# 微信支付分账(TP插件)
thinkphp6框架下vendor插件,其它tp版本未做测试,请谨慎使用

------
## 方法一、vendor库 命令安装步骤
#### 安装命令
1. 切换packagist镜像源,否则需翻墙
```
composer config -g repo.packagist composer https://packagist.org
```
2. 安装插件
```
//composer require miaomiao/wechat-pay-sdk:dev-master --ignore-platform-req=ext-swoole
composer require miaomiao/wechat-pay-sdk:v1.0.0 --ignore-platform-req=ext-swoole

//卸载
composer remove miaomiao/wechat-pay-sdk:v1.0.0 --ignore-platform-req=ext-swoole

composer.json手动添加自动加载
"autoload": {
    "psr-4": {
        "WechatPaySdk\\": "vendor/miaomiao/wechat-pay-sdk/src"
    }
},

更新自动加载文件
composer dump-autoload

```

------
## 方法二、extend库 手动安装步骤
#### 复制文件
把src下文件复制到TP6 extend文件夹下,重命名为WechatPaySdk,因框架自动加载可直接使用

------
## 使用示例
```
$config = [
    'app_id' => '***',
    "secret" => "***",
];
$payment = Factory::payment($config);
$receiver = [
    "name" => "xxx",
];
$payment->profit_sharing->addReceiver($receiver);
```
#### 联系作者
1039803717@qq.com
#### 其它信息
```
创建标签
git tag v1.0.0
推送单个标签
git push origin v1.0.0
推送所有标签
git push origin --tags

创建项目
composer init
```