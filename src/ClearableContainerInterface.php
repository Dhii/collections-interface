<?php

declare(strict_types=1);

namespace Dhii\Collection;

use Psr\Container\ContainerExceptionInterface;
use Psr\Container\ContainerInterface as PsrContainerInterface;

interface ClearableContainerInterface extends PsrContainerInterface
{
    /**
     * Removes all members from this container.
     *
     * @throws ContainerExceptionInterface If problem removing.
     */
    public function clear(): void;
}
