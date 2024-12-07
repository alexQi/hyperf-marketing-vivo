<?php

namespace HyperfMarketing\Vivo\Services;

use HyperfMarketing\Vivo\Caller;
use HyperfMarketing\Vivo\Exception\InvalidArgumentException;
use HyperfMarketing\Vivo\Oauth\Auth;
use HyperfMarketing\Vivo\Oauth\Token;

/**
 * Oauth
 *
 * @property  Auth $auth
 * @property Token $token
 * @author  alex
 * @package HyperfMarketing\Vivo\Services\Oauth
 */
class Oauth extends Caller
{
    /**
     * @param $property
     *
     * @return mixed
     * @throws InvalidArgumentException
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function __get($property)
    {
        if ($this->app->getContainer()->has("oauth.{$property}")) {
            return $this->app->getContainer()->get("oauth.{$property}");
        }
        throw new InvalidArgumentException(sprintf('No oauth service named "%s".', $property));
    }
}










