<?php

class DisplayData implements IStrategy
{

    private $dataPack;

    public function algorithm(array $dataPack)
    {
        $this->dataPack = $dataPack;
        $hookUp = UniversalConnect::doConnect();
        $test = "Hear's all the data";
        echo $test;
    }
}
