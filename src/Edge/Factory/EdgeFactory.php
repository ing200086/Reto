<?php

namespace Ing200086\Reto\Edge\Factory;

use Ing200086\Reto\Edge\Base;
use Ing200086\Reto\Edge\Core\EndPoints;
use Ing200086\Reto\Vertex\Collection as VertexCollection;

abstract class EdgeFactory extends EndPoints implements BuildableInterface {
    public function __construct(string $source, string $destination)
    {
        $this->_source = $source;
        $this->_destination = $destination;
    }

    public static function Create(string $source, string $destination)
    {
        return new static ($source, $destination);
    }

    protected abstract function edgeProvider() : Base;

    public function build(VertexCollection $vertex) : Base
    {
        $edge = $this->edgeProvider();

        if ($edge->isValid($vertex))
        {
            return $edge;
        }
    }
}