<?php

declare(strict_types=1);

namespace Dhii\Collection;

use Psr\Container\ContainerInterface as BaseContainerInterface;

/**
 * Something that can retrieve and determine the existence of a value by key.
 *
 * @template K of string
 * @template-covariant V of mixed
 * @template-extends HasCapableInterface<K>
 */
interface ContainerInterface extends
    HasCapableInterface,
    BaseContainerInterface
{
    /**
     * Finds an entry of the container by its identifier and returns it.
     *
     * @param K $id Identifier of the entry to look for.
     *
     * @return V Entry.
     *
     * @psalm-suppress MoreSpecificImplementedParamType The point is to narrow it.
     */
    #[\Override]
    public function get(string $id): mixed;

    /**
     * @inheritDoc
     *
     * @param K $id Identifier of the entry to look for.
     *
     * @psalm-suppress MoreSpecificImplementedParamType The point is to narrow it.
     */
    #[\Override]
    public function has(string $id): bool;
}
