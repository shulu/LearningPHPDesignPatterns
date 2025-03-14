<?php

require_once('Creator.php');
require_once('GraphicProduct.php');

class GraphicFactory extends Creator
{
    public function factoryMethod(): Product
    {
        return new GraphicProduct();
    }
}
