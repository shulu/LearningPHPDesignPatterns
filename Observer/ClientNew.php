<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class ClientNew
{

    public function __construct()
    {

        $sub = new ConcreteSubjectNew();

        $ob1 = new ConcreteObserverDT();
        $ob2 = new ConcreteObserverTablet();
        $ob3 = new ConcreteObserverPhone();

        $sub->attachObser($ob1);
        $sub->attachObser($ob2);
        $sub->attachObser($ob3);

        $sub->setState('Some PHP State');
        $sub->notify();
    }
}
$worker = new ClientNew();
