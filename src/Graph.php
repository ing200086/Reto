<?php

namespace Ing200086\Reto;

use Ing200086\Reto\Edge\Collection as EdgeCollection;
use Ing200086\Reto\Edge\Factory\EdgeBuilderInterface;
use Ing200086\Reto\Vertex\Collection as VertexCollection;

class Graph {
    protected $_vertices;
    protected $_edges;

    public function __construct(VertexCollection $vertices, EdgeCollection $edges)
    {
        $this->_vertices = $vertices;
        $this->_edges = $edges;
    }


    public static function FromJson(array $json)
    {
        $vertices = VertexCollection::FromArray(self::indexOrEmpty($json, 'vertices'));
        $edges = EdgeCollection::FromArray(self::indexOrEmpty($json, 'edges'), $vertices);

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

    public function define(EdgeBuilderInterface $edgeCreator)
    {
        $this->_edges->create($edgeCreator->build($this->vertices()));
    }

    public function vertices()
    {
        return $this->_vertices;
    }
}