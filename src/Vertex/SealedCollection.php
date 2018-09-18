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

    public static function CreateNew()
    {
        return new static();
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
}