<?php

namespace HyperfMarketing\Vivo\Account;

use HyperfMarketing\Vivo\Caller;

/**
 * Advertisement
 *
 * @author  alex
 * @package App\Librarys\Vivo\Services\Advertisement
 */
class Advertiser extends Caller
{
    /**
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