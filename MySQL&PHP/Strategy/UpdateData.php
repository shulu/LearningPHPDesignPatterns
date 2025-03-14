<?php

class UpdateData implements IStrategy
{

    private $dataPack;
    public function algorithm(Array $dataPack)
    {

        $this->dataPack = $dataPack;
        $hookUp = UniversalConnect::doConnect();
        $test = $hookUp->real_escape_string($_POST['data']);
        echo "Your new data is now {$test}";
    }
}
