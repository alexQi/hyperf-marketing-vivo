<?php

namespace HyperfMarketing\Vivo\Promotion;

use HyperfMarketing\Vivo\Caller;

/**
 * Creative
 *
 * @author  alex
 * @package HyperfMarketing\Vivo\Promotion\Creative
 */
class Creative extends Caller
{
    /**
     * 查询广告创意
     * @document https://open-ad.vivo.com.cn/doc/index?id=202
     *
     * @param array $params
     *
     * @return \AlexQiu\Sdkit\Support\Collection|array|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \AlexQiu\Sdkit\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getList(array $params = [])
    {
        return $this->SendPost("/openapi/v1/ad/creative/pageInfoByLastId", $params);
    }

    /**
     * 修改广告创意状态
     * @document https://open-ad.vivo.com.cn/doc/index?id=204
     *
     * @param array $params
     *
     * @return \AlexQiu\Sdkit\Support\Collection|array|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \AlexQiu\Sdkit\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function setStatus(array $params)
    {
        return $this->SendPost("/openapi/v1/ad/creative/pause/toggle", $params);
    }
}