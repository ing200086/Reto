<?php

namespace Ing200086\Reto\Edges;

use Ing200086\Envase\EntityContainer;
use Ing200086\Reto\Interfaces\EdgeInterface;
use Ing200086\Reto\Interfaces\EdgesInterface;
use Ing200086\Reto\Interfaces\SealedVerticesInterface;

class Edges implements EdgesInterface {
    protected $container;

    protected function __construct()
    {
        $this->container = EntityContainer::Create();
    }

    /**
     * @return Edges
     */
    public static function CreateNew() : EdgesInterface
    {
        return new static();
    }

    public function create(EdgeInterface $edge, SealedVerticesInterface $vertices) : void
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