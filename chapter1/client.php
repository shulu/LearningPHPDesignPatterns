<?php

require_once('./MobileSniffer.php');

class Client
{
    private $mobSniff;

    public function __construct()
    {
        $this->mobSniff = new MobileSniffer();
        echo 'Device = ' . $this->mobSniff->findDevice() . '<br>' . PHP_EOL;
        echo 'Browser = ' . $this->mobSniff->findBrowser() . PHP_EOL;
    }
}

$trigger = new Client();
1