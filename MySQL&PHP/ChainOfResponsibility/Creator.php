<?php

abstract class Creator
{
    protected $countryNow;
    protected abstract function factoryMethod(Product $product);

    public function feedFactory(Product $productNow)
    {
        $this->countryNow = $productNow;
        $mfg = $this->factoryMethod($this->countryNow);
        return $mfg;
    }
}