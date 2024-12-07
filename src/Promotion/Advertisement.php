<?php

namespace HyperfMarketing\Vivo\Promotion;

use HyperfMarketing\Vivo\Caller;

/**
 * Advertisement
 *
 * @author  alex
 * @package App\Librarys\Vivo\Services\Advertisement
 */
class Advertisement extends Caller
{

    /**
     * @param array $params
     *
     * @return \AlexQiu\Sdkit\Support\Collection|array|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \AlexQiu\Sdkit\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getList(array $params = [])
    {
        return $this->SendPost("/openapi/v1/ad/advertisement/pageInfo", $params);
    }

    /**
     * @param array $params
     *
     * @return \AlexQiu\Sdkit\Support\Collection|array|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \AlexQiu\Sdkit\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function setStatus(array $params)
    {
        return $this->SendPost("/openapi/v1/ad/advertisement/pause/toggle", $params);
    }
}