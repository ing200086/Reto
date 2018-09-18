<?php

namespace Ing200086\Reto\Vertices;

use Ing200086\Envase\EntityContainer;
use Ing200086\Envase\Interfaces\EntityContainerInterface;
use Ing200086\Reto\Interfaces\SealedVerticesInterface;
use Ing200086\Reto\Interfaces\VertexInterface;

class SealedVertices implements SealedVerticesInterface {
    /**
     * @var EntityContainerInterface
     */
    protected $container;

    public function __construct(EntityContainerInterface $container = null)
    {
        $this->container = ($container) ?? EntityContainer::Create();
    }

    public static function CreateNew() : SealedVerticesInterface
    {
        return new static();
    }

    public function find(string $id) : VertexInterface
    {
        return $this->container->get($id);
    }

    public function has(string $id) : bool
    {
        return $this->container->has($id);
    }

    /**
     * @return int
     */
    public function count() : int
    {
        return $this->container->count();
    }
}