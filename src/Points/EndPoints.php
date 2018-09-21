<?php

namespace Ing200086\Reto\Points;

use Ing200086\Reto\Interfaces\EndPointsInterface;
use Ing200086\Reto\Interfaces\VertexRepositoryInterface;

class EndPoints implements EndPointsInterface {
    protected $_from;
    protected $_to;

    public function __construct(string $from, string $to)
    {
        $this->_from = $from;
        $this->_to = $to;
    }

    public static function Create(string $from, string $to)
    {
        return new static($from, $to);
    }

    public function from() : string
    {
        return $this->_from;
    }

    public function to() : string
    {
        return $this->_to;
    }

    public function isIn(VertexRepositoryInterface $vertices) : bool
    {
        return ($vertices->has($this->_from) && $vertices->has($this->_to));
    }
}