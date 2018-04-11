<?php
/**
 * User: ryan
 * Date: 2017/12/16
 * Time: 下午2:06
 */
namespace Interfaces;
abstract class Creator
{
    protected abstract function factoryMethod(Product $produt);

    public function doFactory($productNow)
    {
        $mfg = $this->factoryMethod($productNow);
        return $mfg;
    }
}

?>