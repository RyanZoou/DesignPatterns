<?php
/**
 * User: ryan
 * Date: 2018/1/2
 * Time: 下午9:46
 */
class DollarCalc
{
    private $dollar;
    private $product;
    private $service;
    public $rate = 1;

    public function requestCalc($productNow, $serviceNow)
    {
        $this->product = $productNow;
        $this->service = $serviceNow;
        $this->dollar = $this->product + $this->service;

        return $this->requestTotal();
    }

    public function requestTotal()
    {
        $this->dollar *= $this->rate;
        return $this->dollar;
    }
}