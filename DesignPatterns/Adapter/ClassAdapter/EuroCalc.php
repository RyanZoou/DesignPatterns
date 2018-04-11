<?php
/**
 * User: ryan
 * Date: 2018/1/2
 * Time: 下午9:53
 */
class EuroCalc
{
    private $euro;
    private $product;
    private $service;
    public $rate = 1;

    public function requestCalc($productNow, $serviceNow)
    {
        $this->product = $productNow;
        $this->service = $serviceNow;
        $this->euro = $this->product + $this->service;

        return $this->requestTotal();
    }

    public function requestTotal()
    {
        $this->euro *= $this->rate;
        return $this->euro;
    }
}