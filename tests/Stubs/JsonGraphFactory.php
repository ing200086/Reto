<?php

namespace Ing200086\Reto\Tests\Stubs;

use Ing200086\Reto\Edges\Edges;
use Ing200086\Reto\Interfaces\GraphFactoryInterface;
use Ing200086\Reto\Tests\Stubs\Edge\SimpleFactory;
use Ing200086\Reto\Vertex\Single;
use Ing200086\Reto\Vertices\Vertices;

class JsonGraphFactory implements GraphFactoryInterface {
    protected $_vertices;
    protected $_edges;
    protected $_edgeFactory;

    public function __construct(string $filename)
    {
        $json = $this->getConfigAsJson($filename);

        $this->_edgeFactory = SimpleFactory::Create();

        $this->populateVertices($this->indexOrEmpty($json, 'vertices'));
        $this->populateEdges($this->indexOrEmpty($json, 'edges'));
    }

    protected function getConfigAsJson(string $filename)
    {
        return json_decode(file_get_contents($filename), true);
    }

    protected function populateVertices(array $vertices)
    {
        $this->_vertices = Vertices::CreateNew();
        foreach ( $vertices as $vertex )
        {
            $this->_vertices->add(Single::Create($vertex));
        }
    }

    protected function indexOrEmpty(array $source, $index)
    {
        return (isset($source[$index])) ? $source[$index] : [];
    }

    protected function populateEdges(array $edges)
    {
        $this->_edges = Edges::CreateNew();
        foreach ( $edges as $edge )
        {
            $this->_edges->create($this->_edgeFactory->getEdge($edge), $this->_vertices);
        }
    }

    public static function Create(string $filename, string $directory)
    {
        return new static($directory . '/' . $filename);
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