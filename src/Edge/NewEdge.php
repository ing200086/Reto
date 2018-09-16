<?php

namespace Ing200086\Reto\Edge;

use Ing200086\Reto\Vertex\Collection;

class NewEdge {
    protected $_edge;
    protected $_source;
    protected $_destination;

    public function __construct(Base $edge, string $source, string $destination)
    {
        $this->_edge = $edge;
        $this->_source = $source;
        $this->_destination = $destination;
    }

    public static function Undirected(string $source, string $destination)
    {
        $edge = Base::Undirected($source, $destination);

        return new static($edge, $source, $destination);
    }

    public static function FromTo(string $source, string $destination)
    {
        $edge = Base::FromTo($source, $destination);

        return new static($edge, $source, $destination);
    }

    public static function ToFrom(string $source, string $destination)
    {
        $edge = Base::ToFrom($source, $destination);

        return new static($edge, $source, $destination);
    }

    public function build(Collection $vertices)
    {
        if ( ! $this->isValid($vertices) )
        {
            throw new \Exception("One or both of the vertices do not exist on the graph");
        }

        return $this->_edge;
    }

    public function isValid(Collection $vertices)
    {
        return ($vertices->has($this->_source) && $vertices->has($this->_destination));
    }
}