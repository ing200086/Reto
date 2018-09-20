<?php

namespace Ing200086\Reto\Tests\Feature;

use Ing200086\Reto\Points\EndPoints;
use Ing200086\Reto\Edge\FromTo;
use Ing200086\Reto\Edge\ToFrom;
use Ing200086\Reto\Edge\Undirected;
use Ing200086\Reto\Graph;
use Ing200086\Reto\Vertex\Single;
use PHPUnit\Framework\TestCase;

/**
 * Class GraphEdgeTest
 *
 * @package Ing200086\Reto\Tests\Feature
 * @group focus
 */
class GraphEdgeTest extends TestCase {
    /**
     * @var Graph
     */
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

        $this->graph->define(Single::Create('a'));
        $this->graph->define(Single::Create('b'));
        $this->graph->define(Single::Create('c'));
    }
}
