<?php

namespace Ing200086\Reto\Tests\Config;

use Ing200086\Reto\GraphFactoryInterface;
use Ing200086\Reto\Vertex\Collection as VertexCollection;
use Ing200086\Reto\Edge\Collection as EdgeCollection;

class JsonGraphFactory implements GraphFactoryInterface {
    protected $_vertices;
    protected $_edges;

    public function __construct(string $filename)
    {
        $json = $this->getConfigAsJson($filename);

        $this->_vertices = VertexCollection::FromArray(self::indexOrEmpty($json, 'vertices'));
        $this->_edges = EdgeCollection::FromArray(self::indexOrEmpty($json, 'edges'), $this->_vertices);
    }

    public static function Create(string $filename)
    {
        return new static($filename);
    }

    protected function getConfigAsJson(string $filename, string $directory = './tests/Config')
    {
        $string = file_get_contents($directory . '/' . $filename);

        return json_decode($string, true);
    }

    protected static function indexOrEmpty(array $source, $index)
    {
        return (isset($source[$index])) ? $source[$index] : [];
    }

    public function vertices()
    {
        return $this->_vertices;
    }

    public function edges()
    {
        return $this->_edges;
    }
}