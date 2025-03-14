<?php

require_once("IState.php");

class OnState implements IState
{
    private $context;

    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    public function turnOnLight()
    {
        echo "Light is already on-> take no action<br>";
    }

    public function turnOffLight()
    {
        echo "Light is turned off<br>";
        $this->context->setState($this->context->getOffState());
    }
}
