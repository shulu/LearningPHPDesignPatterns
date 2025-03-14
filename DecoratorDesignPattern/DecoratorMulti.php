<?php

require_once("IComponentMulti.php");

abstract class DecoratorMulti extends IComponentMulti
{
    public function setAge($ageNow)
    {
        $this->ageGroup = $ageNow;
    }

    public function getAge()
    {
        return $this->ageGroup;
    }
}
