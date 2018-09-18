<?php

namespace Ing200086\Reto\Tests\Feature;

use Ing200086\Reto\Graph;
use Ing200086\Reto\Edge\Collection as EdgeCollection;
use Ing200086\Reto\Tests\Config\JsonGraphFactory;
use Ing200086\Reto\Vertex\Collection as VertexCollection;
use PHPUnit\Framework\TestCase;

class GraphBuildTest extends TestCase {
    /**
     * @test
     * @dataProvider graphDataProvider
     */
    public function it_can_be_made_from_json($filename, $vertex, $edge)
    {
        $config = JsonGraphFactory::Create($filename);
        $graph = Graph::Create($config);

        $this->assertInstanceOf(VertexCollection::class, $graph->vertices());
        $this->assertInstanceOf(EdgeCollection::class, $graph->edges());

        $this->assertEquals($vertex, count($graph->vertices()));
        $this->assertEquals($edge, count($graph->edges()));
    }

    public function graphDataProvider()
    {
        return [
            ['Edgeless.json', 3, 0],
            ['Linear.json', 3, 2]
        ];
    }
}
