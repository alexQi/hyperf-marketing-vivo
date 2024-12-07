<?php

namespace HyperfMarketing\Vivo\Promotion;

use HyperfMarketing\Vivo\Caller;

/**
 * Campaign
 *
 * @author  alex
 * @package App\Librarys\Vivo\Services\Campaign
 */
class Creative extends Caller
{
    /**
     * 查询广告创意
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