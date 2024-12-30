<?php

namespace HyperfMarketing\Vivo\Promotion;

use HyperfMarketing\Vivo\Caller;

/**
 * Campaign
 *
 * @author  alex
 * @package HyperfMarketing\Vivo\Promotion\Campaign
 */
class Campaign extends Caller
{

    /**
     * 查询广告计划列表
     * @document https://open-ad.vivo.com.cn/doc/index?id=254
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
     * 批量启停计划
     * @document https://open-ad.vivo.com.cn/doc/index?id=255
     *
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

    /**
     * 修改计划名称
     * @document https://open-ad.vivo.com.cn/doc/index?id=252
     *
     * @param array $params
     *
     * @return \AlexQiu\Sdkit\Support\Collection|array|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \AlexQiu\Sdkit\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function editName(array $params)
    {
        return $this->SendPost("/openapi/v1/ad/campaign/editName", $params);
    }
}