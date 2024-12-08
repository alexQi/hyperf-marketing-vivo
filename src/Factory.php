<?php

declare(strict_types=1);

namespace HyperfMarketing\Vivo;

use Hyperf\Contract\ConfigInterface;
use Psr\Container\ContainerInterface;

/**
 * vivo客户端工厂类。
 */
class Factory
{
    /**
     * Create the Service instance.
     *
     * @param ContainerInterface $container
     *
     * @return Service
     */
    public function __invoke(ContainerInterface $container): Service
    {
        /** @var ConfigInterface $config */
        $config = $container->get(ConfigInterface::class);

        // 获取vivo相关配置
        $config = $config->get('vivo', []);

        return new Service($config);
    }
}