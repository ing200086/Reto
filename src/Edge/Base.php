<?php

namespace Ing200086\Reto\Edge;

use Ing200086\Envase\Interfaces\EntityInterface;
use Ing200086\Reto\Edge\Core\EndPointsInterface;
use Ing200086\Reto\Vertex\Collection as VertexCollection;

/**
 * Class Base
 *
 * @package Ing200086\Reto\Edge
 */
abstract class Base implements EntityInterface {
    protected $_source;
    protected $_destination;

    public function __construct(EndPointsInterface $endPoints)
    {
        $this->_source = $endPoints->source();
        $this->_destination = $endPoints->destination();
    }

    /**
     * @param EndPointsInterface $endPoints
     * @return Base
     */
    public static function Create(EndPointsInterface $endPoints)
    {
        return new static($endPoints);
    }

    /**
     * @param VertexCollection $vertices
     * @return bool
     */
    public function isValid(VertexCollection $vertices)
    {
        return ($vertices->has($this->_source) && $vertices->has($this->_destination));
    }

    protected abstract function delimiter() : string;

    /**
     * @return string
     */
    public function getId() : string
    {
        return $this->_source . $this->delimiter() . $this->_destination;
    }
}