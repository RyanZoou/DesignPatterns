<?php
/**
 * User: ryan
 * Date: 2017/10/28
 * Time: 下午3:11
 */
include_once ('NorthRegion.php');
include_once ('WestRegion.php');
class Client
{
    public function __construct()
    {
        $north = new NorthRegion();
        $weth = new WestRegion();

        $this->showInterface($north);
        $this->showInterface($weth);
    }

    private function showInterface(IAbstract $region)
    {
        echo $region->displayShow() . "<br>";
    }
}

$worker = new Client();