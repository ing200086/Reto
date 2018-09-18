<?php

namespace Ing200086\Reto\Edge;

use Ing200086\Reto\Interfaces\EdgeInterface;

/**
 * Class FromTo
 *
 * @package Ing200086\Reto\Edge
 */
class FromTo extends Base implements EdgeInterface {
    /**
     * @return string
     */
    public function getId() : string
    {
        return $this->_points->source() . '->' . $this->_points->destination();
    }
}