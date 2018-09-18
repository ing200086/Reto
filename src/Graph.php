<?php

namespace Ing200086\Reto;

use Ing200086\Reto\Edge\Collection as EdgeCollection;
use Ing200086\Reto\Edge\Factory\EdgeFactory;
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
        if (! $factory)
        {
            $vertices = VertexCollection::FromArray([]);
            $edges = EdgeCollection::FromArray([], $vertices);
        } else {
            $vertices = $factory->vertices();
            $edges = $factory->edges();
        }

        return new static($vertices, $edges);
    }

    protected static function indexOrEmpty(array $source, $index)
    {
        return (isset($source[$index])) ? $source[$index] : [];
    }

    public function edges()
    {
        return $this->_edges;
    }

    public function define(EdgeFactory $edgeCreator)
    {
        $this->_edges->create($edgeCreator, $this->vertices());
    }

    public function vertices()
    {
        return $this->_vertices;
    }
}