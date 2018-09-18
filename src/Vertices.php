<?php

namespace Ing200086\Reto;

/**
 * Class VertexCollection
 *
 * @package Ing200086\Reto
 */
class Vertices extends SealedCollection {
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
        $this->container->add(Single::Create($id));
    }

    /**
     * @param Single $vertex
     */
    public function add(Single $vertex)
    {
        $this->container->add($vertex);
    }

}