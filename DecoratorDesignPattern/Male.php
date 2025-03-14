<?php

require_once('IComponentMulti.php');

class Male extends IComponentMulti
{

    public function __construct()
    {
        $this->date = "Male";
        $this->setFeature("<br/>Dude programmer features: ");
    }

    public function getAge()
    {
        return $this->ageGroup;
    }

    public function setAge($ageNow)
    {
        $this->ageGroup = $ageNow;
    }

    public function getFeature()
    {
        return $this->feature;
    }

    public function setFeature($feature)
    {
        $this->feature = $feature;
    }
}
