<?php

class ConcreteSubjectNew extends Subject
{
    public function setState($stateSet)
    {
        $this->stateNow = $stateSet;
    }

    public function getState()
    {
        return $this->stateNow;
    }
}
