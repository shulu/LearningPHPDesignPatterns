<?php

class ConcreteObserverDT implements Observer
{
    private $currentState;

    public function update(Subject $subject)
    {
        $this->currentState = $subject->getState();
        echo "The DT new state is: " . $this->currentState . "<br>" . PHP_EOL;
    }
}
