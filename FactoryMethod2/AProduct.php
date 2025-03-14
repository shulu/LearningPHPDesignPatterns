<?php

require_once('IProduct.php');

class AProduct implements IProduct
{
    public function getProperties()
    {
        return "This is a product of type A";
    }
}
