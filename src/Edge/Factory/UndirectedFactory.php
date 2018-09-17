<?php

namespace Ing200086\Reto\Edge\Factory;

use Ing200086\Reto\Edge\Base;
use Ing200086\Reto\Edge\Undirected;

/**
 * Class UndirectedFactory
 *
 * @package Ing200086\Reto\Edge\Factory
 */
class UndirectedFactory extends EdgeFactory {
    /**
     * @return Base
     */
    protected function edgeProvider() : Base
    {
        return Undirected::Create($this);
    }
}