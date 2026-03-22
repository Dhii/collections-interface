<?php

declare(strict_types=1);

namespace Dhii\Collection;

use Traversable;

/**
 * A list that can be checked for a key.
 *
 * @since 0.2
 *
 * @template TValue of mixed
 * @template-extends Traversable<array-key, TValue>
 * @template-extends HasItemCapableInterface<TValue>
 */
interface SetInterface extends
    /* @since 0.2 */
    Traversable,
    /* @since 0.2 */
    HasItemCapableInterface
{
}
