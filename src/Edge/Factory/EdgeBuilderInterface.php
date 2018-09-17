<?php

namespace Ing200086\Reto\Edge\Factory;

interface EdgeBuilderInterface {
    public function source() : string;

    public function destination() : string;
}