<?php

require_once('IProduct.php');

class CitrusStore implements IProduct
{
    public function apples()
    {
        return "CitrusStore sez--We don't sell apples.<br/>";
    }

    public function oranges()
    {
        return "CitrusStore sez--We have citrus.<br/>";
    }
}
