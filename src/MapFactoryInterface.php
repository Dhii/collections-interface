<?php

namespace Dhii\Collection;

use Dhii\Data\Container\ContainerFactoryInterface;

/**
 * A factory that can create maps.
 *
 * @since 0.2
 */
interface MapFactoryInterface extends ContainerFactoryInterface
{
    /**
     * {@inheritdoc}
     *
     * @return MapInterface The new map.
     */
    public function make($config = null);
}
