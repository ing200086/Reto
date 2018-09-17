<?php

namespace Ing200086\Reto\Edge\Factory;

use Ing200086\Reto\Edge\Base;
use Ing200086\Reto\Vertex\Collection as VertexCollection;

interface BuildableInterface {
    public function build(VertexCollection $vertices) : Base;
}