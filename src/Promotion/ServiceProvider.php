<?php

namespace HyperfMarketing\Vivo\Promotion;

use AlexQiu\Sdkit\ServiceContainer;

/**
 * ServiceProvider
 *
 * @author  alex
 * @package HyperfMarketing\Vivo\Promotion\ServiceProvider
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
        $service->getContainer()->set("promotion.campaign", function () use ($service) {
            return new Campaign($service);
        });
        $service->getContainer()->set("promotion.group", function () use ($service) {
            return new Group($service);
        });
        $service->getContainer()->set("promotion.advertisement", function () use ($service) {
            return new Advertisement($service);
        });
        $service->getContainer()->set("promotion.creative", function () use ($service) {
            return new Creative($service);
        });
    }
}