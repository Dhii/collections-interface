<?php
declare(strict_types=1);

namespace Dhii\Collection;

/**
 * A factory that can create sets.
 *
 * @since [*next-version*]
 */
interface SetFactoryInterface
{
    /**
     * Creates a set based on data in a list.
     *
     * @since [*next-version*]
     *
     * @param array<mixed> $list The list to base the set on.
     *
     * @return SetInterface The new set.
     */
    public function createSetFromList(array $list): SetInterface;
}
