<?php

namespace Ing200086\Reto;

use Ing200086\Envase\EntityContainer;
use Ing200086\Envase\Interfaces\EntityContainerInterface;
use Ing200086\Reto\Interfaces\SealedVertexCollectionInterface;
use Ing200086\Reto\Interfaces\VertexInterface;

class SealedCollection implements SealedVertexCollectionInterface {
    /**
     * @var EntityContainerInterface
     */
    protected $container;

    public function __construct()
    {
        $this->container = EntityContainer::Create();
    }

    public static function CreateNew() : SealedVertexCollectionInterface
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