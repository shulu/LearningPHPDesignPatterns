<?php
require_once('Decorator.php');
class Video extends Decorator
{
    public function __construct(IComponent $siteNow)
    {
        $this->site = $siteNow;
    }

    public function getSite()
    {
        $fmat = '<br>&nbsp;&nbsp; Video' . PHP_EOL;
        return $this->site->getSite() . $fmat;
    }

    public function getPrice()
    {
        return 350 + $this->site->getPrice();
    }
}
