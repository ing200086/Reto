<?php

namespace Ing200086\Reto;

use Ing200086\Reto\Edges\Edges;
use Ing200086\Reto\Interfaces\DefinableInterface;
use Ing200086\Reto\Interfaces\GraphFactoryInterface;
use Ing200086\Reto\Interfaces\VerticesInterface;

class Graph {
    protected $_vertices;
    protected $_edges;

    protected function __construct(VerticesInterface $vertices, Edges $edges)
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

    public function define(DefinableInterface $object) : void
    {
        $object->defineOn($this->_vertices, $this->_edges);
    }

    public function vertices()
    {
        return $this->_vertices;
    }
}