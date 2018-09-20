<?php

namespace Ing200086\Reto\Edge;

use Ing200086\Reto\Interfaces\EdgeInterface;
use Ing200086\Reto\Interfaces\EdgesInterface;
use Ing200086\Reto\Interfaces\EndPointsInterface;
use Ing200086\Reto\Interfaces\VerticesInterface;

/**
 * Class Base
 *
 * @package Ing200086\Reto\Edge
 */
abstract class Base implements EdgeInterface {
    protected $_points;

    public function __construct(EndPointsInterface $endPoints)
    {
        $this->_points = $endPoints;
    }

    /**
     * @param EndPointsInterface $endPoints
     * @return EdgeInterface
     */
    public static function Create(EndPointsInterface $endPoints) : EdgeInterface
    {
        return new static($endPoints);
    }

    /**
     * @return EndPointsInterface
     */
    public function points() : EndPointsInterface
    {
        return $this->_points;
    }

    public function defineOn(VerticesInterface $vertices, EdgesInterface $edges) : void
    {
        $edges->create($this, $vertices);
    }
}