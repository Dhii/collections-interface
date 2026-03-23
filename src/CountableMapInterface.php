<?php

declare(strict_types=1);

namespace Dhii\Collection;

/**
 * A countable map.
 *
 * @since 0.2
 *
 * @template TKey of string
 * @template-covariant TValue of mixed
 * @template-extends CountableListInterface<TKey, TValue>
 * @template-extends MapInterface<TKey, TValue>
 *
 * @psalm-suppress UnusedClass
 */
interface CountableMapInterface extends
    /* @since 0.2 */
    CountableListInterface,
    /* @since 0.2 */
    MapInterface
{
}
