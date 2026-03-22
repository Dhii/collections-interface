<?php

declare(strict_types=1);

namespace Dhii\Collection;

use RuntimeException;

/**
 * Something that can check for the existence of an item.
 *
 * @since 0.2
 *
 * @template T of mixed
 */
interface HasItemCapableInterface
{
    /**
     * Checks whether this instance has the given item.
     *
     * @since 0.2
     *
     * @param T $item The item to check for.
     *
     * @return bool True if the item exists; false otherwise.
     *
     * @throws RuntimeException If the existence of the item could not be verified.
     *
     * @psalm-suppress PossiblyUnusedMethod
     */
    public function hasItem($item): bool;
}
