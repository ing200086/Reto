<?php

namespace Ing200086\Reto;

use Ing200086\Envase\EntityContainer;
use Ing200086\Reto\Interfaces\EdgeInterface;

/**
 * Class Collection
 *
 * @package Ing200086\Reto
 */
class Edges implements \Countable {
    protected $container;

    public function __construct()
    {
        $this->container = EntityContainer::Create();
    }

    /**
     * @return Edges
     */
    public static function CreateNew()
    {
        return new static();
    }

    public function create(EdgeInterface $edge, Vertices $vertices)
    {
        if ($edge->points()->isValid($vertices))
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