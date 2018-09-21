<?php

namespace Ing200086\Reto\Repository;

use Ing200086\Envase\EntityContainer;
use Ing200086\Envase\Interfaces\EntityContainerInterface;
use Ing200086\Reto\Interfaces\EdgeInterface;
use Ing200086\Reto\Interfaces\EdgeRepositoryInterface;

class EdgeRepository implements EdgeRepositoryInterface {
    protected $container;

    protected function __construct(EntityContainerInterface $container)
    {
        $this->container = $container;
    }

    public static function Create(EntityContainerInterface $container = null) : EdgeRepositoryInterface
    {
        $container = ($container) ?? EntityContainer::Create();
        return new static($container);
    }

    public function add(EdgeInterface $edge) : void
    {
        $this->container->add($edge);
    }

    /**
     * @return int
     */
    public function count() : int
    {
        return $this->container->count();
    }
}