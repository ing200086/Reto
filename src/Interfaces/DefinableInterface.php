<?php

namespace Ing200086\Reto\Interfaces;

interface DefinableInterface {
    public function defineOn(VertexRepositoryInterface $vertices, EdgeRepositoryInterface $edges) : void;
}