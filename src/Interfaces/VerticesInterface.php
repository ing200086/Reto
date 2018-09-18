<?php

namespace Ing200086\Reto\Interfaces;

interface VerticesInterface {
    public static function CreateNew() : VerticesInterface;

    public function remove(string $id) : void;

    public function add(VertexInterface $vertex) : void;
}