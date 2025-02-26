<?php

require_once 'FruitStore.php';
require_once 'CitrusStore.php';

class UseProducts
{
    public function __construct()
    {
        $appleSauce = new FruitStore();
        $orangeJuice = new CitrusStore();
        $this->doInterface($appleSauce);
        $this->doInterface($orangeJuice);
    }

    function doInterface(IProduct $product)
    {
        echo $product->apples();
        echo $product->oranges();
    }
}

$worker = new UseProducts();
