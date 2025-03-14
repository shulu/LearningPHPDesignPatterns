<?php

require_once('IComponent.php');
require_once('BasicSite.php');
require_once('Maintenace.php');
require_once('Video.php');
require_once('Database.php');


class Client
{
    private $basicSite;

    public function __construct()
    {
        $this->basicSite = new BasicSite();
        $siteNow = $this->basicSite;
        $siteNow = $this->wrapComponent($siteNow);
        echo $siteNow->getSite();
        echo $siteNow->getPrice();
    }

    private function wrapComponent(IComponent $component)
    {
        $component = new Maintenace($component);
        // $component = new Video($component);
        // $component = new Database($component);
        return $component;
    }
}
$wokee = new Client();
