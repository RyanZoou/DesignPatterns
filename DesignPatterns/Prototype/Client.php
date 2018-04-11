<?php
/**
 * User: ryan
 * Date: 2017/12/23
 * Time: 下午5:02
 */
function __autoload($class_name)
{
    include_once $class_name . '.php';
}

class Client
{
    private $market;
    private $manage;
    private $enginner;

    public function __construct()
    {
        $this->makeConProto();

        $Tess = clone $this->market;
        $this->setaEmployee($Tess, 'Tess Smith', 101, 'ts101-1234', 'tess.png');
        $this->showEmployee($Tess);

        $Jacob = clone $this->market;
        $this->setaEmployee($Jacob, 'Jacob Jones', 102, 'jjs101-2234', 'jacob.png');
        $this->showEmployee($Tess);

        $Ricky = $this->manage;
        $this->setaEmployee($Ricky, 'Ricky Rodrigues', 203, 'rr203-5634', 'ricky.png');
        $this->showEmployee($Ricky);

        $Olivia = clone $this->enginner;
        $this->setaEmployee($Olivia, 'Olivia perez', 302, 'op302-1278', 'olivia.png');
        $this->showEmployee($Olivia);

        $John = clone $this->enginner;
        $this->setaEmployee($John, 'John Jackson', 301, 'jj302-1445', 'john.png');
        $this->showEmployee($John);

    }

    private function makeConProto()
    {
        $this->market = new Marketing();
        $this->manage = new Management();
        $this->enginner = new Engineering();
    }

    private function showEmployee(IAcmePrototype $employeeNow)
    {
        $px = $employeeNow->getPic();
        echo "<img src=$px width='150' height='150'><br/>";
        echo $employeeNow->getName() . '<br/>';
        echo $employeeNow->getDept() . ':' . $employeeNow::UNIT . '<BR/>';
        echo $employeeNow->getId() . '<p/>';
    }

    private function setaEmployee(IAcmePrototype $employeeNow, $nm, $dp, $id, $px)
    {
        $employeeNow->setName($nm);
        $employeeNow->setDept($dp);
        $employeeNow->setId($id);
        $employeeNow->setPic("pix/$px");
    }
}

$worker = new Client();