<?php

namespace HyperfMarketing\Vivo\DataInsight;

use HyperfMarketing\Vivo\Caller;

/**
 * Statement
 *
 * @author  alex
 * @package HyperfMarketing\Vivo\DataInsight\Statement
 */
class Statement extends Caller
{

    /**
     * 查询广告效果数据
     * @document  https://open-ad.vivo.com.cn/doc/index?id=209
     *
     * @param array $params
     *
     * @return \AlexQiu\Sdkit\Support\Collection|array|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \AlexQiu\Sdkit\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function summaryQuery(array $params = [])
    {
        return $this->SendPost("/openapi/v1/adstatement/summary/query", $params);
    }

}