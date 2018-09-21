<?php

namespace Ing200086\Reto\Tests\Stubs;

use Ing200086\Reto\Interfaces\GraphFactoryInterface;
use Ing200086\Reto\Interfaces\VertexRepositoryInterface;
use Ing200086\Reto\Repository\EdgeRepository;
use Ing200086\Reto\Repository\VertexRepository;
use Ing200086\Reto\Tests\Stubs\Edge\SimpleFactory;
use Ing200086\Reto\Vertex\Single;

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
        $this->_vertices = VertexRepository::Create();
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
        $this->_edges = EdgeRepository::Create();
        foreach ( $edges as $edge )
        {
            $this->_edges->add($this->_edgeFactory->getEdge($edge));
        }
    }

    public static function Create(string $filename, string $directory)
    {
        return new static($directory . '/' . $filename);
    }

    public function vertices() : VertexRepositoryInterface
    {
        return $this->_vertices;
    }

    public function edges()
    {
        return $this->_edges;
    }
}