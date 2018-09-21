<?php

namespace Ing200086\Reto;

use Ing200086\Reto\Interfaces\GraphFactoryInterface;
use Ing200086\Reto\Interfaces\VertexRepositoryInterface;
use Ing200086\Reto\Repository\EdgeRepository;
use Ing200086\Reto\Repository\VertexRepository;

class EmptyGraphFactory implements GraphFactoryInterface {
    public static function Create()
    {
        return new static();
    }

    public function vertices() : VertexRepositoryInterface
    {
        return VertexRepository::Create();
    }

    public function edges()
    {
        return EdgeRepository::Create();
    }

}