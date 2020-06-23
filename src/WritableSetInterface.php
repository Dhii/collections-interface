<?php
declare(strict_types=1);

namespace Dhii\Collection;

use Exception;

/**
 * A set that can have items added.
 */
interface WritableSetInterface extends SetInterface
{
    /**
     * Creates a new instance with the given items only.
     *
     * @param array|mixed[] $items A list of items for the set.
     *
     * @return static A new instance of this class with only the given items.
     *
     * @throws Exception If problem creating.
     */
    public function withItems(array $items);

    /**
     * Creates a new instance with the given items added to existing ones.
     *
     * @param array|mixed[] $items A list of items to add.
     *
     * @return static A new instance of this class with the given items added to existing ones.
     *
     * @throws Exception If problem creating.
     */
    public function withAddedItems(array $items);

    /**
     * Creates a new instance with the given items not present.
     *
     * @param array|mixed[] $items A list of items to exclude.
     *
     * @return static An instance of this class without the given items.
     */
    public function withoutItems(array $items);
}
