<?php


namespace Ing200086\Reto;


use Ing200086\Reto\Edge\Undirected;
use Ing200086\Reto\Edges\Edges;
use Ing200086\Reto\Interfaces\VertexInterface;
use Ing200086\Reto\Interfaces\VerticesInterface;
use Ing200086\Reto\Points\EndPoints;

class GraphModifier {
    protected $_vertices;
    protected $_edges;

    protected $_id;

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

    public function edge() : GraphModifier
    {
        return $this;
    }

    public function withId(string $id) : GraphModifier
    {
        $this->_id = $id;
        return $this;
    }

    public function andId(string $id) : void
    {
        $points = EndPoints::Create($this->_id, $id);
        $this->_edges->create(Undirected::Create($points), $this->_vertices);
    }
}