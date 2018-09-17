<?php

namespace Ing200086\Reto\Vertex;

use Ing200086\Reto\Vertex\Single as Vertex;

/**
 * Class VertexCollection
 *
 * @package Ing200086\Reto
 */
class Collection extends SealedCollection {
    /**
     * @param string $id
     */
    public function remove(string $id)
    {
        $this->container->remove($id);
    }

    /**
     * @param string $id
     */
    public function create(string $id)
    {
        $this->container->add(Vertex::Create($id));
    }

    /**
     * @param Single $vertex
     */
    public function add(Single $vertex)
    {
        $this->container->add($vertex);
    }

}