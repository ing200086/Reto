<?php

namespace Ing200086\Reto\Edge;

use Ing200086\Envase\EntityContainer;
use Ing200086\Reto\Vertex\Collection as VertexCollection;

class Collection implements \Countable {
    protected $container;

    public function __construct()
    {
        $this->container = EntityContainer::Create();
    }

    public static function CreateNew()
    {
        return new static();
    }

    public function create(Base $edge, VertexCollection $vertices)
    {
        if ($edge->isValid($vertices))
        {
            $this->container->add($edge);
        }
    }

    /**
     * @return int
     */
    public function count() : int
    {
        return $this->container->count();
    }
}