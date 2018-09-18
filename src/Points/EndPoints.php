<?php

namespace Ing200086\Reto\Points;

use Ing200086\Reto\Interfaces\EndPointsInterface;
use Ing200086\Reto\Interfaces\SealedVertexCollectionInterface;

class EndPoints implements EndPointsInterface {
    protected $_source;
    protected $_destination;

    public function __construct(string $source, string $_destination)
    {
        $this->_source = $source;
        $this->_destination = $_destination;
    }

    public static function Create(string $source, string $destination)
    {
        return new static($source, $destination);
    }

    /**
     * @return string
     */
    public function source() : string
    {
        return $this->_source;
    }

    /**
     * @return string
     */
    public function destination() : string
    {
        return $this->_destination;
    }

    public function isValid(SealedVertexCollectionInterface $vertices) : bool
    {
        return ($vertices->has($this->_source) && $vertices->has($this->_destination));
    }
}