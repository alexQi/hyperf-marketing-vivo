<?php

namespace HyperfMarketing\Vivo;

use AlexQiu\Sdkit\BaseClient as KitBaseClient;
use Hyperf\Codec\Json;
use HyperfMarketing\Vivo\Exception\ResultErrorException;
use Psr\Http\Message\ResponseInterface;

/**
 * Caller
 *
 * @author  alex
 * @package HyperfMarketing\Vivo\Caller
 */
class Caller extends KitBaseClient
{
    /**
     * @param $uri
     * @param $request
     *
     * @return \AlexQiu\Sdkit\Support\Collection|array|object|ResponseInterface|string
     * @throws \AlexQiu\Sdkit\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function SendPost($uri, $request = [], $with_auth = true)
    {
        // 生成query系统参数
        $query_params = $this->buildAuthParams([], $with_auth);
        // 发起请求
        return $this->fetch($uri, "POST", [
            "headers" => [
                "Accept"       => "application/json",
                "Content-Type" => "application/json",
            ],
            "query"   => $query_params,
            "body"    => Json::encode($request, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE),
        ]);
    }

    /**
     * @param $uri
     * @param $query
     *
     * @return \AlexQiu\Sdkit\Support\Collection|array|object|ResponseInterface|string
     * @throws \AlexQiu\Sdkit\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function Send($uri, $request = [], $with_auth = true)
    {
        $params = $this->buildAuthParams($request, $with_auth);
        // 发起请求
        return $this->fetch($uri, "GET", [
            "headers" => [
                "Accept"       => "application/json",
                "Content-Type" => "application/json",
            ],
            "query"   => $params,
        ]);
    }

    /**
     * @param ResponseInterface $response
     *
     * @return mixed
     * @throws ResultErrorException
     * @throws \AlexQiu\Sdkit\Exceptions\InvalidConfigException
     */
    protected function unwrapResponse(ResponseInterface $response): mixed
    {
        $res = parent::unwrapResponse($response);

        if (!isset($res['code']) || $res["code"] !== 0) {
            throw new ResultErrorException($res["message"], 80000);
        }
        if (isset($res["data"])) {
            return $res["data"];
        }
        return true;
    }

    /**
     * @param array $query
     *
     * @return array
     */
    protected function buildAuthParams(array $query = [], $with_auth = true): array
    {
        if (!$with_auth) {
            return $query;
        }
        $auth_params = array_merge($query, [
            "advertiser_id" => $this->app->config->get("advertiser_id", ""),
            "access_token"  => $this->app->config->get("access_token"),
            "timestamp"     => round(microtime(true) * 1000),
            "nonce"         => uniqid(),
        ]);
        $auth_params = array_filter($auth_params, function ($value) {
            return $value !== null && $value !== '';
        });
        return $auth_params;
    }
}