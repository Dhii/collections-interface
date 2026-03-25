<?php

declare(strict_types=1);

namespace Dhii\Collection;

/**
 * A map that can create a writable container.
 */
interface WritableContainerFactoryInterface extends ContainerFactoryInterface
{
    /**
     * @inheritDoc
     *
     * @template K of string
     * @template V of mixed
     *
     * @param array<K, V> $data The data for the container.
     *
     * @return WritableContainerInterface<K, V> The new container.
     *
     * @psalm-suppress MoreSpecificImplementedParamType PSR-11 does not declare generics, but should
     */
    #[\Override]
    public function createContainerFromArray(array $data): ContainerInterface;
}
