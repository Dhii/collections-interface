<?php

namespace Dhii\Collection;

use Psr\Container\ContainerInterface;
use Traversable;

/**
 * A traversable container.
 *
 * @since 0.2
 */
interface MapInterface extends
    /* @since 0.2 */
    Traversable,
    /* @since 0.2 */
    ContainerInterface
{
}
