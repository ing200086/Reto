<?php

namespace Ing200086\Reto\Interfaces;

interface SealedVerticesInterface extends \Countable {
    public function find(string $id) : VertexInterface;

    public function has(string $id) : bool;
}