<?php

namespace Ing200086\Reto\Vertex;

use Ing200086\Envase\Interfaces\EntityInterface;

/**
 * Class Single
 *
 * @package Ing200086\Reto\Vertex
 */
class Single implements EntityInterface {
    protected $_id;

    public function __construct(string $id)
    {
        $this->_id = $id;
    }

    /**
     * @param string $id
     * @return Single
     */
    public static function Create(string $id)
    {
        return new static($id);
    }

    /**
     * @return string
     */
    public function getId() : string
    {
        return $this->_id;
    }
}