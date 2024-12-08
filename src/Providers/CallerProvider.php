<?php

namespace HyperfMarketing\Vivo\Providers;

use AlexQiu\Sdkit\ServiceContainer;
use HyperfMarketing\Vivo\Account\ServiceProvider as AccountProvider;
use HyperfMarketing\Vivo\Oauth\ServiceProvider as OauthProvider;
use HyperfMarketing\Vivo\Promotion\ServiceProvider as PromotionProvider;
use HyperfMarketing\Vivo\DataInsight\ServiceProvider as DataInsightProvider;
use HyperfMarketing\Vivo\Services\Account;
use HyperfMarketing\Vivo\Services\DataInsight;
use HyperfMarketing\Vivo\Services\Oauth;
use HyperfMarketing\Vivo\Services\Promotion;

/**
 * Client
 *
 * @author  alex
 * @package HyperfMarketing\Vivo\Client
 */
class CallerProvider
{
    /**
     * @param ServiceContainer $service
     *
     * @return void
     */
    public function register(ServiceContainer $service): void
    {
        $service->getContainer()->set("account", function () use ($service) {
            $service->registerProviders(
                [
                    AccountProvider::class
                ]
            );
            return new Account($service);
        });
        $service->getContainer()->set("oauth", function () use ($service) {
            $service->registerProviders(
                [
                    OauthProvider::class
                ]
            );
            return new Oauth($service);
        });
        $service->getContainer()->set("promotion", function () use ($service) {
            $service->registerProviders(
                [
                    PromotionProvider::class
                ]
            );
            return new Promotion($service);
        });
        $service->getContainer()->set("dataInsight", function () use ($service) {
            $service->registerProviders(
                [
                    DataInsightProvider::class
                ]
            );
            return new DataInsight($service);
        });
    }
}