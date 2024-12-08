<?php

namespace HyperfMarketing\Vivo\DataInsight;

use AlexQiu\Sdkit\ServiceContainer;

/**
 * ServiceProvider
 *
 * @author  alex
 * @package HyperfMarketing\Vivo\DataInsight\ServiceProvider
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
        $service->getContainer()->set("dataInsight.statement", function () use ($service) {
            return new Statement($service);
        });
    }
}