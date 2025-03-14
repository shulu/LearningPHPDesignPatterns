<?php

require_once('Creator.php');
require_once('TextProduct.php');

class TextFactory extends Creator
{
    public function factoryMethod(): Product
    {
        return new TextProduct();
    }
}
