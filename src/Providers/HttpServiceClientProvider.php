<?php

namespace HyperfMarketing\Vivo\Providers;

use AlexQiu\Sdkit\ServiceContainer;
use Hyperf\Guzzle\ClientFactory;

/**
 * HttpServiceClientProvider
 *
 * @author  alex
 * @package HyperfMarketing\Vivo\Provider\HttpServiceClientProvider
 */
class HttpServiceClientProvider
{
    /**
     * @param ServiceContainer $service
     *
     * @return void
     */
    public function register(ServiceContainer $service): void
    {
        $service->getContainer()->set("http_client", function ($container) use ($service) {
            return $container->get(ClientFactory::class)->create(
                $container->get("config")->get("http") ?? []
            );
        });
    }
}