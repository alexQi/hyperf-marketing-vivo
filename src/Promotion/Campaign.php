<?php

namespace HyperfMarketing\Vivo\Promotion;

use HyperfMarketing\Vivo\Caller;

/**
 * Campaign
 *
 * @author  alex
 * @package App\Librarys\Vivo\Services\Campaign
 */
class Campaign extends Caller
{

    /**
     * 获取广告计划信息
     *
     * @param array $params
     *
     * @return \AlexQiu\Sdkit\Support\Collection|array|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \AlexQiu\Sdkit\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getList(array $params = [])
    {
        return $this->SendPost("/openapi/v1/ad/campaign/pageInfo", $params);
    }

    /**
     * @param array $query
     * @param array $params
     *
     * @return true
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    /**
     * @param array $params
     *
     * @return \AlexQiu\Sdkit\Support\Collection|array|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \AlexQiu\Sdkit\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function setStatus(array $params)
    {
        return $this->SendPost("/openapi/v1/ad/campaign/pause/toggle", $params);
    }
}