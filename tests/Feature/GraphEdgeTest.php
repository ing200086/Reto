<?php

namespace Ing200086\Reto\Tests\Feature;

use Ing200086\Reto\Points\EndPoints;
use Ing200086\Reto\Edge\Directed;
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
        $a = Single::Create('a');
        $b = Single::Create('b');
        $c = Single::Create('c');

        $this->graph->define(Undirected::Between($a, $b));
        $this->graph->define(Directed::Between($b, $c));
        $this->graph->define(Directed::Between($c, $a));

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
