<?php

namespace HyperfMarketing\Vivo\Promotion;

use HyperfMarketing\Vivo\Caller;

/**
 * Group
 *
 * @author  alex
 * @package HyperfMarketing\Vivo\Services\Promotion\Group
 */
class Group extends Caller
{
    /**
     * 获取广告计划信息
     *
     * @param $params
     *
     * @return \AlexQiu\Sdkit\Support\Collection|array|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \AlexQiu\Sdkit\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getList($params = [])
    {
        return $this->SendPost("/openapi/v1/ad/group/pageInfo", $params);
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
        return $this->SendPost("/openapi/v1/ad/group/pause/toggle", $params);
    }

    /**
     * @param array $params
     *
     * @return \AlexQiu\Sdkit\Support\Collection|array|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \AlexQiu\Sdkit\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function editPrice(array $params)
    {
        return $this->SendPost("/openapi/v1/ad/group/batchEditPrice", $params);
    }
}