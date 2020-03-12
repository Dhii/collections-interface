<?php
declare(strict_types=1);

namespace Dhii\Collection;

use Psr\Container\ContainerInterface as BaseContainerInterface;

/**
 * Creates writable maps.
 */
interface WritableMapFactoryInterface extends MapFactoryInterface
{
    /**
     * @inheritDoc
     *
     * @return WritableMapInterface The new map.
     */
    public function createContainerFromArray(array $data): BaseContainerInterface;
}