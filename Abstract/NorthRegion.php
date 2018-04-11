<?php
/**
 * User: ryan
 * Date: 2017/10/28
 * Time: 下午2:55
 */
include_once ('IAbstract.php');
class NorthRegion extends IAbstract
{
    protected function giveCost()
    {
        // TODO: Implement giveCost() method.
        return 210.38;
    }

    protected function giveCity()
    {
        // TODO: Implement giveCity() method.
        return 'Moose Breath';
    }
}