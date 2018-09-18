<?php

namespace Ing200086\Reto\Tests\Stubs\Edge;

use Ing200086\Reto\Interfaces\EdgeInterface;
use Ing200086\Reto\Points\EndPoints;
use Ing200086\Reto\Edge\FromTo;
use Ing200086\Reto\Edge\ToFrom;
use Ing200086\Reto\Edge\Undirected;

/**
 * Class SimpleFactory
 *
 * @package Ing200086\Reto\Factory\Edge
 */
class SimpleFactory {
    /**
     * @return SimpleFactory
     */
    public static function Create()
    {
        return new static();
    }

    public function getEdge(string $json): EdgeInterface
    {
        preg_match('/(?P<source>[\w\d]+)' . '(?P<delimiter><>|->|<-)' . '(?P<destination>[\w\d]+)/', $json, $item);

        return $this->buildEdge(EndPoints::Create($item['source'], $item['destination']), $item['delimiter']);
    }

    protected function buildEdge(EndPoints $points, string $delimiter) : EdgeInterface
    {
        switch ( $delimiter )
        {
            case '<>':
                return Undirected::Create($points);
                break;
            case '->':
                return FromTo::Create($points);
                break;
            case '<-':
                return ToFrom::Create($points);
                break;
        }
    }
}