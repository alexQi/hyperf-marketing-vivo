<?php

namespace HyperfMarketing\Vivo\Oauth;

use AlexQiu\Sdkit\ServiceContainer;

/**
 * ServiceProvider
 *
 * @author  alex
 * @package HyperfMarketing\Vivo\Oauth\ServiceProvider
 */
class ServiceProvider
{
    /**
     * @param ServiceContainer $service
     *
     * @return void
     */
    public function register(ServiceContainer $service): void
    {
        $service->getContainer()->set("oauth.token", function () use ($service) {
            return new Token($service);
        });
        $service->getContainer()->set("oauth.auth", function () use ($service) {
            return new Auth($service);
        });
    }
}