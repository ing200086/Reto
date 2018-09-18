<?php

namespace Ing200086\Reto\Interfaces;

use Ing200086\Reto\Interfaces\VertexInterface;

interface SealedVerticesInterface extends \Countable {
    public static function CreateNew(): SealedVerticesInterface;
    public function find(string $id) : VertexInterface;
    public function has(string $id) : bool;
}