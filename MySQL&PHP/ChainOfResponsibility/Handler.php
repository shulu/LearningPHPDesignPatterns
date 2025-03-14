<?php

abstract class Handler
{
    protected $hungeryFactory;
    protected $successor;
    protected $monthNow;
    protected $dayNow;
    protected $hookup;
    protected $tableMaster;
    protected $sql;
    protected $handleNow;
    abstract public function handleRequest($request);
    abstract public function setSuccessor($nextService);
}
