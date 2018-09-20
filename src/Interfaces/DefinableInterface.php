<?php

namespace Ing200086\Reto\Interfaces;

interface DefinableInterface {
    public function defineOn(VerticesInterface $vertices, EdgesInterface $edges) : void;
}