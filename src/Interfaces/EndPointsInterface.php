<?php

namespace Ing200086\Reto\Interfaces;

interface EndPointsInterface {
    public function source() : string;

    public function destination() : string;

    public function isValid(SealedVerticesInterface $vertices) : bool;
}