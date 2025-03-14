<?php

class D1 extends Handler
{
    public function setSuccessor($nextService)
    {
        $this->successor = $nextService;
    }

    public function handleRequest($request)
    {
        $dateCheck = $request->getService();
        $this->monthNow = intval($dateCheck['month']);
        $this->dayNow = intval($dateCheck['mday']);

        $this->handleNow = ($this->monthNow == 9 && $this->dayNow >= 15) && ($this->monthNow == 9 && $this->dayNow <= 22);

        if ($this->handleNow) {
            $this->hungeryFactory = new HungerFactory();
            echo $this->hungeryFactory->startFactory(new C1());
        } else if ($this->successor != NULL) {
            $this->successor->handleRequest($request);
        }
    }
}
