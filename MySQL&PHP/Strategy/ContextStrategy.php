<?php

class ContextStrategy
{
    private $strategy;
    private $dataPack;

    public function __construct(IStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function algorithm(array $dataPack)
    {
        $this->dataPack = $dataPack;
        $this->strategy->algorithm($dataPack);
    }
}
