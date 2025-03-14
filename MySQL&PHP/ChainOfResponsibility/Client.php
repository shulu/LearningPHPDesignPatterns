<?php

class Client
{
    private $queryNow;

    public function __construct()
    {
        if (isset($_POST['sendNow'])) {
            $this->queryNow = $_POST['sendNow'];
        }

        $q1 = new Q1();
        $q2 = new Q2();
        $q3 = new Q3();
        $q4 = new Q4();
        $q5 = new Q5();

        $q1->setSuccessor($q2);
        $q2->setSuccessor($q3);
        $q3->setSuccessor($q4);
        $q4->setSuccessor($q5);

        $loadup = new Request($this->queryNow);
        $q1->handleRequest($loadup);
    }
}
