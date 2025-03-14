<?php

class EuroCalc
{
    private $euro;
    private $product;
    private $service;
    
    public $rate = 1;
    
    public function requestCalc($productNow, $serviceNow)
    {
        $this->product = $productNow;
        $this->service = $serviceNow;
        
        $this->euro = $this->product + $this->service;
        
        return $this->requestTotal();
    }
    
    public function requestTotal()
    {
        $this->euro *= $this->rate;
        
        return $this->euro;
    }
    
    public function __construct()
    {
        $this->rate = 1;
    }
    
    public function addTax()
    {
        return $this->euro = $this->euro * 1.17;
    }
}