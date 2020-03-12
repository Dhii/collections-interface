<?php
declare(strict_types=1);

namespace Dhii\Collection;

use Exception;

/**
 * A map that can have a value set for a key.
 *
 * @since [*next-version*]
 */
interface WritableMapInterface extends MapInterface
{
    /**
     * Creates a new instance with the specified mappings.
     *
     * @since [*next-version*]
     *
     * @param array $mappings A map of keys to values.
     *
     * @return static A new instance of this class with only the specified key-value mappings.
     *
     * @throws Exception If problem creating.
     */
    public function withMappings(array $mappings);

    /**
     * Creates a new instance with the specified mappings added to existing ones.
     *
     * @since [*next-version*]
     *
     * @param array $mappings A map of keys to values.
     *
     * @return static A new instance of this class with the specified key-value mappings added to existing ones.
     *
     * @throws Exception If problem creating.
     */
    public function withAddedMappings(array $mappings);

    /**
     * Creates a new instance with the specified keys not present.
     *
     * @since [*next-version*]
     *
     * @param array $keys The keys to exclude.
     *
     * @return static A new instance of this class which does not contain the specified keys.
     *
     * @throws Exception If problem instantiating.
     */
    public function withoutKeys(array $keys);
}
