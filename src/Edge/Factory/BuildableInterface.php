<?php

namespace Ing200086\Reto\Edge\Factory;

use Ing200086\Reto\Vertex\Collection as VertexCollection;
use Ing200086\Reto\Edge\Base;

interface BuildableInterface {
    public function build(VertexCollection $vertices) : Base;
}