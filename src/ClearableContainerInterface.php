<?php


namespace Dhii\Collection;


use Psr\Container\ContainerExceptionInterface;

interface ClearableContainerInterface extends \Psr\Container\ContainerInterface
{
    /**
     * Removes all members from this container.
     *
     * @throws ContainerExceptionInterface If problem removing.
     */
    public function clear(): void;
}
