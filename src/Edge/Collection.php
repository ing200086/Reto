<?php

namespace Ing200086\Reto\Edge;

use Ing200086\Envase\EntityContainer;
use Ing200086\Reto\Edge\Factory\EdgeFactory;

class Collection implements \Countable {
    protected $container;

    public function __construct()
    {
        $this->container = EntityContainer::Create();
    }

    /**
     * @param array                             $edges
     * @param \Ing200086\Reto\Vertex\Collection $vertices
     * @return Collection
     * @throws \Exception
     */
    public static function FromArray(array $edges, \Ing200086\Reto\Vertex\Collection $vertices)
    {
        $that = new static();

        foreach ( $edges as $edge )
        {
        $that->create(EdgeFactory::FromJSON($edge)->build($vertices));
        }

        return $that;
    }

    /**
     * @param Base $edge
     */
    public function create(Base $edge)
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