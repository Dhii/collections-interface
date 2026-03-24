<?php

declare(strict_types=1);

namespace Dhii\Collection;

/**
 * A map that can have a value set for a key.
 *
 * @since [*next-version*]
 *
 * @template TKey of string
 * @template TValue of mixed
 * @template-extends MapInterface<TKey, TValue>
 * @template-extends WritableContainerInterface<TKey, TValue>
 */
interface WritableMapInterface extends MapInterface, WritableContainerInterface
{
}
