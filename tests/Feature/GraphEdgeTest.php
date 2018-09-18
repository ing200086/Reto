<?php

namespace Ing200086\Reto\Tests\Feature;

use Ing200086\Reto\Edge\Core\EndPoints;
use Ing200086\Reto\Edge\FromTo;
use Ing200086\Reto\Edge\ToFrom;
use Ing200086\Reto\Edge\Undirected;
use Ing200086\Reto\Graph;
use PHPUnit\Framework\TestCase;

class GraphEdgeTest extends TestCase {
    protected $graph;

    /** @test */
    public function it_can_have_an_edge_created_between_two_vertices()
    {
        $this->graph->define(Undirected::Create(EndPoints::Create('a', 'b')));
        $this->graph->define(FromTo::Create(EndPoints::Create('b', 'c')));
        $this->graph->define(ToFrom::Create(EndPoints::Create('a', 'c')));

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
