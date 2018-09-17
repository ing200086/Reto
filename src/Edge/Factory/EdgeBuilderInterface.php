<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 9/16/18
 * Time: 7:30 PM
 */

namespace Ing200086\Reto\Edge\Factory;

use Ing200086\Reto\Vertex\Collection as VertexCollection;
use Ing200086\Reto\Edge\Base;


interface EdgeBuilderInterface {
    public function source() : string;

    public function destination() : string;

    public function build(VertexCollection $vertices) : Base;
}