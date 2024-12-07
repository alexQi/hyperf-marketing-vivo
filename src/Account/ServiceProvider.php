<?php

namespace HyperfMarketing\Vivo\Account;

use AlexQiu\Sdkit\ServiceContainer;

/**
 * ServiceProvider
 *
 * @author  alex
 * @package HyperfMarketing\Vivo\Account\ServiceProvider
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
        $service->getContainer()->set("account.advertiser", function () use ($service) {
            return new Advertiser($service);
        });
        $service->getContainer()->set("account.balance", function () use ($service) {
            return new Balance($service);
        });
    }
}