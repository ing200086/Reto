<?php

namespace Ing200086\Reto\Edge;

/**
 * Class ToFrom
 *
 * @package Ing200086\Reto\Edge
 */
class ToFrom extends Base {
    /**
     * @return string
     */
    protected function delimiter() : string
    {
        return '<-';
    }
}