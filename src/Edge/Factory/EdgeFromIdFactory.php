<?php

namespace Ing200086\Reto\Edge\Factory;

class EdgeFromIdFactory {
    public static function Create(string $json)
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

}