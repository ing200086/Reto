<?php

namespace Ing200086\Reto\Repository;

use Ing200086\Envase\EntityContainer;
use Ing200086\Envase\Interfaces\EntityContainerInterface;
use Ing200086\Reto\Interfaces\VertexInterface;
use Ing200086\Reto\Interfaces\VertexRepositoryInterface;

/**
 * Class VertexCollection
 *
 * @package Ing200086\Reto
 */
class VertexRepository implements VertexRepositoryInterface {
    protected $container;

    protected function __construct(EntityContainerInterface $container)
    {
        $this->container = $container;
    }

    public static function Create(EntityContainerInterface $container = null) : VertexRepositoryInterface
    {
        $container = ($container) ?? EntityContainer::Create();
        return new static($container);
    }

    /**
     * @param string $id
     * @return VertexInterface
     * @throws \Ing200086\Envase\Exception\NotFoundException
     */
    public function find(string $id) : VertexInterface
    {
        return $this->container->get($id);
    }

    public function has(string $id) : bool
    {
        return $this->container->has($id);
    }

    public function count() : int
    {
        return $this->container->count();
    }

    public function remove(string $id) : void
    {
        $this->container->remove($id);
    }

    public function add(VertexInterface $vertex) : void
    {
        $this->container->add($vertex);
    }

}