<?php

namespace Ing200086\Reto\Vertices;

use Ing200086\Reto\Interfaces\VertexInterface;
use Ing200086\Reto\Interfaces\VerticesInterface;
use Ing200086\Reto\Vertex\Single;

/**
 * Class VertexCollection
 *
 * @package Ing200086\Reto
 */
class Vertices extends SealedVertices implements VerticesInterface {
    public static function CreateNew() : VerticesInterface
    {
        return new static();
    }

    public function remove(string $id) : void
    {
        $this->container->remove($id);
    }

    public function add(VertexInterface $vertex) : void
    {
        $this->container->add($vertex);
    }

}