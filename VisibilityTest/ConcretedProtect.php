<?php
/**
 * User: ryan
 * Date: 2017/10/26
 * Time: 下午9:51
 */
include_once ('ProtectVis.php');
class ConcretedProtect extends ProtectVis
{
    function __construct()
    {
        /******
         * 在使用抽象类的方法之前必须要先实现该方法
         */
        $this->countMoney();
    }

    /*******
     * 继承了抽象类，抽象类里的抽象方法都必须继承，不然就会一只报错
     */
    protected function countMoney()
    {
        // TODO: Implement countMoney() method.
        $this->wage = 'Your hourly wage is $';
        echo $this->wage . $this->setHourly(36);
    }
}

$worker = new ConcretedProtect();