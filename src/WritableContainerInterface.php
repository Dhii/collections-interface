<?php

declare(strict_types=1);

namespace Dhii\Collection;

use Exception;

/**
 * A container that can be written to.
 *
 * @template K of string
 * @template V of mixed
 *
 * @template-extends ContainerInterface<K, V>
 */
interface WritableContainerInterface extends ContainerInterface
{
    /**
     * Creates a new instance with the specified mappings.
     *
     * @since [*next-version*]
     *
     * @param array<K, V> $mappings A map of keys to values.
     *
     * @return static A new instance of this class with only the specified key-value mappings.
     *
     * @throws Exception If problem creating.
     *
     * @psalm-suppress PossiblyUnusedMethod
     */
    public function withMappings(array $mappings): WritableContainerInterface;

    /**
     * Creates a new instance with the specified mappings added to existing ones.
     *
     * @since [*next-version*]
     *
     * @param array<K, V> $mappings A map of keys to values.
     *
     * @return static A new instance of this class with the specified key-value mappings added to existing ones.
     *
     * @throws Exception If problem creating.
     *
     * @psalm-suppress PossiblyUnusedMethod
     */
    public function withAddedMappings(array $mappings): WritableContainerInterface;

    /**
     * Creates a new instance with the specified keys not present.
     *
     * @since [*next-version*]
     *
     * @param array<K> $keys The keys to exclude.
     *
     * @return static A new instance of this class which does not contain the specified keys.
     *
     * @throws Exception If problem instantiating.
     *
     * @psalm-suppress PossiblyUnusedMethod
     */
    public function withoutKeys(array $keys): WritableContainerInterface;
}
