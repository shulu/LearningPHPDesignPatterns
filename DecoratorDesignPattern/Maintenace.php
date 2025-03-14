<?php
require_once('Decorator.php');
class Maintenace extends Decorator
{
    public function __construct(IComponent $siteNow)
    {
        $this->site = $siteNow;
    }

    public function getSite()
    {
        $fmat = '<br>&nbsp;&nbsp; Maintenance' . PHP_EOL;
        return $this->site->getSite() . $fmat;
    }

    public function getPrice()
    {
        return 950 + $this->site->getPrice();
    }
}
