<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});
class Context
{
    /**
     * @var IState
     *
     * @author shulu <961085397@qq.com>
     * @datetime 2025-03-07
     */
    private $offState;
    private $onState;
    private $currentState;

    public function __construct()
    {
        $this->offState = new OffState($this);
        $this->onState = new OnState($this);
        //开始状态为OFF
        $this->currentState = $this->offState;
    }

    public function turnOnLight()
    {
        $this->currentState->turnOnLight();
    }

    public function turnOffLight()
    {
        $this->currentState->turnOffLight();
    }

    public function setState(IState $state)
    {
        $this->currentState = $state;
    }

    public function getOnState()
    {
        return $this->onState;
    }

    public function getOffState()
    {
        return $this->offState;
    }
}
