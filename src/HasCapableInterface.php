<?php
declare(strict_types=1);

namespace Dhii\Collection;

/**
 * Something that can determine the existence of a key.
 */
interface HasCapableInterface
{
    /**
     * Determines whether this instance has the specified key.
     *
     * @param string $key The key to check for.
     *
     * @return bool True if the key exists; false otherwise.
     */
    public function has($key);
}