<?php

namespace Ing200086\Reto;

use Ing200086\Reto\Edge\Base;
use Ing200086\Reto\Edge\Collection as EdgeCollection;
use Ing200086\Reto\Factory\EmptyGraphFactory;
use Ing200086\Reto\Factory\GraphFactoryInterface;
use Ing200086\Reto\Vertex\Collection as VertexCollection;

class Graph {
    protected $_vertices;
    protected $_edges;

    public function __construct(VertexCollection $vertices, EdgeCollection $edges)
    {
        $this->_vertices = $vertices;
        $this->_edges = $edges;
    }


    public static function Create(GraphFactoryInterface $factory = null)
    {
        $factory = ($factory) ?? EmptyGraphFactory::Create();

        return new static($factory->vertices(), $factory->edges());
    }

    public function edges()
    {
        return $this->_edges;
    }

    public function define(Base $edge)
    {
        $this->_edges->create($edge, $this->vertices());
    }

    public function vertices()
    {
        return $this->_vertices;
    }
}