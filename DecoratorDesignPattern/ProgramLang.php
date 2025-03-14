<?php

require_once('DecoratorMulti.php');

class ProgramLang extends DecoratorMulti
{

    private $languageNow;

    private $languageArray = array('php' => 'PHP', 'cs' => 'C#', 'js' => 'JavaScript', 'as3' => 'ActionScript 3.0');

    public function __construct(IComponentMulti $dateNow)
    {
        $this->date = $dateNow;
    }

    public function setFeature($lan)
    {
        $this->languageNow = $this->languageArray[$lan];
    }

    public function getFeature()
    {
        $output = $this->date->getFeature();
        $fmat = "<br/>&nbsp;&nbsp;" . PHP_EOL;
        $output .= "$fmat Preferred programming language: " . PHP_EOL;
        $output .= $this->languageNow . PHP_EOL;
        return $output;
    }
}
