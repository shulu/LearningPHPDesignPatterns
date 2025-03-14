<?php

class HelloClone
{

    private $builtInConstructor;

    public function __construct()
    {
        echo 'Hello, clone!<br>' . PHP_EOL;
        $this->builtInConstructor = "Constructor creation";
    }

    public function doWork()
    {
        echo $this->builtInConstructor;
    }
}

$original = new HelloClone();
$original->doWork();

$cloneIt = clone $original;
$cloneIt->doWork();
