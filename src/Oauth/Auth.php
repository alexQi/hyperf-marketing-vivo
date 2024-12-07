<?php

namespace HyperfMarketing\Vivo\Oauth;

use HyperfMarketing\Vivo\Caller;

/**
 * Token
 *
 * @author  alex
 * @package HyperfMarketing\Vivo\Services\Token
 */
class Auth extends Caller
{
    /**
     * @param $account
     *
     * @return string
     */
    public function getOauthLink($account)
    {
        return sprintf(
            "%s/OAuth?clientId=%s&state=%s&redirectUri=%s",
            $this->app->config->get("oauth_url"),
            $this->app->config->get("client_id"),
            "vivo@" . $account,
            urlencode($this->app->config->get("notify_url")),
        );
    }
}










