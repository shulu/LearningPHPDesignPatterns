<?php
require_once('Context.php');
class Client
{
    private $context;

    public function run()
    {
        $this->context = new Context();
        $this->context->turnOnLight();
        $this->context->turnOffLight();
        $this->context->turnOnLight();
        $this->context->turnOnLight();
        $this->context->turnOffLight();
    }
}
$worker = new Client();
$worker->run();
