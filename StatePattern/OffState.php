<?php

require_once("IState.php");

class OffState implements IState
{

    private $context;

    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    public function turnOnLight()
    {
        echo "Light is turned on<br>";
        $this->context->setState($this->context->getOnState());
    }

    public function turnOffLight()
    {
        echo "Light is already off-> take no action<br>";
    }
}
