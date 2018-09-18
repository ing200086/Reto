<?php

namespace Ing200086\Reto;

use Ing200086\Reto\Edges\Edges;
use Ing200086\Reto\Interfaces\GraphFactoryInterface;
use Ing200086\Reto\Interfaces\VerticesInterface;
use Ing200086\Reto\Vertices\Vertices;

class EmptyGraphFactory implements GraphFactoryInterface {
    public static function Create()
    {
        return new static();
    }

    public function vertices() : VerticesInterface
    {
        return Vertices::CreateNew();
    }

    public function edges()
    {
        return Edges::CreateNew();
    }

}