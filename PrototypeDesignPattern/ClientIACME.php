<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});


class ClientIACME
{

    private $market;
    private $engineer;
    private $manage;

    public function __construct()
    {
        $this->makeConProto();

        $Tess = clone $this->market;
        $this->setEmployee($Tess, "Tess Smith", 101, "ts101-1234", "Tess.png");
        $this->showEmployee($Tess);

        $Jacob = clone $this->market;
        $this->setEmployee($Jacob, "Jacob Jones", 102, "jj101-2234", "Jacob.png");
        $this->showEmployee($Jacob);

        $Rick = clone $this->manage;
        $this->setEmployee($Rick, "Rick Rogers", 203, "rr101-3234", "Rick.png");
        $this->showEmployee($Rick);

        $Olivia = clone $this->engineer;
        $this->setEmployee($Olivia, "Olivia Williams", 301, "ow101-4234", "Olivia.png");
        $this->showEmployee($Olivia);

        $John = clone $this->engineer;
        $this->setEmployee($John, "John Jackson", 302, "jj101-5234", "John.png");
        $this->showEmployee($John);
    }

    public function makeConProto()
    {
        $this->market = new Marketing();
        $this->engineer = new Engineering();
        $this->manage = new Management();
    }

    public function showEmployee(IAcmePrototype $employeeNow)
    {
        $px = $employeeNow->getPic();
        echo "<img src=$px width='150' height='150'><br>" . PHP_EOL;
        echo $employeeNow->getName() . "<br>" . PHP_EOL;
        echo $employeeNow->getDept() . ": " . $employeeNow::UNIT . "<br>" . PHP_EOL;
        echo $employeeNow->getId() . "<p>" . PHP_EOL;
    }

    private function setEmployee(IAcmePrototype $employeeNow, $nm, $dp, $id, $px)
    {
        $employeeNow->setName($nm);
        $employeeNow->setDept($dp);
        $employeeNow->setId($id);
        $employeeNow->setPic("employees/{$px}");
    }
}

$woker = new ClientIACME();
