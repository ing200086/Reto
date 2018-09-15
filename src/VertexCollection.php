<?php

namespace Ing200086\Reto;

use Ing200086\Envase\EntityContainer;

/**
 * Class VertexCollection
 *
 * @package Ing200086\Reto
 */
class VertexCollection implements \Countable {
    protected $container;

    public function __construct()
    {
        $this->container = EntityContainer::Create();
    }

    /**
     * @param array $vertices
     * @return VertexCollection
     */
    public static function FromArray(array $vertices)
    {
        $that = new static();

        foreach ( $vertices as $vertex )
        {
            $that->add(Vertex::Create($vertex));
        }

        return $that;
    }

    /**
     * @param Vertex $vertex
     */
    public function add(Vertex $vertex)
    {
        $this->container->add($vertex);
    }

    /**
     * @return int
     */
    public function count() : int
    {
        return $this->container->count();
    }
}