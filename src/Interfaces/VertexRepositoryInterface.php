<?php

namespace Ing200086\Reto\Interfaces;

use Ing200086\Envase\Interfaces\EntityContainerInterface;

interface VertexRepositoryInterface extends \Countable {
    public static function Create(EntityContainerInterface $container) : VertexRepositoryInterface;

    public function remove(string $id) : void;

    public function add(VertexInterface $vertex) : void;

    public function find(string $id) : VertexInterface;

    public function has(string $id) : bool;
}