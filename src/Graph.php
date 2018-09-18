<?php

namespace Ing200086\Reto;

use Ing200086\Reto\Interfaces\EdgeInterface;
use Ing200086\Reto\Interfaces\GraphFactoryInterface;

class Graph {
    protected $_vertices;
    protected $_edges;

    public function __construct(Vertices $vertices, Edges $edges)
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

    public function define(EdgeInterface $edge)
    {
        $this->_edges->create($edge, $this->vertices());
    }

    public function vertices()
    {
        return $this->_vertices;
    }
}