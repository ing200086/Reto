<?php

namespace Ing200086\Reto;

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
//        var_dump($json);
        $vertices = VertexCollection::FromArray(self::indexOrEmpty($json, 'vertices'));
        $edges = EdgeCollection::FromArray(self::indexOrEmpty($json, 'edges'));

        return new static($vertices, $edges);
    }

    protected static function indexOrEmpty(array $source, $index)
    {
        if (isset($source[$index]))
        {
            return $source[$index];
        }

        return [];
    }

    public function vertices()
    {
        return $this->_vertices;
    }

    public function edges()
    {
        return $this->_edges;
    }
}