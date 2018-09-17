<?php

namespace Ing200086\Reto\Edge;

/**
 * Class FromTo
 *
 * @package Ing200086\Reto\Edge
 */
class FromTo extends Base {
    /**
     * @return string
     */
    protected function delimiter() : string
    {
        return '->';
    }
}