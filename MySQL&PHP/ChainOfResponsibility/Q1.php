<?php

class Q1 extends Handler
{
    public function setSuccessor($nextService)
    {
        $this->successor = $nextService;
    }

    public function handleRequest($request)
    {
        $this->handle = "q1";
        if ($request->getService() == $this->handle) {
            $this->hookup = UniversalConnect::doConnect();
            $this->tableMaster = "q1";
            $this->sql = "SELECT * FROM " . $this->tableMaster;
            $result = $this->hookup->query($this->sql);
            while ($row = $result->fetch_assoc()) {
                echo "ID: " . $row['id'] . "<br>";
                echo "Question: " . $row['question'] . "<br>";
                echo "Answer: " . $row['answer'] . "<br>";
            }
        } elseif ($this->successor != NULL) {
            $this->successor->handleRequest($request);
        }
    }
}
