<?php
declare(strict_types=1);

namespace Dhii\Collection;

/**
 * Creates writable sets.
 */
interface WritableSetFactoryInterface extends SetFactoryInterface
{
    /**
     * @inheritDoc
     *
     * @return WritableSetInterface The new writable set.
     */
    public function createSetFromList(array $list): SetInterface;
}
