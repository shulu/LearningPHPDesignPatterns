<?php

function __autoload($class_name)
{
    include $class_name . '.php';
}

class ClientFly
{
    //用于直接实例化
    private $fly1;
    private $fly2;

    //用于克隆
    private $c1Fly;
    private $c2Fly;
    private $updateCloneFly;

    public function __construct()
    {
        //实例化
        $this->fly1 = new MaleProto();
        $this->fly2 = new FemaleProto();

        //克隆
        $this->c1Fly = clone $this->fly1;
        $this->c2Fly = clone $this->fly2;
        $this->updateCloneFly = clone $this->fly2;

        //更新克隆
        $this->c1Fly->mated = "true";
        $this->c2Fly->fecundity = "186";
        $this->updateCloneFly->eyeColor = "purple";
        $this->updateCloneFly->wingBeat = "220";
        $this->updateCloneFly->unitEyes = "750";
        $this->updateCloneFly->fecundity = "92";

        //通过类型提示方法发送
        $this->showFly($this->c1Fly);
        $this->showFly($this->c2Fly);
        $this->showFly($this->updateCloneFly);
    }

    private function showFly(IPrototype $fly)
    {
        echo 'Eye color: ' . $fly->eyeColor . '<br>' . PHP_EOL;
        echo 'Wing Beats/second: ' . $fly->wingBeat . '<br>' . PHP_EOL;
        echo 'Eye units: ' . $fly->unitEyes . '<br>' . PHP_EOL;
        $genderNow = $fly::gender;
        echo "Gender:{$genderNow}<br>" . PHP_EOL;
        if ($genderNow == "FEMALE") {
            echo "Number of eggs:{$fly->fecundity}<p>" . PHP_EOL;
        } else {
            echo "Mated:{$fly->mated}<p>" . PHP_EOL;
        }
    }
}

$worker = new ClientFly();
