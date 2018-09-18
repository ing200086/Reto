<?php

namespace Ing200086\Reto\Edge;

use Ing200086\Reto\Interfaces\EdgeInterface;

/**
 * Class Undirected
 *
 * @package Ing200086\Reto\Edge
 */
class Undirected extends Base implements EdgeInterface {
    /**
     * @return string
     */
    public function getId() : string
    {
        return $this->_points->source() . '<>' . $this->_points->destination();
    }
}