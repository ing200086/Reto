<?php

namespace Ing200086\Reto\Interfaces;

use Ing200086\Envase\Interfaces\EntityInterface;

interface EdgeInterface extends EntityInterface, DefinableInterface {
    public static function Create(EndPointsInterface $endPoints) : EdgeInterface;

    public function points() : EndPointsInterface;

    public function getId() : string;
}