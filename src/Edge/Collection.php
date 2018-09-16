<?php

namespace Ing200086\Reto\Edge;

use Ing200086\Envase\EntityContainer;
//use Ing200086\Reto\Edge\Base;

class Collection implements \Countable {
    protected $container;

    public function __construct()
    {
        $this->container = EntityContainer::Create();
    }

    /**
     * @param array $edges
     * @return Collection
     */
    public static function FromArray(array $edges)
    {
        $that = new static();

        foreach ( $edges as $edge )
        {
            $that->create(Base::Undirected($edge, $edge));
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