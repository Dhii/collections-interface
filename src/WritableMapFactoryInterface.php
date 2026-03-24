<?php

declare(strict_types=1);

namespace Dhii\Collection;

/**
 * Creates writable maps.
 *
 * @psalm-suppress UnusedClass
 */
interface WritableMapFactoryInterface extends WritableContainerFactoryInterface, MapFactoryInterface
{
    /**
     * @inheritDoc
     *
     * @template K of string
     * @template V of mixed
     *
     * @param array<K, V> $data The data for the container.
     *
     * @return WritableMapInterface<K, V> The new container.
     *
     * @psalm-suppress MoreSpecificImplementedParamType PSR-11 does not declare generics, but should
     */
    #[\Override]
    public function createContainerFromArray(array $data): WritableMapInterface;
}
