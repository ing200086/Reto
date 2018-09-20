<?php

namespace Ing200086\Reto\Interfaces;

interface GraphFactoryInterface {
    public function vertices() : VerticesInterface;

    public function edges();
}