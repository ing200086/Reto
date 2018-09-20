<?php

namespace Ing200086\Reto\Interfaces;

interface EdgesInterface extends \Countable {
    public static function CreateNew() : EdgesInterface;

    public function create(EdgeInterface $edge, SealedVerticesInterface $vertices) : void;
}