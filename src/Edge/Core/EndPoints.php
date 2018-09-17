<?php

namespace Ing200086\Reto\Edge\Core;

/**
 * Class EndPoints
 *
 * @package Ing200086\Reto\Edge\Core
 */
class EndPoints implements EndPointsInterface {
    protected $_source;
    protected $_destination;

    /**
     * @return string
     */
    public function source() : string
    {
        return $this->_source;
    }

    /**
     * @return string
     */
    public function destination() : string
    {
        return $this->_destination;
    }
}