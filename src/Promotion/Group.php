<?php

namespace HyperfMarketing\Vivo\Promotion;

use HyperfMarketing\Vivo\Caller;

/**
 * Group
 *
 * @author  alex
 * @package HyperfMarketing\Vivo\Promotion\Group
 */
class Group extends Caller
{
    /**
     * 查询广告组列表
     * @document https://open-ad.vivo.com.cn/doc/index?id=188
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
     * 批量修改广告组状态
     * @document https://open-ad.vivo.com.cn/doc/index?id=194
     *
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
     * 批量修改出价
     * @document https://open-ad.vivo.com.cn/doc/index?id=193
     *
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

    /**
     * 修改计划名称
     * @document https://open-ad.vivo.com.cn/doc/index?id=195
     *
     * @param array $params
     *
     * @return \AlexQiu\Sdkit\Support\Collection|array|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \AlexQiu\Sdkit\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function editName(array $params)
    {
        return $this->SendPost("/openapi/v1/ad/group/editName", $params);
    }
}