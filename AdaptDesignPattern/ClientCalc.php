<?php

require_once('DollarCalc.php');
require_once('EuroAdapter.php');
require_once('ITarget.php');

class ClientCalc
{
    private $requestNow;
    private $dollarRequest;

    public function __construct()
    {
        $this->requestNow = new EuroAdapter();
        $this->dollarRequest = new DollarCalc();

        $euro = "&#8364;";
        echo "Euros: $euro" . $this->makeAdapterRequest($this->requestNow) . "<br>";
        echo "Dollars: $" . $this->makeDollarRequest($this->dollarRequest) . "<br>";
    }

    private function makeAdapterRequest(ITarget $req)
    {
        return $req->requester();
    }

    private function makeDollarRequest(DollarCalc $req)
    {
        return $req->requestCalc(40, 50);
    }
}

$worker = new ClientCalc();
