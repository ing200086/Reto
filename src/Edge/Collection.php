<?php

namespace Ing200086\Reto\Edge;

use Ing200086\Envase\EntityContainer;
use Ing200086\Reto\Edge\Factory\BuildableInterface;
use Ing200086\Reto\Edge\Factory\EdgeFactory;
use Ing200086\Reto\Edge\Factory\EdgeFromIdFactory;
use Ing200086\Reto\Vertex\Collection as VertexCollection;

class Collection implements \Countable {
    protected $container;

    public function __construct()
    {
        $this->container = EntityContainer::Create();
    }

    public static function FromArray(array $edges, VertexCollection $vertices)
    {
        $that = new static();

        foreach ( $edges as $edge )
        {
        $that->create(EdgeFromIdFactory::Create($edge), $vertices);
        }

        return $that;
    }

    public function create(BuildableInterface $factory, VertexCollection $vertices)
    {
        $this->container->add($factory->build($vertices));
    }

    /**
     * @return int
     */
    public function count() : int
    {
        return $this->container->count();
    }
}