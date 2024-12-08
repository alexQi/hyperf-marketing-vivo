<?php

namespace HyperfMarketing\Vivo\Services;

use HyperfMarketing\Vivo\Caller;
use HyperfMarketing\Vivo\DataInsight\Statement;
use HyperfMarketing\Vivo\Exception\InvalidArgumentException;

/**
 * DataInsight
 *
 * @property Statement $statement
 * @author  alex
 * @package HyperfMarketing\Vivo\Services\DataInsight
 */
class DataInsight extends Caller
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
        if ($this->app->getContainer()->has("dataInsight.{$property}")) {
            return $this->app->getContainer()->get("dataInsight.{$property}");
        }
        throw new InvalidArgumentException(sprintf('No dataInsight service named "%s".', $property));
    }
}










