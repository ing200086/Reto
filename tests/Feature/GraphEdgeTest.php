<?php

namespace Ing200086\Reto\Tests\Feature;

use Ing200086\Reto\Edge\Factory\FromToFactory;
use Ing200086\Reto\Edge\Factory\ToFromFactory;
use Ing200086\Reto\Edge\Factory\UndirectedFactory;
use Ing200086\Reto\Graph;
use PHPUnit\Framework\TestCase;

class GraphEdgeTest extends TestCase {
    protected $graph;

    /** @test */
    public function it_can_have_an_edge_created_between_two_vertices()
    {
        $this->graph->define(UndirectedFactory::Create('a', 'b'));
        $this->graph->define(ToFromFactory::Create('b', 'c'));
        $this->graph->define(FromToFactory::Create('a', 'c'));

        $this->assertEquals(3, count($this->graph->edges()));
    }

    protected function setUp()
    {
        parent::setUp();
        $this->graph = Graph::Create();
        $this->graph->vertices()->create('a');
        $this->graph->vertices()->create('b');
        $this->graph->vertices()->create('c');
    }
}
