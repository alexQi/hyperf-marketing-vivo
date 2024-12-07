<?php

namespace HyperfMarketing\Vivo\Oauth;

use HyperfMarketing\Vivo\Caller;

/**
 * Token
 *
 * @author  alex
 * @package HyperfMarketing\Vivo\Services\Token
 */
class Token extends Caller
{
    /**
     * @param $code
     *
     * @return array
     * @throws \AlexQiu\Sdkit\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function buildAccessToken($code)
    {
        $data = $this->Send(
            '/openapi/v1/oauth2/token',
            [
                "client_id"     => $this->app->config->get("client_id"),
                "client_secret" => $this->app->config->get("client_secret"),
                "grant_type"    => "code",
                "code"          => $code,
            ],
            false
        );
        return [
            "access_token"  => $data["access_token"],
            "refresh_token" => $data["refresh_token"],
            "expires_in"    => $data["token_date"],
        ];
    }

    /**
     * @param $refresh_token
     *
     * @return array
     * @throws \AlexQiu\Sdkit\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function refreshAccessToken($refresh_token)
    {
        $data = $this->Send(
            '/openapi/v1/oauth2/refreshToken',
            [
                "client_id"     => $this->app->config->get("client_id"),
                "client_secret" => $this->app->config->get("client_secret"),
                "refresh_token" => $refresh_token,
            ],
            false
        );
        return [
            "access_token"  => $data["access_token"],
            "refresh_token" => $data["refresh_token"],
            "expires_in"    => $data["token_date"],
        ];
    }
}










