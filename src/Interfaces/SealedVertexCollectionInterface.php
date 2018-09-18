<?php

namespace Ing200086\Reto\Interfaces;

use Ing200086\Reto\Interfaces\VertexInterface;

interface SealedVertexCollectionInterface extends \Countable {
    public static function CreateNew(): SealedVertexCollectionInterface;
    public function find(string $id) : VertexInterface;
    public function has(string $id) : bool;
}