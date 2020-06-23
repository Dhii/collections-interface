<?php
declare(strict_types=1);

namespace Dhii\Collection;

use Exception;
use Psr\Container\ContainerInterface;

/**
 * Creates containers based on data maps.
 */
interface ContainerFactoryInterface
{
    /**
     * Creates a container based on data.
     *
     * @param array $data The data for the container.
     *
     * @return ContainerInterface The new container.
     *
     * @throws Exception If problem creating.
     */
    public function createContainerFromArray(array $data): ContainerInterface;
}
