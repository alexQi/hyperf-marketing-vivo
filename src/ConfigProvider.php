<?php

declare(strict_types=1);
/**
 * hyperf 组件加载配置
 *
 * @link     http://www.swoole.red
 * @contact  1712715552@qq.com
 */

namespace HyperfMarketing\Vivo;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                // 将 Service 映射到 工厂，确保框架注入正确实例
                Service::class => Factory::class,
            ],
            'annotations'  => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'publish'      => [
                [
                    'id'          => 'config',
                    'description' => 'The config for marketing vivo component.',
                    'source'      => __DIR__ . '/../publish/vivo.php',
                    'destination' => BASE_PATH . '/config/autoload/vivo.php',
                ],
            ],
        ];
    }
}
