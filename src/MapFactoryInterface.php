<?php

declare(strict_types=1);

namespace Dhii\Collection;

use Exception;

/**
 * A factory that can create maps.
 *
 * @since 0.2
 */
interface MapFactoryInterface extends ContainerFactoryInterface
{
    /**
     * Creates a map based on data in an array.
     *
     * @template K of string
     * @template V of mixed
     *
     * @param array<K, V> $data The data for the container.
     *
     * @return MapInterface<K, V> The new container.
     *
     * @throws Exception If problem creating.
     */
    #[\Override]
    public function createContainerFromArray(array $data): MapInterface;
}
