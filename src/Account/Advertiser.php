<?php

namespace HyperfMarketing\Vivo\Account;

use HyperfMarketing\Vivo\Caller;

/**
 * Advertiser
 *
 * @author  alex
 * @package HyperfMarketing\Vivo\Account\Advertiser
 */
class Advertiser extends Caller
{
    /**
     * @document https://open-ad.vivo.com.cn/doc/index?id=268
     * @param $params
     *
     * @return \AlexQiu\Sdkit\Support\Collection|array|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \AlexQiu\Sdkit\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getList($params = [])
    {
        return $this->SendPost("/openapi/v1/account/advertiser/query", $params);
    }
}