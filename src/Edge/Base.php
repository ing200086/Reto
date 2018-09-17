<?php

namespace Ing200086\Reto\Edge;

use Ing200086\Envase\Interfaces\EntityInterface;
use Ing200086\Reto\Edge\Factory\EdgeBuilderInterface;

abstract class Base implements EntityInterface {
    protected $_source;
    protected $_destination;

    public function __construct(EdgeBuilderInterface $builder)
    {
        $this->_source = $builder->source();
        $this->_destination = $builder->destination();
    }

    public static function Create(EdgeBuilderInterface $builder)
    {
        return new static($builder);
    }

    public function getId() : string
    {
        return $this->_source . static::Delimiter() . $this->_destination;
    }
}