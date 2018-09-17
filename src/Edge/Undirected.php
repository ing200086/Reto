<?php

namespace Ing200086\Reto\Edge;

/**
 * Class Undirected
 *
 * @package Ing200086\Reto\Edge
 */
class Undirected extends Base {
    /**
     * @return string
     */
    protected function delimiter() : string
    {
        return '<>';
    }
}