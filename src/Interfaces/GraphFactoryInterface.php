<?php

namespace Ing200086\Reto\Interfaces;

interface GraphFactoryInterface {
    public function vertices() : VertexRepositoryInterface;

    public function edges();
}