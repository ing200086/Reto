<?php

namespace Ing200086\Reto\Edge\Core;

interface EndPointsInterface {
    public function source() : string;

    public function destination() : string;
}