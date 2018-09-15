<?php

namespace Ing200086\Reto;

use Ing200086\Envase\Interfaces\EntityInterface;

class Edge implements EntityInterface {
    protected $_id;

    public function __construct(string $id)
    {
        $this->_id = $id;
    }

    public static function Create(string $id)
    {
        return new static($id);
    }

    public function getId() : string
    {
        return $this->_id;
    }
}