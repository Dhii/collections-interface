<?php
declare(strict_types=1);

namespace Dhii\Collection;

use RuntimeException;

/**
 * Something that can set a value for a key.
 *
 * @since 0.2
 */
interface SetCapableInterface
{
    /**
     * Sets a value for a key.
     *
     * @since 0.2
     *
     * @param string $key   The key to set the value for.
     * @param mixed  $value The value to set.
     *
     * @return void
     *
     * @throws RuntimeException If the value cannot be set.
     */
    public function set(string $key, $value);
}
