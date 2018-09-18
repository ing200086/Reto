<?php

namespace Ing200086\Reto\Interfaces;

use Ing200086\Envase\Interfaces\EntityInterface;

interface VertexInterface extends EntityInterface {
    public static function Create(string $id) : VertexInterface;
}