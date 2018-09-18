<?php

namespace Ing200086\Reto\Tests\Feature;

use Ing200086\Reto\Edges\Edges;
use Ing200086\Reto\Graph;
use Ing200086\Reto\Tests\Stubs\JsonGraphFactory;
use Ing200086\Reto\Vertices\Vertices;
use PHPUnit\Framework\TestCase;

class GraphBuildTest extends TestCase {
    /**
     * @test
     * @dataProvider graphDataProvider
     */
    public function it_can_be_made_from_json($filename, $vertex, $edge)
    {
        $config = JsonGraphFactory::Create($filename, './tests/Config');
        $graph = Graph::Create($config);

        $this->assertInstanceOf(Vertices::class, $graph->vertices());
        $this->assertInstanceOf(Edges::class, $graph->edges());

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
