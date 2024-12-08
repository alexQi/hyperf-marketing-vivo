<?php

namespace HyperfMarketing\Vivo\Promotion;

use HyperfMarketing\Vivo\Caller;

/**
 * Advertisement
 *
 * @author  alex
 * @package HyperfMarketing\Vivo\Promotion\Advertisement
 */
class Advertisement extends Caller
{

    /**
     * 查询广告列表
     * @document https://open-ad.vivo.com.cn/doc/index?id=198
     *
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
     * 批量修改广告状态
     * @document https://open-ad.vivo.com.cn/doc/index?id=201
     *
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