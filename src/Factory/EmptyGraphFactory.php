<?php

namespace Ing200086\Reto\Factory;

use Ing200086\Reto\Vertex\Collection as VertexCollection;
use Ing200086\Reto\Edge\Collection as EdgeCollection;

class EmptyGraphFactory implements GraphFactoryInterface {
    public static function Create()
    {
        return new static();
    }

    public function vertices()
    {
        return VertexCollection::CreateNew();
    }

    public function edges()
    {
        return EdgeCollection::CreateNew();
    }

}