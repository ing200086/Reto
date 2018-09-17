<?php

namespace Ing200086\Reto\Edge\Factory;

use Ing200086\Reto\Edge\Base;
use Ing200086\Reto\Edge\ToFrom;
use Ing200086\Reto\Vertex\Collection as VertexCollection;

class ToFromFactory extends EdgeFactory {
    public static function Create(string $source, string $destination)
    {
        return new static ($source, $destination);
    }

    public function build(VertexCollection $vertices) : Base
    {
        return ToFrom::Create($this);
    }
}