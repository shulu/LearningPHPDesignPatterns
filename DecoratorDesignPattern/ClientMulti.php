<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class ClientMulti
{
    private $hotDate;

    public function __construct()
    {
        $this->hotDate = new Female();
        $this->hotDate->setAge("Age Group 4");
        echo $this->hotDate->getAge();
        $this->hotDate = $this->wrapComponent($this->hotDate);
        echo $this->hotDate->getFeature();
    }

    private function wrapComponent(IComponentMulti $component)
    {
        $component = new ProgramLang($component);
        $component->setFeature("php");
        $component = new Hardware($component);
        $component->setFeature("lin");
        $component = new Food($component);
        $component->setFeature("veg");
        return $component;
    }
}

$worker = new ClientMulti();
