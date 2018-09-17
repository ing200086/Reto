<?php

namespace Ing200086\Reto\Edge\Factory;

use Ing200086\Reto\Edge\Base;
use Ing200086\Reto\Edge\FromTo;

/**
 * Class FromToFactory
 *
 * @package Ing200086\Reto\Edge\Factory
 */
class FromToFactory extends EdgeFactory {
    /**
     * @return Base
     */
    protected function edgeProvider() : Base
    {
        return FromTo::Create($this);
    }
}