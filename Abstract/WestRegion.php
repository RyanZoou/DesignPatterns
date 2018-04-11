<?php
/**
 * User: ryan
 * Date: 2017/10/28
 * Time: 下午3:00
 */
include_once ('IAbstract.php');
class WestRegion extends IAbstract
{
    protected function giveCost()
    {
        // TODO: Implement giveCost() method.
        $this->valueNow = 210.38 / 2;
        return $this->valueNow;
    }

    protected function giveCity()
    {
        // TODO: Implement giveCity() method.
        return  'Rattlesnake Culch';
    }
}