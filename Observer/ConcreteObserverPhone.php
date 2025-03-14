<?php

class ConcreteObserverPhone implements Observer
{
    private $currentState;

    public function update(Subject $subject)
    {
        $this->currentState = $subject->getState();
        echo "The Phone new state is: " . $this->currentState . "<br>" . PHP_EOL;
    }
}
