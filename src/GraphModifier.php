<?php


namespace Ing200086\Reto;


use Ing200086\Reto\Edges\Edges;
use Ing200086\Reto\Interfaces\VertexInterface;
use Ing200086\Reto\Interfaces\VerticesInterface;

class GraphModifier {
    protected $_vertices;
    protected $_edges;

    protected function __construct(VerticesInterface $vertices, Edges $edges)
    {
        $this->_vertices = $vertices;
        $this->_edges = $edges;
    }

    public static function Create(VerticesInterface $vertices, Edges $edges)
    {
        return new static($vertices, $edges);
    }

    public function vertex(VertexInterface $vertex) : void
    {
        $this->_vertices->add($vertex);
    }
}