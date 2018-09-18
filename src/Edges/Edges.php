<?php

namespace Ing200086\Reto\Edges;

use Ing200086\Envase\EntityContainer;
use Ing200086\Reto\Interfaces\EdgeInterface;
use Ing200086\Reto\Interfaces\SealedVerticesInterface;

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

    public function create(EdgeInterface $edge, SealedVerticesInterface $vertices)
    {
        if ( $edge->points()->isValid($vertices) )
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