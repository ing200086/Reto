<?php

namespace Ing200086\Reto\Vertex;

use Ing200086\Reto\Vertex\Single as Vertex;

use Ing200086\Envase\EntityContainer;

/**
 * Class VertexCollection
 *
 * @package Ing200086\Reto
 */
class Collection implements \Countable {
    protected $container;

    public function __construct()
    {
        $this->container = EntityContainer::Create();
    }

    /**
     * @param array $vertices
     * @return Collection
     */
    public static function FromArray(array $vertices)
    {
        $that = new static();

        foreach ( $vertices as $vertex )
        {
            $that->add(Single::Create($vertex));
        }

        return $that;
    }

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

    /**
     * @param string $id
     * @return Single
     * @throws \Ing200086\Envase\Exception\NotFoundException
     */
    public function find(string $id) : Single
    {
        return $this->container->get($id);
    }

    public function remove(string $id)
    {
        $this->container->remove($id);
    }

    public function has(string $id)
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

    public function toArray()
    {
        return $this->container->toArray();
    }
}