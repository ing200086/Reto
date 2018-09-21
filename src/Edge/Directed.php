<?php

namespace Ing200086\Reto\Edge;

use Ing200086\Reto\Interfaces\EdgeInterface;
use Ing200086\Reto\Interfaces\EdgeRepositoryInterface;
use Ing200086\Reto\Interfaces\EndPointsInterface;
use Ing200086\Reto\Interfaces\VertexInterface;
use Ing200086\Reto\Interfaces\VertexRepositoryInterface;
use Ing200086\Reto\Points\EndPoints;

/**
 * Class Directed
 *
 * @package Ing200086\Reto\Edge
 */
class Directed implements EdgeInterface {
    protected $_points;

    public function __construct(EndPointsInterface $endPoints)
    {
        $this->_points = $endPoints;
    }

    public static function Create(EndPointsInterface $endPoints) : EdgeInterface
    {
        return new static($endPoints);
    }

    public static function Between(VertexInterface $from, VertexInterface $to) : EdgeInterface
    {
        $endPoints = EndPoints::Create($from->getId(), $to->getId());
        return new static($endPoints);
    }

    public function points() : EndPointsInterface
    {
        return $this->_points;
    }

    public function defineOn(VertexRepositoryInterface $vertices, EdgeRepositoryInterface $edges) : void
    {
        if ( $this->points()->isIn($vertices) )
        {
            $edges->add($this);
        }
    }

    public function getId() : string
    {
        return $this->_points->from() . '->' . $this->_points->to();
    }
}