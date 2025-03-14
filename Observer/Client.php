<?php

spl_autoload_register(function ($class) {
    require_once $class . '.php';
});

class Client
{
    public function __construct()
    {
        echo "create three new concrete observes a new concrete subject" . PHP_EOL;
        $ob1 = new ConcreteObserver();
        $ob2 = new ConcreteObserver();
        $ob3 = new ConcreteObserver();

        $subject = new ConcreteSubject();
        $subject->setObservers();
        $subject->setData("Here's the data");
        $subject->attach($ob1);
        $subject->attach($ob2);
        $subject->attach($ob3);

        $subject->notify();

        echo "Detach observers ob3.Now only ob1 and ob2 will be notified" . PHP_EOL;
        $subject->detach($ob3);
        $subject->notify();

        echo "Reset data and reattach ob3 and detach ob2--only ob1 and 3 are noptified" . PHP_EOL;
        $subject->setData("More data that only ob1 and ob3 need");
        $subject->attach($ob3);
        $subject->detach($ob2);
        $subject->notify();
    }
}

$worker = new Client();
