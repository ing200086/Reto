<?php

namespace Ing200086\Reto\Edge\Factory;

use Ing200086\Reto\Edge\Base;
use Ing200086\Reto\Edge\FromTo;
use Ing200086\Reto\Edge\ToFrom;
use Ing200086\Reto\Edge\Undirected;
use Ing200086\Reto\Vertex\Collection;

class NewEdge implements EdgeBuilderInterface {
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
        $source = '';
        $destination = '';

        if ( Undirected::isValidID($id, $source, $destination) )
        {
            return static::Undirected($source, $destination);
        } elseif ( FromTo::isValidID($id, $source, $destination) )
        {
            return static::FromTo($source, $destination);
        } elseif ( ToFrom::isValidID($id, $source, $destination) )
        {
            return static::ToFrom($source, $destination);
        }
    }

    public static function Undirected(string $source, string $destination)
    {
        $that = new static ($source, $destination);
        $that->setEdge(Undirected::Create($that));

        return $that;
    }

    protected function setEdge(Base $edge)
    {
        $this->_edge = $edge;
    }

    public static function FromTo(string $source, string $destination)
    {
        $that = new static ($source, $destination);
        $that->setEdge(FromTo::Create($that));

        return $that;
    }

    public static function ToFrom(string $source, string $destination)
    {
        $that = new static ($source, $destination);
        $that->setEdge(ToFrom::Create($that));

        return $that;
    }

    public function source() : string
    {
        return $this->_source;
    }

    public function destination() : string
    {
        return $this->_destination;
    }

    public function build(Collection $vertices) : Base
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