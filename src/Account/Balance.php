<?php

namespace HyperfMarketing\Vivo\Account;

use HyperfMarketing\Vivo\Caller;

/**
 * Balance
 *
 * @author  alex
 * @package HyperfMarketing\Vivo\Account\Balance
 */
class Balance extends Caller
{
    /**
     * @return \AlexQiu\Sdkit\Support\Collection|array|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \AlexQiu\Sdkit\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getInfo()
    {
        return $this->SendPost("/openapi/v1/account/balance/query");
    }
}