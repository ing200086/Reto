<?php

namespace Ing200086\Reto\Tests\Feature;

use Ing200086\Reto\EdgeCollection;
use Ing200086\Reto\Graph;
use Ing200086\Reto\VertexCollection;
use PHPUnit\Framework\TestCase;

class GraphTest extends TestCase {
    /** @test */
    public function it_can_be_made_with_multiple_vertices()
    {
        $config = $this->getConfigAsJson('Edgeless.json');
        $graph = Graph::FromJson($config);

        $this->assertInstanceOf(VertexCollection::class, $graph->vertices());
        $this->assertEquals(3, count($graph->vertices()));
    }

    /** @test*/
    public function it_can_be_made_with_edges_between_vertices() {
        $config = $this->getConfigAsJson('Linear.json');
        $graph = Graph::FromJson($config);

        $this->assertInstanceOf(EdgeCollection::class, $graph->edges());
        $this->assertEquals(2, count($graph->edges()));
    }

    protected function getConfigAsJson(string $filename, string $directory = './tests/Config')
    {
        $string = file_get_contents($directory . '/' . $filename);

        return json_decode($string, true);
    }
}
