<?php
/**
 * User: ryan
 * Date: 2018/1/2
 * Time: 下午10:05
 */
include_once 'EuroCalc.php';
include_once 'ITarget.php';

class EuroAdapter extends EuroCalc implements ITarget
{
    public function __construct()
    {
        $this->requester();
    }

    function requester()
    {
        // TODO: Implement requester() method.
        $this->rate = 0.8111;
        return $this->rate;
    }
}