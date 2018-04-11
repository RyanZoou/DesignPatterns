<?php
/**
 * User: ryan
 * Date: 2017/12/16
 * Time: 下午2:06
 */
namespace Interfaces;
abstract class Creator
{
    protected abstract function factoryMethod();

    public function startFactory()
    {
        $mfg = $this->factoryMethod();
        return $mfg;
    }
}

?>