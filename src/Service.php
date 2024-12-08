<?php

declare(strict_types=1);
/**
 * This file is part of msmm.
 */

namespace HyperfMarketing\Vivo;

use AlexQiu\Sdkit\ServiceContainer;
use HyperfMarketing\Vivo\Providers\CallerProvider;
use HyperfMarketing\Vivo\Providers\HttpServiceClientProvider;
use HyperfMarketing\Vivo\Services\Account;
use HyperfMarketing\Vivo\Services\DataInsight;
use HyperfMarketing\Vivo\Services\Oauth;
use HyperfMarketing\Vivo\Services\Promotion;

/**
 * Service
 *
 *
 * @property Account     $account
 * @property Oauth       $oauth
 * @property Promotion   $promotion
 * @property DataInsight $dataInsight
 * @author  alex
 * @package HyperfMarketing\Vivo\Service
 */
class Service extends ServiceContainer
{
    protected $providers = [
        HttpServiceClientProvider::class,
        CallerProvider::class
    ];

    protected $defaultConfig = [
        "oauth_url" => "https://open-ad.vivo.com.cn", // 默认授权地址
        "http"      => [
            "base_uri" => "https://marketing-api.vivo.com.cn"
        ]
    ];

    /**
     * Constructor.
     *
     * @param array $config
     */
    public function __construct(array $config)
    {
        parent::__construct($config);
    }
}
