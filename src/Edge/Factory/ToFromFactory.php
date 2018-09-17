<?php

namespace Ing200086\Reto\Edge\Factory;

use Ing200086\Reto\Edge\Base;
use Ing200086\Reto\Edge\ToFrom;

/**
 * Class ToFromFactory
 *
 * @package Ing200086\Reto\Edge\Factory
 */
class ToFromFactory extends EdgeFactory {
    /**
     * @return Base
     */
    protected function edgeProvider() : Base
    {
        return ToFrom::Create($this);
    }
}