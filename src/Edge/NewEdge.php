<?php

namespace Ing200086\Reto\Edge;

use Ing200086\Reto\Vertex\Collection;

class NewEdge {
    protected $_edge;
    protected $_source;
    protected $_destination;

    public function __construct(string $source, string $destination)
    {
        $this->_source = $source;
        $this->_destination = $destination;
    }

    public static function FromId(string $id)
    {
        if (stristr($id, "<>")) {
            $source = strtok($id, "<>");
            $destination = strtok("<>");
            return static::Undirected($source, $destination);
        } elseif (stristr($id, "->")) {
            $source = strtok($id, "->");
            $destination = strtok("->");
            return static::FromTo($source, $destination);
        } elseif (stristr($id, "<-")) {
            $source = strtok($id, "<-");
            $destination = strtok("<-");
            return static::ToFrom($source, $destination);
        }
    }

    public static function Undirected(string $source, string $destination)
    {
        $that = new static ($source, $destination);
        $that->setEdge(Base::Undirected($that));

        return $that;
    }

    public static function FromTo(string $source, string $destination)
    {
        $that = new static ($source, $destination);
        $that->setEdge(Base::FromTo($that));

        return $that;
    }

    public static function ToFrom(string $source, string $destination)
    {
        $that = new static ($source, $destination);
        $that->setEdge(Base::ToFrom($that));

        return $that;
    }

    protected function setEdge(Base $edge)
    {
        $this->_edge = $edge;
    }

    public function source()
    {
        return $this->_source;
    }

    public function destination()
    {
        return $this->_destination;
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