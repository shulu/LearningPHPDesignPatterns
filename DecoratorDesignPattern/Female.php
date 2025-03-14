<?php

require_once('IComponentMulti.php');

class Female extends IComponentMulti
{

    public function __construct()
    {
        $this->date = "Female";
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
