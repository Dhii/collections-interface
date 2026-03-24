<?php

declare(strict_types=1);

namespace Dhii\Collection;

use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

/**
 * A container that can have mappings added and removed.
 *
 * @template K of string
 * @template V of mixed
 * @template-extends ContainerInterface<K, V>
 *
 * @psalm-suppress UnusedClass
 */
interface MutableContainerInterface extends ContainerInterface
{
    /**
     * Maps the given value to the specified key.
     *
     * @since [*next-version*]
     *
     * @param K $key The key to map the value to.
     * @param V $value The value to map to the key.
     *
     * @throws ContainerExceptionInterface If problem mapping.
     */
    public function set(string $key, mixed $value): void;

    /**
     * Unmaps the value from the specified key.
     *
     * @since [*next-version*]
     *
     * @param K $key The key to unmap the value from.
     *
     * @throws NotFoundExceptionInterface  If key not found.
     * @throws ContainerExceptionInterface If problem unmapping.
     */
    public function unset(string $key): void;
}
