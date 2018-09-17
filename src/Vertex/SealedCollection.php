<?php

namespace Ing200086\Reto\Vertex;

use Ing200086\Envase\EntityContainer;
use Ing200086\Envase\Interfaces\EntityContainerInterface;

class SealedCollection implements \Countable {
    /**
     * @var EntityContainerInterface
     */
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

    /**
     * @param string $id
     * @return Single
     * @throws \Ing200086\Envase\Exception\NotFoundException
     */
    public function find(string $id) : Single
    {
        return $this->container->get($id);
    }

    /**
     * @param string $id
     * @return bool
     */
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

    /**
     * @return array
     */
    public function toArray()
    {
        return $this->container->toArray();
    }
}