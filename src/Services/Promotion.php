<?php

namespace HyperfMarketing\Vivo\Services;

use HyperfMarketing\Vivo\Caller;
use HyperfMarketing\Vivo\Exception\InvalidArgumentException;
use HyperfMarketing\Vivo\Promotion\Advertisement;
use HyperfMarketing\Vivo\Promotion\Campaign;
use HyperfMarketing\Vivo\Promotion\Creative;
use HyperfMarketing\Vivo\Promotion\Group;

/**
 * Promotion
 *
 * @property Campaign      $campaign
 * @property Group         $group
 * @property Advertisement $advertisement
 * @property Creative      $creative
 * @author  alex
 * @package HyperfMarketing\Vivo\Services\Promotion
 */
class Promotion extends Caller
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
        if ($this->app->getContainer()->has("promotion.{$property}")) {
            return $this->app->getContainer()->get("promotion.{$property}");
        }
        throw new InvalidArgumentException(sprintf('No promotion service named "%s".', $property));
    }
}










