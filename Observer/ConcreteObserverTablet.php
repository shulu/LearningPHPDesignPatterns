<?php

class ConcreteObserverTablet implements Observer
{
    private $currentState;

    public function update(Subject $subject)
    {
        $this->currentState = $subject->getState();
        echo "The Tablet new state is: " . $this->currentState . "<br>" . PHP_EOL;
    }
}
