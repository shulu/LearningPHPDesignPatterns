<?php

require_once 'Creator.php';

class CountryFactory extends Creator
{
    private $country;

    protected function factoryMethod(IProduct $product)
    {
        $this->country = $product;
        return $this->country->getProperties();
    }
}
