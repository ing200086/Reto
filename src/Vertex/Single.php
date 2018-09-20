<?php

namespace Ing200086\Reto\Vertex;

use Ing200086\Reto\Interfaces\EdgesInterface;
use Ing200086\Reto\Interfaces\VertexInterface;
use Ing200086\Reto\Interfaces\VerticesInterface;

/**
 * Class Single
 *
 * @package Ing200086\Reto
 */
class Single implements VertexInterface {
    protected $_id;

    public function __construct(string $id)
    {
        $this->_id = $id;
    }

    public static function Create(string $id) : VertexInterface
    {
        return new static($id);
    }

    public function getId() : string
    {
        return $this->_id;
    }

    public function defineOn(VerticesInterface $vertices, EdgesInterface $edges) : void
    {
        $vertices->add($this);
    }
}