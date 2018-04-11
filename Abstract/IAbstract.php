<?php
/**
 * User: ryan
 * Date: 2017/10/28
 * Time: 下午2:45
 */
abstract class IAbstract
{
    protected $valueNow;

    /****
     * @return integer
     */
    abstract protected function giveCost();

    /****
     * @return string
     */
    abstract protected function giveCity();

    public function displayShow()
    {
        $stringCost = $this->giveCost();
        $stringCost = (string)$stringCost;
        $allTogther = 'Cost:' . $stringCost . ' for ' . $this->giveCity();
        return $allTogther;
    }
}