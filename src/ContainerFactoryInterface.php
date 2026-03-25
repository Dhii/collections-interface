<?php

declare(strict_types=1);

namespace Dhii\Collection;

use Exception;

/**
 * Creates containers based on data maps.
 */
interface ContainerFactoryInterface
{
    /**
     * Creates a container based on data.
     *
     * @template K of string
     * @template V of mixed
     *
     * @param array<K, V> $data The data for the container.
     *
     * @return ContainerInterface<K, V> The new container.
     *
     * @throws Exception If problem creating.
     *
     * @psalm-suppress PossiblyUnusedMethod
     */
    public function createContainerFromArray(array $data): ContainerInterface;
}
