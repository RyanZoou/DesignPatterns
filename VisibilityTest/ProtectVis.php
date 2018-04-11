<?php
/**
 * User: ryan
 * Date: 2017/10/26
 * Time: 下午9:47
 */
abstract class ProtectVis
{
    abstract protected function countMoney();
    protected $wage;

    protected function setHourly($hourly)
    {
        return $hourly;
    }
}