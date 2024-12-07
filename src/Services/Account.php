<?php

namespace HyperfMarketing\Vivo\Services;

use HyperfMarketing\Vivo\Account\Advertiser;
use HyperfMarketing\Vivo\Account\Balance;
use HyperfMarketing\Vivo\Caller;
use HyperfMarketing\Vivo\Exception\InvalidArgumentException;

/**
 * Account
 *
 * @property  Advertiser $advertiser
 * @property Balance     $balance
 * @author  alex
 * @package HyperfMarketing\Vivo\Services\Account
 */
class Account extends Caller
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
        if ($this->app->getContainer()->has("account.{$property}")) {
            return $this->app->getContainer()->get("account.{$property}");
        }
        throw new InvalidArgumentException(sprintf('No oauth service named "%s".', $property));
    }
}










