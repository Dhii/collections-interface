<?php

declare(strict_types=1);

namespace Dhii\Collection;

/**
 * Creates writable sets.
 *
 * @psalm-suppress UnusedClass
 */
interface WritableSetFactoryInterface extends SetFactoryInterface
{
    /**
     * @inheritDoc
     *
     * @return WritableSetInterface The new writable set.
     */
    #[\Override]
    public function createSetFromList(array $list): SetInterface;
}
