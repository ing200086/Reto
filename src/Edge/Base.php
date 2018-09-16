<?php

namespace Ing200086\Reto\Edge;

use Ing200086\Envase\Interfaces\EntityInterface;

class Base implements EntityInterface {
    protected $_source;
    protected $_destination;
    protected $_delimiter;

    public function __construct(string $source, string $destination, string $delimiter)
    {
        $this->_source = $source;
        $this->_destination = $destination;
    }

    public static function Undirected(NewEdge $builder)
    {
        return new static($builder->source(), $builder->destination(), '<>');
    }

    public static function FromTo(NewEdge $builder)
    {
        return new static($builder->source(), $builder->destination(), '->');
    }

    public static function ToFrom(NewEdge $builder)
    {
        return new static($builder->source(), $builder->destination(), '<-');
    }

    public function getId() : string
    {
        return $this->_source . $this->_delimiter . $this->_destination;
    }
}