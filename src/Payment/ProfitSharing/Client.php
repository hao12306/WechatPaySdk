<?php

namespace WechatPaySdk\Payment\ProfitSharing;

use WechatPaySdk\Payment\Kernel\BaseClient;

/**
 * 服务类
 */
class Client extends BaseClient
{
    //TODO 业务逻辑
    public function addReceiver(array $receiver)
    {
        $params = [];
        return $this->request('pay/profitsharingaddreceiver', $params);
    }
}
