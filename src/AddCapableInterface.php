<?php

namespace Dhii\Collection;

use RuntimeException;

/**
 * Something that can have an item added.
 *
 * @since 0.2
 */
interface AddCapableInterface
{
    /**
     * Adds an item to this instance.
     *
     * @since 0.2
     *
     * @param mixed $item The item to add.
     *
     * @return void
     *
     * @throws RuntimeException If the item could not be added.
     */
    public function add($item);
}
