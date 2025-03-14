<?php

class DeleteRecord implements IStrategy
{
    private $dataPack;

    public function algorithm(array $dataPack)
    {
        $this->dataPack = $dataPack;
        $hookUp = UniversalConnect::doConnect();
        $test = $hookUp->real_escape_string($_POST['data']);
        echo "Your data {$test} has been deleted";
    }
}
