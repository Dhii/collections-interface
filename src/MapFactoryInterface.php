<?php
declare(strict_types=1);

namespace Dhii\Collection;

use Psr\Container\ContainerInterface;

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
     * @param array $data The data to base the map on.
     *
     * @return MapInterface The new map.
     */
    public function createFromArray(array $data): ContainerInterface;
}
