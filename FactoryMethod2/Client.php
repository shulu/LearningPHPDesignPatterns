<?php
require_once('CountryFactory.php');
require_once('AProduct.php');
class Client
{
    private $factory;

    public function __construct()
    {
        $this->factory = new CountryFactory();
        echo $this->factory->doFactory(new AProduct());
    }
}
$worker = new Client();
