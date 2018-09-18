<?php

namespace Ing200086\Reto;

use Ing200086\Reto\Interfaces\GraphFactoryInterface;

class EmptyGraphFactory implements GraphFactoryInterface {
    public static function Create()
    {
        return new static();
    }

    public function vertices()
    {
        return Vertices::CreateNew();
    }

    public function edges()
    {
        return Edges::CreateNew();
    }

}