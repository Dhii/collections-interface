<?php

declare(strict_types=1);

namespace Dhii\Collection;

use Traversable;

/**
 * A traversable container.
 *
 * @since 0.2
 *
 * @template TKey of string
 * @template-covariant TValue of mixed
 * @template-extends Traversable<TKey, TValue>
 */
interface MapInterface extends
    /* @since 0.2 */
    Traversable,
    /* @since 0.2 */
    ContainerInterface
{
}
