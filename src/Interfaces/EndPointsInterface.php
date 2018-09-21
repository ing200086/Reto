<?php

namespace Ing200086\Reto\Interfaces;

interface EndPointsInterface {
    public function from() : string;

    public function to() : string;

    public function isIn(VertexRepositoryInterface $vertices) : bool;
}