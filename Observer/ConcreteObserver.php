<?php

class ConcreteObserver implements SplObserver
{
    public function update(SplSubject $subject): void
    {
        echo $subject->getData() . PHP_EOL;
    }
}
