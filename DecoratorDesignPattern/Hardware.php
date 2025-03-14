<?php

require_once("DecoratorMulti.php");

class Hardware extends DecoratorMulti
{

    private $hardwareNow;

    public function __construct(IComponentMulti $dateNow)
    {
        $this->date = $dateNow;
    }

    private $box = array('mac' => 'Macintosh', 'dell' => 'Dell', 'hp' => 'Hewlett Packard', 'lin' => 'Linux');

    public function setFeature($hdw)
    {
        $this->hardwareNow = $this->box[$hdw];
    }

    public function getFeature()
    {
        $output = $this->date->getFeature();
        $fmat = "<br/>&nbsp;&nbsp;" . PHP_EOL;
        $output .= "$fmat Preferred hardware: " . PHP_EOL;
        $output .= $this->hardwareNow . PHP_EOL;
        return $output;
    }
}
