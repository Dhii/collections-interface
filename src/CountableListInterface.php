<?php

namespace Dhii\Collection;

use Traversable;
use Countable;

/**
 * A list that can be counted.
 *
 * @since 0.2
 */
interface CountableListInterface extends
    /* @since 0.2 */
    Traversable,
    /* @since 0.2 */
    Countable
{
}
