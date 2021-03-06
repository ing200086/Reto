<?php

namespace Ing200086\Reto\Tests\Feature;

use Ing200086\Reto\Graph;
use Ing200086\Reto\Vertex\Single;
use PHPUnit\Framework\TestCase;

class GraphTest extends TestCase {
    /**
     * @var Graph
     */
    protected $graph;

    /** @test */
    public function it_can_return_a_vertex_by_id()
    {
        $vx = $this->graph->vertices()->find('a');

        $this->assertEquals('a', $vx->getId());
    }

    /** @test */
    public function it_can_remove_a_vertex_by_id()
    {
        $this->assertTrue($this->graph->vertices()->has('a'));

        $this->graph->vertices()->remove('a');

        $this->assertFalse($this->graph->vertices()->has('a'));
    }

    /**  @test */
    public function it_can_add_a_vertex()
    {
        $this->assertFalse($this->graph->vertices()->has('d'));

        $this->graph->define(Single::Create('d'));

        $this->assertTrue($this->graph->vertices()->has('d'));
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
