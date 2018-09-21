<?php

namespace Ing200086\Reto\Interfaces;

use Ing200086\Envase\Interfaces\EntityContainerInterface;

interface EdgeRepositoryInterface extends \Countable {
    public static function Create(EntityContainerInterface $container) : EdgeRepositoryInterface;

    public function add(EdgeInterface $edge) : void;
}