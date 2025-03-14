<?php

class DollarCalc 
{
    private $dollar;
    private $product;
    private $service;
    
    public $rate = 1;
    
    public function requestCalc($productNow, $serviceNow)
    {
        $this->product = $productNow;
        $this->service = $serviceNow;
        
        $this->dollar = $this->product + $this->service;
        
        return $this->requestTotal();
    }
    
    public function requestTotal()
    {
        $this->dollar *= $this->rate;
        
        return $this->dollar;
    }
    
    public function __construct()
    {
        $this->rate = 1;
    }
    
    public function addTax()
    {
        return $this->dollar = $this->dollar * 1.08;
    }
}