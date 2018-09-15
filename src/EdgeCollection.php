<?php


namespace Ing200086\Reto;


use Ing200086\Envase\EntityContainer;

class EdgeCollection implements \Countable {
    protected $container;

    public function __construct()
    {
        $this->container = EntityContainer::Create();
    }

    /**
     * @param array $edges
     * @return EdgeCollection
     */
    public static function FromArray(array $edges)
    {
        $that = new static();

        foreach ( $edges as $edge )
        {
            $that->add(Edge::Create($edge));
        }

        return $that;
    }

    /**
     * @param Edge $edge
     */
    public function add(Edge $edge)
    {
        $this->container->add($edge);
    }

    /**
     * @return int
     */
    public function count() : int
    {
        return $this->container->count();
    }
}