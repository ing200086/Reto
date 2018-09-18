<?php

namespace Ing200086\Reto\Edge;

use Ing200086\Reto\Interfaces\EdgeInterface;

/**
 * Class ToFrom
 *
 * @package Ing200086\Reto\Edge
 */
class ToFrom extends Base implements EdgeInterface {
    /**
     * @return string
     */
    public function getId() : string
    {
        return $this->_points->source() . '<-' . $this->_points->destination();
    }
}