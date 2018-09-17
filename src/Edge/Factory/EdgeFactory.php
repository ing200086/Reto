<?php

namespace Ing200086\Reto\Edge\Factory;

use Ing200086\Reto\Edge\Base;
use Ing200086\Reto\Vertex\Collection;

abstract class EdgeFactory implements EdgeBuilderInterface {
    protected $_source;
    protected $_destination;

    public function __construct(string $source, string $destination)
    {
        $this->_source = $source;
        $this->_destination = $destination;
    }

    public static function FromJSON(string $json)
    {
        $attributes = static::ParseJSON($json);
        
        switch ( $attributes['delimiter'] )
        {
            case '<>':
                return UndirectedFactory::Create($attributes['source'], $attributes['destination']);
                break;
            case '->':
                return FromToFactory::Create($attributes['source'], $attributes['destination']);
                break;
            case '<-':
                return ToFromFactory::Create($attributes['source'], $attributes['destination']);
                break;
        }
    }

    public static function ParseJSON(string $id) : array
    {
        $pattern = '/(?P<source>[\w\d]+)' . '(?P<delimiter><>|->|<-)' . '(?P<destination>[\w\d]+)/';
        preg_match($pattern, $id, $matches);

        return $matches;
    }

    public abstract static function Create(string $source, string $destination);

    public abstract function build(Collection $vertices) : Base;

    public function source() : string
    {
        return $this->_source;
    }

    public function destination() : string
    {
        return $this->_destination;
    }

    public function isValid(Collection $vertices)
    {
        return ($vertices->has($this->_source) && $vertices->has($this->_destination));
    }
}