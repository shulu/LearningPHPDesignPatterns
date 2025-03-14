<?php

require_once("DecoratorMulti.php");

class Food extends DecoratorMulti
{

    private $chowNow;

    public function __construct(IComponentMulti $dateNow)
    {
        $this->date = $dateNow;
    }

    private $snacks = array('piz' => 'Pizza', 'burg' => 'Burgers', 'nach' => 'Nachos', 'veg' => 'Veggies');

    public function setFeature($yum)
    {
        $this->chowNow = $this->snacks[$yum];
    }

    public function getFeature()
    {
        $output = $this->date->getFeature();
        $fmat = "<br/>&nbsp;&nbsp;" . PHP_EOL;
        $output .= "$fmat Favorite food: " . PHP_EOL;
        $output .= $this->chowNow;
        return $output;
    }
}
