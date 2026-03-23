<?php

declare(strict_types=1);

namespace Dhii\Collection;

use Traversable;
use Countable;

/**
 * A list that can be counted.
 *
 * @since 0.2
 *
 * @template TKey
 * @template-covariant TValue
 * @template-extends Traversable<TKey, TValue>
 */
interface CountableListInterface extends
    /* @since 0.2 */
    Traversable,
    /* @since 0.2 */
    Countable
{
}
