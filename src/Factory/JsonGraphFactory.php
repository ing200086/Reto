<?php

namespace Ing200086\Reto\Factory;

use Ing200086\Reto\Edge\Collection as EdgeCollection;
use Ing200086\Reto\Edge\Core\EndPoints;
use Ing200086\Reto\Edge\FromTo;
use Ing200086\Reto\Edge\ToFrom;
use Ing200086\Reto\Edge\Undirected;
use Ing200086\Reto\Factory\GraphFactoryInterface;
use Ing200086\Reto\Vertex\Collection as VertexCollection;
use Ing200086\Reto\Vertex\Single;

class JsonGraphFactory implements GraphFactoryInterface {
    protected $_vertices;
    protected $_edges;

    public function __construct(string $filename)
    {
        $json = $this->getConfigAsJson($filename);

        $this->_vertices = VertexCollection::CreateNew();
        $this->_edges = EdgeCollection::CreateNew();

        $this->populateVertices(self::indexOrEmpty($json, 'vertices'));
        $this->populateEdges(self::indexOrEmpty($json, 'edges'));
    }

    protected function getConfigAsJson(string $filename, string $directory = './tests/Config')
    {
        $string = file_get_contents($directory . '/' . $filename);

        return json_decode($string, true);
    }

    protected function populateVertices(array $vertices)
    {
        foreach ( $vertices as $vertex )
        {
            $this->_vertices->add(Single::Create($vertex));
        }
    }

    protected static function indexOrEmpty(array $source, $index)
    {
        return (isset($source[$index])) ? $source[$index] : [];
    }

    protected function populateEdges(array $edges)
    {
        foreach ( $edges as $edge )
        {
            $this->_edges->create($this->getEdge($edge), $this->_vertices);
        }
    }

    protected function getEdge(string $json)
    {
        $attributes = $this->parseJSON($json);

        $points = EndPoints::Create($attributes['source'], $attributes['destination']);

        switch ( $attributes['delimiter'] )
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

    protected function parseJSON(string $id) : array
    {
        $pattern = '/(?P<source>[\w\d]+)' . '(?P<delimiter><>|->|<-)' . '(?P<destination>[\w\d]+)/';
        preg_match($pattern, $id, $matches);

        return $matches;
    }

    public static function Create(string $filename)
    {
        return new static($filename);
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