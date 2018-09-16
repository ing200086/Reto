<?php

namespace Ing200086\Reto;

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
        $edges = EdgeCollection::FromArray(self::indexOrEmpty($json, 'edges'));

        return new static($vertices, $edges);
    }

    protected static function indexOrEmpty(array $source, $index)
    {
        return (isset($source[$index])) ? $source[$index] : [];
    }

    public function vertices()
    {
        return $this->_vertices;
    }

    public function edges()
    {
        return $this->_edges;
    }

    public function trace()
    {
        return array_values(array_map(function($vertex)
        {
            return $vertex->getId();
        }, $this->_vertices->toArray()));
    }
}